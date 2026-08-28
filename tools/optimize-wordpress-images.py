"""Reduce WordPress package weight without changing asset URLs or formats."""

from __future__ import annotations

import argparse
from pathlib import Path

from PIL import Image, ImageOps


RASTER_EXTENSIONS = {".jpg", ".jpeg", ".png", ".webp"}


def optimize_image(path: Path, max_dimension: int) -> tuple[int, int]:
    original_size = path.stat().st_size
    with Image.open(path) as source:
        image = ImageOps.exif_transpose(source)
        if max(image.size) > max_dimension:
            ratio = max_dimension / max(image.size)
            image = image.resize(
                (max(1, round(image.width * ratio)), max(1, round(image.height * ratio))),
                Image.Resampling.LANCZOS,
            )

        temporary = path.with_name(f"{path.stem}.optimized{path.suffix}")
        suffix = path.suffix.lower()
        if suffix in {".jpg", ".jpeg"}:
            if image.mode not in {"RGB", "L"}:
                image = image.convert("RGB")
            image.save(
                temporary,
                format="JPEG",
                quality=85,
                optimize=True,
                progressive=True,
                subsampling="4:2:0",
            )
        elif suffix == ".png":
            image.save(temporary, format="PNG", optimize=True, compress_level=9)
        else:
            image.save(temporary, format="WEBP", quality=86, method=6)

    optimized_size = temporary.stat().st_size
    if optimized_size < original_size:
        temporary.replace(path)
        return original_size, optimized_size

    temporary.unlink(missing_ok=True)
    return original_size, original_size


def main() -> None:
    parser = argparse.ArgumentParser()
    parser.add_argument("root", type=Path)
    parser.add_argument("--max-dimension", type=int, default=2560)
    args = parser.parse_args()

    before = 0
    after = 0
    processed = 0
    for path in args.root.rglob("*"):
        if not path.is_file() or path.suffix.lower() not in RASTER_EXTENSIONS:
            continue
        old_size, new_size = optimize_image(path, args.max_dimension)
        before += old_size
        after += new_size
        processed += 1

    print(
        f"Optimized {processed} images: "
        f"{before / 1024 / 1024:.2f} MB -> {after / 1024 / 1024:.2f} MB"
    )


if __name__ == "__main__":
    main()
