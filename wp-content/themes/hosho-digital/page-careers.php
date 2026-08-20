<?php get_header(); ?>
<main id="main-content">
  <?php hosho_render_hero(
    'Are <span>YOU</span><br>better?',
    'hero-careers-eye.png',
    array(
      'class' => 'page-hero--careers',
      'cta_label' => 'View opportunities',
      'cta_url' => home_url( '/job-opportunities/' ),
    )
  ); ?>
  <section class="section careers-belief"><div class="shell intro-grid motion"><div><p class="eyebrow">Grow with purpose</p><h2>Better than yesterday.</h2></div><div class="body-copy"><p class="lede">Not better than everyone. Better under pressure. Better in learning.</p><p>We respect the unique qualities and experiences that each individual brings. We create an inclusive environment that supports learning, collaboration and practical innovation.</p></div></div></section>
  <section class="media-split"><div class="media-split__image" style="background-image:url('<?php echo esc_url( hosho_asset_url('careers-worktable.jpg') ); ?>')"></div><div class="media-split__content motion"><p class="eyebrow">Our culture</p><h2>A wealth of perspectives and insights.</h2><p>Our teams learn continuously, collaborate across disciplines and bring practical ideas to complex business challenges.</p></div></section>
  <section class="section section-mist" data-carousel><div class="shell"><div class="intro-grid"><div><p class="eyebrow">Life at HOSHŌ DIGITAL</p><h2>Our people, in their own words.</h2></div><div class="carousel-controls"><button type="button" data-prev aria-label="Previous testimonial">←</button><button type="button" data-next aria-label="Next testimonial">→</button></div></div><div class="testimonial-window"><div class="testimonial-track" data-track>
    <?php $voices=array(
      array('Strong partnerships are the foundation of success. At HOSHŌ DIGITAL, we create strategic alliances that fuel growth, efficiency and long-term value for our clients.','Aditya','Partner Management'),
      array('The work environment encourages collaboration and innovation, helping me thrive and expand my skill set every day.','Cindy','UI/UX Design'),
      array('I value the feedback and learning culture. Everyone is willing to support you and help you learn and grow.','Megha','Business Analyst'),
      array('Being part of HOSHŌ DIGITAL means constantly learning and evolving. We are empowered to bring creative solutions to complex problems.','Sotria','Product Management'),
      array('I have gained knowledge, improved my skills and collaborated with colleagues who are always supportive and inspiring.','Tahto','Marketing'),
      array('The culture is supportive and forward-thinking. We are encouraged to take initiative and lead meaningful projects.','Troung','Project Management')
    ); foreach($voices as $voice): ?>
      <article class="testimonial" data-slide><span aria-hidden="true">“</span><blockquote><?php echo esc_html($voice[0]); ?></blockquote><p><strong><?php echo esc_html($voice[1]); ?></strong><small><?php echo esc_html($voice[2]); ?></small></p></article>
    <?php endforeach; ?>
  </div></div></div></section>
  <?php hosho_render_quote('The people who are crazy enough to think they can change the world are the ones who do.','Steve Jobs','steve-jobs-editorial-v2.png','quote-band--standard quote-band--steve quote-band--red'); ?>
  <section class="section" id="opportunities"><div class="shell intro-grid motion"><div><p class="eyebrow">Get to know us</p><h2>Where do you want to make an impact?</h2></div><div class="editorial-grid career-links"><a class="feature" href="<?php echo esc_url( hosho_page_url( 'company' ) ); ?>"><h3>Our story</h3><p>Learn what HOSHŌ DIGITAL stands for.</p></a><a class="feature" href="<?php echo esc_url( hosho_page_url( 'solutions' ) ); ?>"><h3>Our solution</h3><p>Explore the enterprise outcomes behind our work.</p></a><a class="feature" href="<?php echo esc_url( home_url( '/approach/' ) ); ?>"><h3>Our approach</h3><p>See how we turn ambition into dependable progress.</p></a></div></div></section>
  <?php hosho_render_cta('Come soar with us','COME SOAR WITH US','', 'View opportunities',home_url('/job-opportunities/'),'careers-singapore-red-stairs.jpg'); ?>
</main><?php get_footer(); ?>
