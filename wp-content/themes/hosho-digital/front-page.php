<?php
/**
 * Homepage template.
 *
 * @package Hosho_Digital
 */

get_header();
?>
<main id="main-content" class="home-page">
	<style>
		/* =========================================================
		HOSHO HOMEPAGE
		========================================================= */

		:root {
			--red: #bf1e23;
			--red-dark: #8f0f14;
			--red-soft: #f3a9ac;
			--navy: #0f2946;
			--light: #f7f7f7;
			--text: #18314e;
			--gray: #6b7787;
			--border: #ececec;
			--container: 1200px;
		}

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			font-family: Inter, sans-serif;
			color: var(--text);
			background: #fff;
		}

		.home-page {
			width: 100%;
			overflow: hidden;
		}

		.container {
			max-width: 1200px;
			width: calc(100% - 80px);
			margin: auto;
		}

		section {
			position: relative;
		}

		img {
			display: block;
			width: 100%;
		}

		a {
			text-decoration: none;
		}

		.small-title {
			font-size: 11px;
			font-weight: 700;
			letter-spacing: 2px;
			text-transform: uppercase;
			color: var(--red);
		}

		.section-title {
			font-size: 54px;
			font-weight: 800;
			line-height: 1;
			color: var(--navy);
		}

		.section-desc {
			color: #697586;
			font-size: 16px;
			line-height: 1.7;
		}

		.btn-red {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			gap: 10px;
			background: var(--red);
			color: #fff;
			padding: 14px 28px;
			font-weight: 700;
			font-size: 13px;
			letter-spacing: 1px;
			transition: .25s;
		}

		.btn-red:hover {
			background: #a9181c;
		}

		.btn-outline {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			color: #fff;
			border: 1px solid rgba(255, 255, 255, .35);
			padding: 14px 26px;
			font-size: 13px;
			font-weight: 700;
			letter-spacing: 1px;
		}

		.btn-outline:hover {
			background: rgba(255, 255, 255, .1);
		}

		.btn-outline-dark {
			display: inline-flex;
			align-items: center;
			justify-content: center;
			color: var(--navy);
			border: 1px solid var(--navy);
			padding: 16px 30px;
			font-size: 13px;
			font-weight: 700;
			letter-spacing: 1px;
			transition: .25s;
		}

		.btn-outline-dark:hover {
			background: var(--navy);
			color: #fff;
		}

		/* =========================================================
		HERO
		========================================================= */

		.hero {
			position: relative;
			min-height: 760px;
			display: flex;
			align-items: center;
			overflow: hidden;
			background:
				linear-gradient(90deg,
					rgba(94, 8, 10, .88) 0%,
					rgba(150, 20, 22, .74) 38%,
					rgba(180, 40, 35, .28) 100%);
		}

		.hero-image {
			position: absolute;
			inset: 0;
		}

		.hero-image img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			opacity: .95;
		}

		.hero-overlay {
			position: absolute;
			inset: 0;
			background:
				radial-gradient(circle at 30% 10%, rgba(255, 255, 255, .08), transparent 40%),
				linear-gradient(90deg,
					rgba(104, 11, 12, .84),
					rgba(122, 17, 20, .55),
					rgba(0, 0, 0, .08));
		}

		.hero-content {
			position: relative;
			z-index: 2;
			max-width: 620px;
			color: #fff;
		}

		.hero h1 {
			font-size: 64px;
			line-height: 1.05;
			font-weight: 900;
			letter-spacing: -1px;
			text-transform: uppercase;
			margin-bottom: 28px;
		}

		.hero p {
			font-size: 18px;
			line-height: 1.7;
			color: rgba(255, 255, 255, .88);
			margin-bottom: 42px;
			max-width: 520px;
		}

		.hero-buttons {
			display: flex;
			gap: 18px;
		}

		/* =========================================================
		YOUR SUCCESS. OUR GUARANTEE.
		========================================================= */

		.success-guarantee {
			padding: 100px 0 120px;
			background: #fff;
		}

		.success-card {
			width: 460px;
			max-width: 100%;
			margin: 0 auto 100px;
			background: #fff;
			box-shadow: 0 20px 45px rgba(0, 0, 0, .08);
			border: 1px solid #eee;
			text-align: center;
			padding: 40px 30px;
		}

		.success-card h2 {
			font-size: 30px;
			font-weight: 800;
			line-height: 1.2;
			color: var(--red-dark);
			margin-bottom: 25px;
		}

		.success-seal {
			width: 130px;
			margin: 0 auto;
			border: 1px solid #eee;
		}

		.guarantee-body {
			display: grid;
			grid-template-columns: 380px 1fr;
			gap: 60px;
			align-items: center;
		}

		.guarantee-body h3 {
			font-size: 54px;
			font-weight: 800;
			line-height: 1.05;
			color: var(--navy);
			margin-bottom: 18px;
		}

		.guarantee-underline {
			display: block;
			width: 90px;
			height: 4px;
			background: var(--red);
		}

		.pillars-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 24px;
		}

		.pillar-card {
			background: #f4f4f5;
			padding: 30px 26px;
			border-left: 4px solid var(--red);
		}

		.pillar-card.capability {
			border-left-color: var(--red-soft);
		}

		.pillar-card.integrity {
			border-left-color: var(--navy);
		}

		.pillar-card .pillar-label {
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 12px;
		}

		.pillar-card h4 {
			font-size: 18px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 14px;
		}

		.pillar-card p {
			font-size: 15px;
			line-height: 1.6;
			color: #667483;
		}

		/*==================================================
		THE INTELLIGENT DIGITAL CORE
		==================================================*/

		.digital-core {
			padding: 120px 0 100px;
			background: #fff;
		}

		.digital-core-heading {
			max-width: 780px;
			margin-bottom: 60px;
		}

		.digital-core-heading h2 {
			font-size: 46px;
			line-height: 1.1;
			margin: 14px 0 22px;
			color: var(--navy);
			font-weight: 800;
		}

		.digital-core-heading p {
			color: #444f5c;
			line-height: 1.8;
			font-size: 17px;
		}

		.digital-core-process {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 50px;
			margin-bottom: 55px;
		}

		.core-step .step-label {
			font-size: 14px;
			font-weight: 700;
			letter-spacing: .5px;
			color: var(--red);
			text-transform: uppercase;
			margin-bottom: 12px;
		}

		.core-step h3 {
			font-size: 26px;
			font-weight: 700;
			color: var(--navy);
			margin-bottom: 16px;
		}

		.core-step p {
			line-height: 1.7;
			color: #4a5561;
			font-size: 15px;
		}

		/*==================================================
		COGNITIVE SHIFT
		==================================================*/

		.cognitive-shift {
			padding: 100px 0 130px;
			background: #ffffff;
		}

		.cognitive-header {
			max-width: 850px;
			margin: auto;
			text-align: center;
			margin-bottom: 70px;
		}

		.cognitive-header h2 {
			margin: 18px 0 22px;
		}

		.compare-flow {
			display: flex;
			justify-content: center;
			align-items: center;
			gap: 45px;
			margin-bottom: 45px;
		}

		.compare-card {
			width: 340px;
			border-radius: 6px;
			padding: 36px 34px;
			text-align: center;
		}

		.compare-card.old {
			background: #fff;
			border: 1px solid #ececec;
			box-shadow: 0 15px 35px rgba(0, 0, 0, .06);
		}

		.compare-card.new {
			background: var(--navy);
			color: #fff;
			border-bottom: 4px solid var(--red);
		}

		.compare-card .compare-label {
			font-size: 12px;
			font-weight: 700;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--gray);
			margin-bottom: 12px;
		}

		.compare-card.new .compare-label {
			color: rgba(255, 255, 255, .65);
		}

		.compare-card h3 {
			font-size: 24px;
			font-weight: 800;
			color: var(--navy);
			margin-bottom: 14px;
		}

		.compare-card.new h3 {
			color: #fff;
		}

		.compare-card p {
			color: #6b7787;
			line-height: 1.6;
			font-size: 15px;
		}

		.compare-card.new p {
			color: rgba(255, 255, 255, .82);
		}

		.compare-arrow {
			text-align: center;
		}

		.compare-arrow .arrow-glyph {
			font-size: 34px;
			color: var(--red);
			font-weight: bold;
			line-height: 1;
		}

		.compare-arrow .arrow-label {
			margin-top: 10px;
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1px;
			color: var(--red);
			text-transform: uppercase;
		}

		.cognitive-quote {
			max-width: 760px;
			margin: auto;
			text-align: center;
			font-style: italic;
			color: #4a5561;
			font-size: 18px;
			line-height: 1.7;
		}

		/*==================================================
		FROM STRATEGY TO CONTINUOUS VALUE (SERVICES)
		==================================================*/

		.services-section {
			padding: 110px 0;
			background: #f8f8f8;
		}

		.strategy-heading {
			font-size: 30px;
			font-weight: 800;
			letter-spacing: .5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 22px;
		}

		.strategy-desc {
			max-width: 900px;
			font-size: 17px;
			line-height: 1.8;
			color: #2c3644;
			margin-bottom: 60px;
		}

		.strategy-desc strong {
			color: var(--navy);
		}

		.services-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 30px;
			margin-bottom: 60px;
		}

		.service-card {
			background: white;
			padding: 40px 36px;
			border-top: 4px solid var(--red);
			border: 1px solid #ececec;
			border-top: 4px solid var(--red);
			box-shadow: 0 15px 35px rgba(0, 0, 0, .05);
		}

		.service-card.consulting {
			border-top-color: #6d84a6;
		}

		.service-card.engineering {
			border-top-color: var(--navy);
		}

		.service-card-head {
			display: flex;
			align-items: center;
			gap: 14px;
			margin-bottom: 6px;
		}

		.service-icon {
			font-size: 26px;
		}

		.service-card h3 {
			font-size: 22px;
			font-weight: 700;
			color: var(--navy);
		}

		.service-category {
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--gray);
			margin-bottom: 18px;
		}

		.service-card p.service-desc {
			line-height: 1.7;
			color: #4a5561;
			font-size: 15px;
			margin-bottom: 22px;
		}

		.service-divider {
			display: block;
			height: 1px;
			background: #ececec;
			margin-bottom: 20px;
		}

		.capabilities-label {
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: var(--gray);
			margin-bottom: 12px;
		}

		.capability-tags {
			display: flex;
			flex-wrap: wrap;
			gap: 10px;
		}

		.capability-tag {
			border: 1px solid #dfe3e8;
			border-radius: 4px;
			padding: 6px 12px;
			font-size: 13px;
			font-weight: 600;
			color: var(--navy);
		}

		/*==================================================
		CONTINUOUS BUSINESS VALUE
		==================================================*/

		.business-value-box {
			background: #112d4b;
			border-radius: 8px;
			padding: 65px;
			text-align: center;
			color: white;
		}

		.business-value-box .small-title.white {
			color: #ffffff;
			opacity: .75;
		}

		.business-value-box h2 {
			font-size: 40px;
			margin: 18px 0 40px;
			font-weight: 800;
		}

		.value-items {
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 45px;
		}

		.value-item {
			display: flex;
			align-items: center;
			gap: 12px;
			font-size: 14px;
			font-weight: 700;
			letter-spacing: 1px;
			text-transform: uppercase;
		}

		.value-item span {
			width: 8px;
			height: 8px;
			background: #c11d22;
			border-radius: 50%;
		}

		/*==================================================
		QUOTE
		==================================================*/

		.quote-section {
			position: relative;
			overflow: hidden;
			background:
				linear-gradient(90deg, #991518, #132d4c);
			color: white;
		}

		.quote-content {
			display: grid;
			grid-template-columns: 1fr 520px;
			align-items: end;
		}

		.quote-left {
			padding: 120px 0;
		}

		.quote-mark {
			font-size: 90px;
			color: #f1d0d0;
			line-height: 1;
			margin-bottom: 10px;
		}

		.quote-left h2 {
			font-size: 50px;
			line-height: 1.1;
			max-width: 520px;
			margin-bottom: 35px;
			font-weight: 800;
		}

		.quote-author {
			font-size: 15px;
			font-weight: 700;
			letter-spacing: .5px;
			text-transform: uppercase;
			border-top: 1px solid rgba(255, 255, 255, .3);
			padding-top: 20px;
			max-width: 480px;
		}

		.quote-author span {
			display: block;
			margin-top: 10px;
			font-size: 15px;
			font-weight: 400;
			text-transform: none;
			opacity: .8;
		}

		.quote-right {
			display: flex;
			justify-content: flex-end;
		}

		.quote-right img {
			width: 100%;
			max-width: 520px;
			object-fit: cover;
		}

		/*==========================================
		RAPID TO BE SPOKE
		==========================================*/

		.rapid-spectrum {
			padding: 120px 0;
			background: #f8dddd;
		}

		.rapid-header {
			text-align: center;
			max-width: 760px;
			margin: auto;
			margin-bottom: 60px;
		}

		.rapid-header h2 {
			font-size: 40px;
			color: #112d4b;
			line-height: 1.25;
			margin-top: 18px;
			font-weight: 800;
		}

		.rapid-header strong {
			color: #c01d22;
		}

		.rapid-process {
			display: flex;
			justify-content: center;
			align-items: stretch;
			margin-bottom: 70px;
		}

		.process-item {
			width: 220px;
			height: 66px;
			flex: 0 0 auto;
			display: flex;
			align-items: center;
			justify-content: center;
			color: white;
			font-size: 15px;
			font-weight: 800;
			letter-spacing: .8px;
			text-transform: uppercase;
			text-align: center;
			padding: 0 18px;
			clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 14% 50%);
			margin-left: -26px;
		}

		.process-item:first-child {
			margin-left: 0;
			clip-path: polygon(0 0, 85% 0, 100% 50%, 85% 100%, 0 100%, 0 100%);
			padding-left: 26px;
		}

		.process-item:nth-child(1) {
			background: linear-gradient(135deg, #e2373c, #c31f24);
		}

		.process-item:nth-child(2) {
			background: linear-gradient(135deg, #c31f24, #a8181d);
		}

		.process-item:nth-child(3) {
			background: linear-gradient(135deg, #a8181d, #8c1213);
		}

		.process-item:nth-child(4) {
			background: linear-gradient(135deg, #8c1213, #6f0e12);
		}

		.rapid-grid {
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			gap: 28px;
		}

		.rapid-card {
			background: white;
			border-radius: 4px;
			padding: 38px;
			border: 1px solid #ececec;
			box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
		}

		.rapid-card.featured {
			background: #112d4b;
			color: white;
		}

		.rapid-card-head {
			display: flex;
			align-items: center;
			gap: 14px;
			margin-bottom: 20px;
		}

		.rapid-icon {
			font-size: 24px;
			color: var(--red);
		}

		.rapid-card.featured .rapid-icon {
			color: #fff;
		}

		.rapid-card h3 {
			font-size: 24px;
			font-weight: 700;
		}

		.rapid-card p.rapid-desc {
			color: #687484;
			line-height: 1.7;
			margin-bottom: 22px;
		}

		.rapid-card.featured p.rapid-desc {
			color: rgba(255, 255, 255, .8);
		}

		.rapid-usecases-label {
			font-size: 11px;
			font-weight: 800;
			letter-spacing: 1px;
			text-transform: uppercase;
			color: #98a4b3;
			margin-bottom: 14px;
		}

		.rapid-card ul {
			list-style: none;
			padding: 0;
		}

		.rapid-card li {
			display: flex;
			align-items: center;
			gap: 12px;
			margin-bottom: 12px;
			font-weight: 700;
			color: var(--navy);
		}

		.rapid-card.featured li {
			color: #fff;
		}

		.rapid-card li::before {
			content: "✓";
			flex: 0 0 auto;
			width: 18px;
			height: 18px;
			border-radius: 50%;
			border: 1px solid var(--red);
			color: var(--red);
			font-size: 11px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.rapid-card.featured li::before {
			border-color: rgba(255, 255, 255, .6);
			color: #fff;
		}

		/*==================================
		AI BUDGET
		==================================*/

		.ai-budget {
			padding: 120px 0;
			background: #ffffff;
		}

		.budget-header {
			max-width: 900px;
			margin: auto;
			text-align: center;
			margin-bottom: 70px;
		}

		.budget-header h2 {
			font-size: 42px;
			color: #112d4b;
			margin-bottom: 20px;
			line-height: 1.2;
			font-weight: 800;
		}

		.budget-header p {
			max-width: 720px;
			margin: auto;
			color: #6b7787;
			line-height: 1.8;
		}

		.budget-grid {
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 25px;
		}

		.budget-card {
			background: #fff;
			border: 1px solid #ededed;
			border-radius: 12px;
			padding: 35px;
			transition: .3s;
		}

		.budget-card:hover {
			transform: translateY(-8px);
			box-shadow: 0 15px 35px rgba(0, 0, 0, .08);
		}

		.budget-icon {
			width: 50px;
			height: 50px;
			background: #fff4f4;
			border-radius: 14px;
			display: flex;
			align-items: center;
			justify-content: center;
			margin-bottom: 22px;
			font-size: 22px;
		}

		.budget-card h3 {
			font-size: 20px;
			margin-bottom: 15px;
			color: #112d4b;
			font-weight: 700;
		}

		.budget-card p {
			color: #697586;
			line-height: 1.7;
			font-size: 15px;
		}

		/*==================================
		SOLUTION GROWTH
		==================================*/

		.solution-growth {
			padding: 110px 0;
			background: #fff;
		}

		.growth-header {
			text-align: center;
			margin-bottom: 55px;
		}

		.growth-header h2 {
			font-size: 38px;
			color: #112d4b;
			font-weight: 800;
			letter-spacing: .5px;
		}

		.growth-header p {
			margin-top: 14px;
			color: #4a5561;
			font-style: italic;
		}

		.growth-timeline {
			display: flex;
			align-items: flex-end;
			gap: 0;
		}

		.growth-step {
			flex: 1;
			position: relative;
		}

		.growth-wedge {
			height: 45px;
			background: #111;
			clip-path: polygon(0 100%, 100% 0, 100% 100%);
		}

		.growth-box {
			background: #c51d23;
			color: white;
			text-align: center;
			padding: 30px 20px;
			display: flex;
			align-items: center;
			justify-content: center;
		}

		.growth-step.s1 .growth-box {
			min-height: 90px;
		}

		.growth-step.s2 .growth-box {
			min-height: 150px;
		}

		.growth-step.s3 .growth-box {
			min-height: 210px;
		}

		.growth-box h3 {
			font-size: 26px;
			font-weight: 800;
		}

		.growth-year {
			text-align: center;
			margin-top: 18px;
			font-size: 15px;
			color: var(--text);
			font-weight: 600;
		}

		/*==================================
		PARTNERS
		==================================*/

		.partners-section {
			padding: 90px 0 110px;
			background: #fff;
		}

		.partner-category-section {
			margin-bottom: 80px;
		}

		.partner-category-section:last-child {
			margin-bottom: 0;
		}

		.partner-category-title {
			display: block;
			font-size: 13px;
			font-weight: 800;
			letter-spacing: 1.5px;
			text-transform: uppercase;
			color: var(--red);
			margin-bottom: 34px;
			text-align: center;
		}

		.partner-logos-wrap {
			overflow: hidden;
			max-width: 900px;
			margin: 0 auto;
			-webkit-mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
			mask-image: linear-gradient(90deg, transparent, #000 8%, #000 92%, transparent);
		}

		.partner-logos-track {
			display: flex;
			align-items: center;
			width: max-content;
			animation: logos-scroll 22s linear infinite;
		}

		.partner-logos-track:hover {
			animation-play-state: paused;
		}

		.partner-logo {
			flex: 0 0 auto;
			width: 180px;
			height: 70px;
			display: flex;
			align-items: center;
			justify-content: center;
			transition: .3s;
			opacity: .85;
		}

		.partner-logo:hover {
			opacity: 1;
		}

		.partner-logo img {
			height: 60px;
			width: auto;
			max-width: 130px;
			object-fit: contain;
			display: block;
		}

		@keyframes logos-scroll {
			from {
				transform: translateX(0);
			}
			to {
				transform: translateX(-50%);
			}
		}

		/*==================================
		FINAL CTA
		==================================*/

		.final-cta {
			position: relative;
			overflow: hidden;
			background: #102a47;
			padding: 150px 0;
		}

		.final-cta::before {
			content: "";
			position: absolute;
			inset: 0;
			background: url( 'images/homepage/cta.png' ) center/cover;
			opacity: .18;
		}

		.cta-overlay {
			position: absolute;
			inset: 0;
			background:
				radial-gradient(circle at center, rgba(193, 29, 34, .35), transparent 45%),
				linear-gradient(rgba(15, 41, 70, .15), rgba(15, 41, 70, .85));
		}

		.cta-content {
			position: relative;
			z-index: 2;
			max-width: 760px;
			text-align: center;
			margin: auto;
			color: white;
		}

		.cta-content h2 {
			font-size: 52px;
			margin: 22px 0 26px;
			line-height: 1.15;
			font-weight: 800;
		}

		.cta-content p {
			max-width: 700px;
			margin: auto;
			margin-bottom: 40px;
			color: rgba(255, 255, 255, .82);
			line-height: 1.8;
		}
	</style>

	<!-- =========================================================
	HERO SECTION
	========================================================= -->

	<section class="hero">
		<div class="hero-image">
			<img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/hero.jpg' ) ); ?>" alt="Abstract red digital core visual">
		</div>
		<div class="hero-overlay"></div>
		<div class="container">
			<div class="hero-content">
				<h1>
					Lead with AI —<br>
					Or Get Left<br>
					Behind.
				</h1>
				<p>
					We rethink building and operating software in the AI era.
					Transcend traditional consulting with a partner that builds
					the digital core of tomorrow.
				</p>
				<div class="hero-buttons">
					<a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn-red">
						Contact Us →
					</a>
					<a href="#approach" class="btn-outline">
						Explore Our Approach
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	YOUR SUCCESS. OUR GUARANTEE.
	========================================================= -->

	<section class="success-guarantee">
		<div class="container">

			<div class="success-card">
				<h2>
					Your Success<br>
					Our Guarantee
				</h2>
				<img class="success-seal" src="<?php echo esc_url( hosho_asset_url( 'images/homepage/stamp.png' ) ); ?>" alt="Guarantee seal">
			</div>

			<div class="guarantee-body">
				<div class="guarantee-left">
					<h3>
						Our<br>
						Guarantee
					</h3>
					<span class="guarantee-underline"></span>
				</div>

				<div class="pillars-grid">
					<div class="pillar-card outcome">
						<div class="pillar-label">Outcome</div>
						<h4>Precision Value</h4>
						<p>
							Measurable enterprise value through audited
							operational efficiency and radical innovation.
						</p>
					</div>

					<div class="pillar-card capability">
						<div class="pillar-label">Capability</div>
						<h4>Empowered Teams</h4>
						<p>
							Knowledge transfer that ensures your leadership
							can master the AI frontier independently.
						</p>
					</div>

					<div class="pillar-card integrity">
						<div class="pillar-label">Integrity</div>
						<h4>Principled Partnership</h4>
						<p>
							Strategic alliances built on radical transparency
							and aligned long-term business goals.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE INTELLIGENT DIGITAL CORE
	========================================================= -->

	<section class="digital-core" id="approach">
		<div class="container">
			<div class="digital-core-heading">
				<span class="small-title">
					Our Approach
				</span>
				<h2>
					The Intelligent Digital Core
				</h2>
				<p>
					We transform disconnected systems into one Intelligent Digital
					Core, connecting data, applications, automation, and AI so your
					business can continuously evolve and scale.
				</p>
			</div>

			<div class="digital-core-process">
				<div class="core-step">
					<div class="step-label">01 / Understanding</div>
					<h3>Deep Discovery</h3>
					<p>
						We begin by auditing your existing data architecture and
						identifying the high-impact nodes where intelligence can
						drive immediate operational leverage.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">02 / Architecting</div>
					<h3>The Digital Core</h3>
					<p>
						We build a unified, self-evolving infrastructure that
						connects disparate data streams into a single,
						high-fidelity intelligence loop.
					</p>
				</div>

				<div class="core-step">
					<div class="step-label">03 / Scaling</div>
					<h3>Exponential Growth</h3>
					<p>
						We deploy adaptive AI solutions that don't just automate
						tasks, but autonomously optimize for business outcomes
						as your data grows.
					</p>
				</div>
			</div>

			<div style="text-align:center;">
				<a href="<?php echo esc_url(home_url('/approach')); ?>" class="btn-outline-dark">
					Find Out More
				</a>
			</div>
		</div>
	</section>

	<!-- =========================================================
	THE COGNITIVE SHIFT
	========================================================= -->

	<section class="cognitive-shift">
		<div class="container">
			<div class="cognitive-header">
				<span class="small-title">
					The Cognitive Shift
				</span>
				<h2 class="section-title">
					Redefining Enterprise Software.
				</h2>
				<p class="section-desc">
					Artificial Intelligence is redefining enterprise software.
					Organizations no longer need static applications, but they
					need intelligent solutions that continuously adapt, improve,
					and create measurable business value.
				</p>
			</div>

			<div class="compare-flow">
				<div class="compare-card old">
					<div class="compare-label">Traditional Model</div>
					<h3>Software as a Service</h3>
					<p>
						Static tools, manual workflows, and high maintenance
						overhead.
					</p>
				</div>

				<div class="compare-arrow">
					<div class="arrow-glyph">→</div>
					<div class="arrow-label">The Transformation</div>
				</div>

				<div class="compare-card new">
					<div class="compare-label">The New Standard</div>
					<h3>Solution as a Service</h3>
					<p>
						Continuous evolution combining business expertise and
						intelligent technology.
					</p>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	FROM STRATEGY TO CONTINUOUS VALUE
	========================================================= -->

	<section class="services-section">
		<div class="container">
			<h2 class="strategy-heading">
				From Strategy to Continuous Value
			</h2>
			<p class="strategy-desc">
				Unlike traditional software projects that end at delivery,
				Solution as a Service combines <strong>advisory</strong>,
				<strong>consulting</strong>, and <strong>engineering</strong>
				into one continuous partnership that evolves with your business.
			</p>

			<div class="services-grid">
				<!-- CARD 1 -->
				<div class="service-card advisory">
					<div class="service-card-head">
						<span class="service-icon">💡</span>
						<h3>Solution Advisory</h3>
					</div>
					<div class="service-category">Value Innovation</div>
					<p class="service-desc">
						Help organizations identify opportunities, define
						business priorities, and design AI-driven solutions
						aligned with strategic goals.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">AI Strategy</span>
						<span class="capability-tag">Business Re-engineering</span>
						<span class="capability-tag">Low-Code</span>
					</div>
				</div>

				<!-- CARD 2 -->
				<div class="service-card consulting">
					<div class="service-card-head">
						<span class="service-icon">🧩</span>
						<h3>Functional Consulting</h3>
					</div>
					<div class="service-category">Operational Efficiency</div>
					<p class="service-desc">
						Bridge business strategy with execution through
						process optimization, governance, and organizational
						change.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">Process Design</span>
						<span class="capability-tag">Governance</span>
						<span class="capability-tag">Change Mgmt</span>
					</div>
				</div>

				<!-- CARD 3 -->
				<div class="service-card engineering">
					<div class="service-card-head">
						<span class="service-icon">&lt;/&gt;</span>
						<h3>Software Engineering</h3>
					</div>
					<div class="service-category">Engineering Excellence</div>
					<p class="service-desc">
						Design, build, integrate, and continuously optimize
						enterprise-grade digital solutions powered by AI.
					</p>
					<span class="service-divider"></span>
					<div class="capabilities-label">Capabilities</div>
					<div class="capability-tags">
						<span class="capability-tag">Cloud Engineering</span>
						<span class="capability-tag">DevOps</span>
						<span class="capability-tag">Custom Dev</span>
					</div>
				</div>
			</div>

			<div class="business-value-box">
				<span class="small-title white">
					Convergence of Disciplines
				</span>
				<h2>
					Continuous Business Value
				</h2>
				<div class="value-items">
					<div class="value-item">
						<span></span>
						End-to-End Delivery
					</div>
					<div class="value-item">
						<span></span>
						Industry Accelerators
					</div>
					<div class="value-item">
						<span></span>
						Risk Mitigation
					</div>
					<div class="value-item">
						<span></span>
						User Satisfaction
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- =========================================================
	STEVE JOBS QUOTE
	========================================================= -->

	<section class="quote-section">
		<div class="container">
			<div class="quote-content">
				<div class="quote-left">
					<div class="quote-mark">
						"
					</div>
					<h2>
						Innovation is the
						ability to see
						change as an
						opportunity, not a
						threat.
					</h2>
					<div class="quote-author">
						Steve Jobs
						<span>
							Co-founder, chairman, and CEO of Apple Inc
						</span>
					</div>
				</div>
				<div class="quote-right">
					<img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/steve-jobs.png' ) ); ?>" alt="Steve Jobs portrait">
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	RAPID TO BE SPOKE
	=========================================== -->

	<section class="rapid-spectrum">
		<div class="container">
			<div class="rapid-header">
				<span class="small-title">
					Rapid to Be Spoke
				</span>
				<h2>
					Every engagement sits somewhere on this
					<strong>spectrum</strong>, we'll help you find where.
				</h2>
			</div>

			<!-- Process -->
			<div class="rapid-process">
				<div class="process-item">
					Data
				</div>
				<div class="process-item">
					Automation
				</div>
				<div class="process-item">
					AI
				</div>
				<div class="process-item">
					UX
				</div>
			</div>

			<!-- Cards -->
			<div class="rapid-grid">
				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon">🚀</span>
						<h3>Quick-Deploy AI</h3>
					</div>
					<p class="rapid-desc">
						Rapid integration of ready-to-use AI modules to solve
						immediate business bottlenecks.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>Customer Support Bots</li>
						<li>Automated Data Entry</li>
					</ul>
				</article>

				<article class="rapid-card featured">
					<div class="rapid-card-head">
						<span class="rapid-icon">🧬</span>
						<h3>Integrated AI Layer</h3>
					</div>
					<p class="rapid-desc">
						A middleware approach that connects existing legacy
						systems with a unified intelligent orchestration layer.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>ERP/CRM Intelligence</li>
						<li>Cross-Dept Workflows</li>
					</ul>
				</article>

				<article class="rapid-card">
					<div class="rapid-card-head">
						<span class="rapid-icon">📐</span>
						<h3>Bespoke AI Platform</h3>
					</div>
					<p class="rapid-desc">
						Custom-engineered AI infrastructure designed from the
						ground up to redefine your competitive advantage.
					</p>
					<div class="rapid-usecases-label">Ideal Use Cases</div>
					<ul>
						<li>Proprietary Models</li>
						<li>Industry-Specific Platforms</li>
					</ul>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	AI BUDGET
	=========================================== -->

	<section class="ai-budget">
		<div class="container">
			<div class="budget-header">
				<h2>
					Treat your AI spend like a budget, not a blank check
				</h2>
				<p>
					AI costs scale with usage in ways traditional software
					licenses never did. We build in the controls to keep that
					spend predictable.
				</p>
			</div>

			<div class="budget-grid">
				<article class="budget-card">
					<div class="budget-icon">📦</div>
					<h3>Intelligent Token Management</h3>
					<p>
						Advanced prompt engineering to minimize payload while
						maximizing output accuracy.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">📈</div>
					<h3>Cost Optimization</h3>
					<p>
						Dynamic routing to appropriate models based on task
						complexity and cost-efficiency.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">🎚️</div>
					<h3>Usage Optimization</h3>
					<p>
						Real-time monitoring of AI consumption with granular
						control over organizational access.
					</p>
				</article>

				<article class="budget-card">
					<div class="budget-icon">🛡️</div>
					<h3>Responsible AI Deployment</h3>
					<p>
						Strict governance frameworks ensuring compliance and
						ethical AI utilization.
					</p>
				</article>
			</div>
		</div>
	</section>

	<!-- ==========================================
	Solution Growth
	=========================================== -->

	<section class="solution-growth">
		<div class="container">
			<div class="growth-header">
				<h2>SOLUTIONS GROWTH</h2>
				<p>
					"Solutions" = distinct systems we've taken from design to
					live production
				</p>
			</div>

			<div class="growth-timeline">
				<div class="growth-step s1">
					<div class="growth-box">
						<h3>8 Solutions</h3>
					</div>
					<div class="growth-year">2023 — 2024</div>
				</div>

				<div class="growth-step s2">
					<div class="growth-box">
						<h3>15 Solutions</h3>
					</div>
					<div class="growth-year">2025</div>
				</div>

				<div class="growth-step s3">
					<div class="growth-box">
						<h3>30+ Solutions</h3>
					</div>
					<div class="growth-year">2026</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	PARTNERS
	=========================================== -->

	<section class="partners-section">
		<div class="container">
			<!-- Technology Partners -->
			<div class="partner-category-section">
				<span class="partner-category-title">Technology Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/openai.jpg' ) ); ?>" alt="OpenAI"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/microsoft.jpg' ) ); ?>" alt="Microsoft"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/google-cloud.jpg' ) ); ?>" alt="Google Cloud"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/tech-partners/anthropic.jpg' ) ); ?>" alt="Anthropic"></div>
					</div>
				</div>
			</div>

			<!-- Business Partners -->
			<div class="partner-category-section">
				<span class="partner-category-title">Business Partners</span>
				<div class="partner-logos-wrap">
					<div class="partner-logos-track">
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
						<!-- duplicated for a seamless infinite loop -->
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/ingram.png' ) ); ?>" alt="Ingram Micro"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/sbf.png' ) ); ?>" alt="SBF"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/sg-tech.png' ) ); ?>" alt="SG Tech"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/pax8.png' ) ); ?>" alt="Pax8"></div>
						<div class="partner-logo"><img src="<?php echo esc_url( hosho_asset_url( 'images/homepage/buss-partners/crayon.png' ) ); ?>" alt="Partner"></div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	FINAL CTA
	=========================================== -->

	<section class="final-cta">
		<div class="cta-overlay"></div>
		<div class="container">
			<div class="cta-content">
				<span class="small-title white">
					Redefine Your Architecture
				</span>
				<h2>
					Ready to Build Your
					Intelligent Digital Core?
				</h2>
				<p>
					Discuss where you are in your AI journey and determine the
					most suitable path—from rapid deployment to fully bespoke
					enterprise AI platforms.
				</p>
				<a href="#" class="btn-red">
					Consult Our Experts →
				</a>
			</div>
		</div>
	</section>

</main>
<?php
get_footer();