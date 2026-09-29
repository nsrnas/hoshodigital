<?php
/**
 * Template Name: Approach - Optimization
 * Template Post Type: page
 *
 * @package Hosho_Digital
 */
get_header();
?>
<main id="main-content" class="optimization-page">
	<!-- HERO -->
	<?php hosho_render_hero( "Spend. Governance. Security.", 'approach/optimization/hero.jpg', array( 'class' => 'page-hero--company' ) ); ?>

	
	<!-- GENAI COST REALITY -->
	<section class="optimization-reality" aria-labelledby="optimization-reality-title">
		<div class="container optimization-reality__grid">
			<div class="optimization-reality__stat">
				<p class="optimization-reality__eyebrow">The Reality</p>
				<p class="optimization-reality__number" aria-hidden="true">50%</p>
				<h2 id="optimization-reality-title">of GenAI projects will overrun their budget.</h2>
				<div class="optimization-reality__source">
					<p>Source: </p>
					<img src="<?php echo esc_url( hosho_asset_url( 'approach/optimization/gartner.png' ) ); ?>" alt="Gartner" loading="lazy" decoding="async">
				</div>
			</div>
			<div class="optimization-reality__copy">
				<p>AI incurs a cost every time it is used. Over a model's lifetime, usage accounts for at least 70% of its total cost.</p>
				<p>Budget overruns are driven by architecture and operations choices. Cost controls need to be built into the system from day one.</p>
			</div>
		</div>
	</section>

	<!-- AI BUDGET -->
	<section class="ai-budget"><div class="container">
		<div class="budget-header motion"><p>AI costs scale with usage in ways traditional software licenses never did. We build in the controls to keep that spend predictable.</p></div>
		<div class="budget-grid">
			<article class="budget-card">
				<div class="budget-icon" aria-hidden="true">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
						<path d="M12 2 4 5v6c0 5 3.5 9.5 8 11 4.5-1.5 8-6 8-11V5l-8-3Z"/>
						<path d="M8 12h8"/>
						<path d="M12 8v8"/>
					</svg>
				</div>
				<h3>Intelligent Token Management</h3>
				<p>Advanced prompt engineering to minimize payload while maximizing output accuracy.</p>
			</article>
			<article class="budget-card">
				<div class="budget-icon" aria-hidden="true">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
						<path d="M3 21h18"/><path d="M7 16 12 11l3 3 5-6"/>
					</svg>
				</div>
				<h3>Cost <br>Optimization</h3>
				<p>Dynamic routing to appropriate models based on task complexity and cost-efficiency.</p>
			</article>
			<article class="budget-card">	
				<div class="budget-icon" aria-hidden="true">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
						<path d="M4 21V9"/> 
						<path d="M4 9a2 2 0 1 0 0-4"/>	
						<path d="M12 21V5"/>
						<path d="M12 11a2 2 0 1 0 0-4"/>
						<path d="M20 21V13"/>
						<path d="M20 13a2 2 0 1 0 0-4"/>
					</svg>
				</div>
				<h3>Usage <br>Optimization</h3>
				<p>Real-time monitoring of AI consumption with granular control over organizational access.</p>
			</article>
			<article class="budget-card">
				<div class="budget-icon" aria-hidden="true">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round">
						<path d="M12 2 4 5v6c0 5 3.5 9.5 8 11 4.5-1.5 8-6 8-11V5l-8-3Z"/>
					</svg>
				</div>
				<h3>Responsible AI Deployment</h3>
				<p>Strict governance frameworks ensuring compliance and ethical AI utilization.</p>
			</article>
		</div>
	</div></section>

	<!-- QUOTE -->
	<?php hosho_render_quote( "<strong>Before you say you <br>can't do something… <br>try it.</strong>", 'Sakichi Toyoda', 'approach/optimization/sakichi-toyoda.png', 'quote-band--standard quote-band--red-soft quote-band--masayoshi' ); ?>

	<!-- FINAL CTA -->
	<?php hosho_render_cta( '', '<strong>READY TO OPTIMIZE YOUR AI SPEND?</strong>', '', 'Speak to Us', home_url( '/contact' ), 'approach/optimization/cta.jpg' ); ?>
</main>
<?php get_footer(); ?>
