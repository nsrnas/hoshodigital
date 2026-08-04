<?php
/**
 * Fallback template.
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main class="default-page" id="main-content">
	<div class="shell default-page__inner">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>
				<article <?php post_class(); ?>>
					<h1><?php the_title(); ?></h1>
					<div class="default-page__content"><?php the_content(); ?></div>
				</article>
			<?php endwhile; ?>
		<?php else : ?>
			<h1><?php esc_html_e( 'Nothing found', 'hosho-digital' ); ?></h1>
		<?php endif; ?>
	</div>
</main>
<?php
get_footer();

