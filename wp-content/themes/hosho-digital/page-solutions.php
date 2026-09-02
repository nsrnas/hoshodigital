<?php get_header(); ?>
<main id="main-content">
  <?php hosho_render_hero( 'Solve the Business.<br>Then Apply the Technology.', 'hero-solutions.jpg', array( 'class' => 'page-hero--solutions' ) ); ?>

  <section class="section"><div class="shell intro-grid motion"><div><h2>AI isn't the starting point. Your business challenge is.</h2></div><div class="body-copy"><p class="lede">We identify where value is being lost, then bring together AI, automation, and data wrapped in an optimized user experience.</p></div></div></section>

  <section class="section section-mist"><div class="shell"><div class="solutions-insight motion">
    <span class="solutions-insight__bar" aria-hidden="true"></span>
    <div class="solutions-insight__body">
      <h2 class="solutions-insight__heading">Only <strong class="solutions-insight__big" data-count-up data-count-end="7" data-count-suffix="%">7%</strong> of organizations have successfully scaled AI across the enterprise.</h2>
      <p>While nearly <strong class="solutions-insight__medium">90%</strong> of organizations are already experimenting with AI, very few have successfully transformed AI initiatives into enterprise-wide business value.</p>
      <div class="solutions-insight__source">
        <img class="source-logo source-logo--mckinsey" src="<?php echo esc_url( hosho_asset_url( 'mckinsey-logo.png' ) ); ?>" alt="" aria-hidden="true">
      </div>
    </div>
  </div></div></section>

  <section class="section speedo-section">
    <div class="shell motion">
      <div class="speedo-layout">
        <div class="speedo-gauge">
          <svg class="speedo-svg" viewBox="0 0 280 180" aria-hidden="true">
            <!-- Background track (grey) -->
            <path class="speedo-track" d="M30,160 A110,110 0 1,1 250,160" fill="none" stroke="#e5e7eb" stroke-width="18" stroke-linecap="round"/>
            <!-- Colored arc: navy → red gradient -->
            <defs>
              <linearGradient id="speedo-grad" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" stop-color="var(--navy, #0e2a47)"/>
                <stop offset="50%" stop-color="#4c5b71"/>
                <stop offset="100%" stop-color="var(--red-dark, #b90004)"/>
              </linearGradient>
            </defs>
            <path class="speedo-fill" d="M30,160 A110,110 0 1,1 250,160" fill="none" stroke="url(#speedo-grad)" stroke-width="18" stroke-linecap="round" stroke-dasharray="0 9999"/>

            <g class="speedo-needle-group">
              <line class="speedo-needle" x1="140" y1="155" x2="140" y2="55" stroke="var(--red-dark, #b90004)" stroke-width="3" stroke-linecap="round"/>
              <circle cx="140" cy="155" r="8" fill="var(--navy, #0e2a47)"/>
              <circle cx="140" cy="155" r="4" fill="white"/>
            </g>
            <!-- Scale labels -->
            <text x="10" y="164" class="speedo-label" text-anchor="middle">0</text>
            <text x="35" y="88" class="speedo-label" text-anchor="middle">10</text>
            <text x="100" y="40" class="speedo-label" text-anchor="middle">20</text>
            <text x="180" y="40" class="speedo-label" text-anchor="middle">30</text>
            <text x="245" y="88" class="speedo-label" text-anchor="middle">40</text>
            <text x="270" y="164" class="speedo-label" text-anchor="middle">50</text>
          </svg>
          <div class="speedo-counter">
            <span class="speedo-number" data-speedo-count data-count-end="40" data-count-suffix="+">0</span>
            <span class="speedo-unit">Solutions</span>
          </div>
        </div>
        <div class="speedo-copy">
          <h2>0 &ndash; <strong>40+</strong> and Growing</h2>
          <p class="speedo-body">Since 2023, HOSHŌ Digital has rapidly built a comprehensive portfolio of over 40 intelligent enterprise solutions — spanning operational automation, customer engagement, and employee productivity — and we're just getting started.</p>
          <!-- <div class="speedo-timeline">
            <span class="speedo-year"><strong>2023</strong> Founded</span>
            <span class="speedo-year-divider" aria-hidden="true"></span>
            <span class="speedo-year"><strong>2025</strong> 40+ Solutions</span>
          </div> -->
        </div>
      </div>
    </div>
  </section>

  <section class="section section-navy"><div class="shell"><div class="intro-grid motion"><div><p class="eyebrow">Our solutions</p><h2>Transforming Business Through Connected Intelligence</h2></div><div class="body-copy"><p>Business transformation creates the greatest impact when organizations make every customer interaction smarter, give employees AI-powered leverage, and make business operations faster and more efficient. HOSHŌ Digital structures its solutions around three connected intelligence pillars that drive measurable business outcomes.</p></div></div>
    <div class="solutions-cards">
      <article class="solutions-card solutions-card--ops motion">
        <div class="solutions-card__icon solutions-card__icon--ops">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
            <path d="M24 14C18.477 14 14 18.477 14 24C14 29.523 18.477 34 24 34C29.523 34 34 29.523 34 24C34 18.477 29.523 14 24 14ZM24 28C21.791 28 20 26.209 20 24C20 21.791 21.791 20 24 20C26.209 20 28 21.791 28 24C28 26.209 26.209 28 24 28Z" fill="currentColor"/>
            <path d="M42 22H37.83C37.42 19.86 36.43 17.9 35 16.27L37.95 13.32C38.34 12.93 38.34 12.3 37.95 11.91L36.09 10.05C35.7 9.66 35.07 9.66 34.68 10.05L31.73 13C30.1 11.57 28.14 10.58 26 10.17V6C26 5.45 25.55 5 25 5H23C22.45 5 22 5.45 22 6V10.17C19.86 10.58 17.9 11.57 16.27 13L13.32 10.05C12.93 9.66 12.3 9.66 10.05 10.05C10.05 13.32L13 16.27C11.57 17.9 10.58 19.86 10.17 22H6C5.45 22 5 22.45 5 23V25C5 25.55 5.45 26 6 26H10.17C10.58 28.14 11.57 30.1 13 31.73L10.05 34.68C9.66 35.07 9.66 35.7 10.05 36.09L11.91 37.95C12.3 38.34 12.93 38.34 13.32 37.95L16.27 35C17.9 36.43 19.86 37.42 22 37.83V42C22 42.55 22.45 43 23 43H25C25.55 43 26 42.55 26 42V37.83C28.14 37.42 30.1 36.43 31.73 35L34.68 37.95C35.07 38.34 35.7 38.34 36.09 37.95L37.95 36.09C38.34 35.7 38.34 35.07 37.95 34.68L35 31.73C36.43 30.1 37.42 28.14 37.83 26H42C42.55 26 43 25.55 43 25V23C43 22.45 42.55 22 42 22Z" fill="currentColor"/>
          </svg>
        </div>
        <h3>Operational Intelligence</h3>
        <p>Make the business faster, smarter and more efficient through connected operations, intelligent automation, and enterprise-wide process optimization.</p>
        <a href="<?php echo esc_url( hosho_page_url( 'operational-intelligence' ) ); ?>" class="solutions-card__link">Explore Solutions <span aria-hidden="true">&#8599;</span></a>
      </article>
      <article class="solutions-card solutions-card--cx motion">
        <div class="solutions-card__icon solutions-card__icon--cx">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
            <path d="M24 24C28.4183 24 32 20.4183 32 16C32 11.5817 28.4183 8 24 8C19.5817 8 16 11.5817 16 16C16 20.4183 19.5817 24 24 24Z" fill="currentColor"/>
            <path d="M24 28C16.268 28 10 32.477 10 38C10 39.1046 10.8954 40 12 40H36C37.1046 40 38 39.1046 38 38C38 32.477 31.732 28 24 28Z" fill="currentColor"/>
            <path d="M38 12C38 14.2091 36.2091 16 34 16C31.7909 16 30 14.2091 30 12C30 9.79086 31.7909 8 34 8C36.2091 8 38 9.79086 38 12Z" fill="currentColor" opacity="0.6"/>
            <path d="M36 20C38.5 21.2 41 23.5 41 26C41 26.6 40.6 27 40 27H35" fill="currentColor" opacity="0.6"/>
          </svg>
        </div>
        <h3>Customer Intelligence</h3>
        <p>Make every interaction smarter through predictive engagement, AI-powered service, and connected sales processes.</p>
        <a href="<?php echo esc_url( hosho_page_url( 'customer-intelligence' ) ); ?>" class="solutions-card__link solutions-card__link--cx">Explore Solutions <span aria-hidden="true">&#8599;</span></a>
      </article>
      <article class="solutions-card solutions-card--ex motion">
        <div class="solutions-card__icon solutions-card__icon--ex">
          <svg width="48" height="48" viewBox="0 0 48 48" fill="none" aria-hidden="true">
            <path d="M16 22C19.866 22 23 18.866 23 15C23 11.134 19.866 8 16 8C12.134 8 9 11.134 9 15C9 18.866 12.134 22 16 22Z" fill="currentColor"/>
            <path d="M16 25C10.477 25 6 28.582 6 33V37C6 38.1046 6.89543 39 8 39H24C25.1046 39 26 38.1046 26 37V33C26 28.582 21.523 25 16 25Z" fill="currentColor"/>
            <path d="M32 20C35.3137 20 38 17.3137 38 14C38 10.6863 35.3137 8 32 8C28.6863 8 26 10.6863 26 14C26 17.3137 28.6863 20 32 20Z" fill="currentColor" opacity="0.65"/>
            <path d="M32 23C29.6 23 27.5 24.1 26 25.8C28.2 27.5 29.5 29.8 29.5 32.5V37H40C41.1 37 42 36.1 42 35V32C42 27 37.5 23 32 23Z" fill="currentColor" opacity="0.65"/>
          </svg>
        </div>
        <h3>Workforce Intelligence</h3>
        <p>Give your people AI-powered leverage with digital workplace solutions that simplify HR processes, collaboration, and everyday work.</p>
        <a href="<?php echo esc_url( hosho_page_url( 'workforce-intelligence' ) ); ?>" class="solutions-card__link solutions-card__link--ex">Explore Solutions <span aria-hidden="true">&#8599;</span></a>
      </article>
    </div>
  </div></section>

  <section class="section"><div class="shell"><div class="solutions-advantage-header motion"><h2>The HOSHŌ DIGITAL Advantage</h2></div>
    <div class="editorial-grid solutions-why-grid">
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M3 20V15.7C2.05 14.833 1.313 13.821.788 12.663.263 11.504 0 10.283 0 9 0 6.5.875 4.375 2.625 2.625 4.375.875 6.5 0 9 0 11.083 0 12.929.613 14.538 1.838 16.146 3.063 17.192 4.658 17.675 6.625L18.975 11.75C19.058 12.067 19 12.354 18.8 12.613 18.6 12.871 18.333 13 18 13H16V16C16 16.55 15.804 17.021 15.413 17.413 15.021 17.804 14.55 18 14 18H12V20H10V16H14V11H16.7L15.75 7.125C15.367 5.608 14.55 4.375 13.3 3.425 12.05 2.475 10.617 2 9 2 7.067 2 5.417 2.675 4.05 4.025 2.683 5.375 2 7.017 2 8.95 2 9.95 2.204 10.9 2.613 11.8 3.021 12.7 3.6 13.5 4.35 14.2L5 14.8V20H3Z" fill="currentColor"/></svg></span>
        <h3>AI-Powered Core</h3>
        <p>Machine learning is baked into every module, providing predictive insights and automated logic.</p>
      </article>
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="20" height="10" viewBox="0 0 20 10" fill="none"><path d="M9 10H5C3.617 10 2.438 9.513 1.463 8.538.488 7.563 0 6.383 0 5 0 3.617.488 2.438 1.463 1.463 2.438.488 3.617 0 5 0H9V2H5C4.167 2 3.458 2.292 2.875 2.875 2.292 3.458 2 4.167 2 5 2 5.833 2.292 6.542 2.875 7.125 3.458 7.708 4.167 8 5 8H9V10ZM6 6V4H14V6H6ZM11 10V8H15C15.833 8 16.542 7.708 17.125 7.125 17.708 6.542 18 5.833 18 5 18 4.167 17.708 3.458 17.125 2.875 16.542 2.292 15.833 2 15 2H11V0H15C16.383 0 17.563.488 18.538 1.463 19.513 2.438 20 3.617 20 5 20 6.383 19.513 7.563 18.538 8.538 17.563 9.513 16.383 10 15 10H11Z" fill="currentColor"/></svg></span>
        <h3>Fully Integrated</h3>
        <p>Pre-built connectors for industry-standard ERPs, CRMs, and legacy enterprise stacks.</p>
      </article>
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="15" height="22" viewBox="0 0 15 22" fill="none"><path d="M2 22C1.45 22 .979 21.804.588 21.413.196 21.021 0 20.55 0 20V2C0 1.45.196.979.588.588.979.196 1.45 0 2 0H12C12.55 0 13.021.196 13.413.588 13.804.979 14 1.45 14 2V5.1C14.3 5.217 14.542 5.4 14.725 5.65 14.908 5.9 15 6.183 15 6.5V8.5C15 8.817 14.908 9.1 14.725 9.35 14.542 9.6 14.3 9.783 14 9.9V20C14 20.55 13.804 21.021 13.413 21.413 13.021 21.804 12.55 22 12 22H2ZM2 20H12V2H2V20ZM6.05 14L11 9.05 9.6 7.65 6.05 11.2 4.65 9.8 3.25 11.2 6.05 14Z" fill="currentColor"/></svg></span>
        <h3>Enterprise Security</h3>
        <p>SOC 2 Type II compliant with end-to-end encryption and regional data sovereignty.</p>
      </article>
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="16" height="20" viewBox="0 0 16 20" fill="none"><path d="M6.55 16.2L11.725 10H7.725L8.45 4.325 3.825 11H7.3L6.55 16.2ZM4 20L5 13H0L9 0H11L10 8H16L6 20H4Z" fill="currentColor"/></svg></span>
        <h3>Rapid Deployment</h3>
        <p>Low-code/No-code tools allow for fast configuration and immediate ROI for stakeholders.</p>
      </article>
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M0 18V16L2 14V18H0ZM4 18V12L6 10V18H4ZM8 18V10L10 12.025V18H8ZM12 18V12.025L14 10.025V18H12ZM16 18V8L18 6V18H16ZM0 12.825V10L7 3 11 7 18 0V2.825L11 9.825 7 5.825 0 12.825Z" fill="currentColor"/></svg></span>
        <h3>Real-Time Data</h3>
        <p>Streaming analytics ensure you are acting on data that is seconds old, not days.</p>
      </article>
      <article class="feature" style="grid-column:span 4">
        <span class="feature__index"><svg width="20" height="18" viewBox="0 0 20 18" fill="none"><path d="M9 18V16H17V8.9C17 6.95 16.321 5.296 14.963 3.938 13.604 2.579 11.95 1.9 10 1.9 8.05 1.9 6.396 2.579 5.038 3.938 3.679 5.296 3 6.95 3 8.9V15H2C1.45 15 .979 14.804.588 14.413.196 14.021 0 13.55 0 13V11C0 10.65.088 10.321.263 10.013.438 9.704.683 9.458 1 9.275L1.075 7.95C1.208 6.817 1.538 5.767 2.063 4.8 2.588 3.833 3.246 2.992 4.038 2.275 4.829 1.558 5.738 1 6.763.6 7.788.2 8.867 0 10 0 11.133 0 12.208.2 13.225.6 14.242 1 15.15 1.554 15.95 2.263 16.75 2.971 17.408 3.808 17.925 4.775 18.442 5.742 18.775 6.792 18.925 7.925L19 9.225C19.317 9.375 19.563 9.6 19.738 9.9 19.913 10.2 20 10.517 20 10.85V13.15C20 13.483 19.913 13.8 19.738 14.1 19.563 14.4 19.317 14.625 19 14.775V16C19 16.55 18.804 17.021 18.413 17.413 18.021 17.804 17.55 18 17 18H9Z" fill="currentColor"/></svg></span>
        <h3>Strategic Support</h3>
        <p>Dedicated transformation partners to guide your roadmap and ensure adoption success.</p>
      </article>
    </div>
  </div></section>

  <?php hosho_render_quote( 'The value of an idea lies in the using of it.', 'Thomas Edison', 'thomas-edison.png' ); ?>

  <?php hosho_render_cta( 'Start your transformation', 'What would your business do with intelligence?', "Let's find out.", 'Explore Your Opportunities', hosho_page_url( 'contact' ), 'cta-solutions.jpg' ); ?>
</main>
<?php get_footer(); ?>
