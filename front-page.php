<?php
	get_header(); ?>
	

  <div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/Porto01-1920x796.jpg'); ?>);"></div>
    <div class="page-banner__content container t-center c-white">
      <h1 class="headline headline--large">Welcome!</h1>
      <!-- <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2> -->
      <h2 class="headline headline--medium">to my personal site and web dev space.</h2>
      <!-- <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3> -->
      <h3 class="headline headline--small">I curate and comment on some cyber and information security articles from various sources,<br>and blog about cyber security, technology and business topics. Scroll down for links.</h3>
      <h3 class="headline headline--small">So sit back, have a look around and I hope you find some content of interest</h3>
      <a href="<?php echo esc_url(site_url('/business')); ?>" class="btn btn--large btn--blue">Business</a>
    </div>
  </div>

  <div class="full-width-split group">
    <div class="full-width-split__one">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Last Two Cyber Security Articles</h2>

        <?php
          $cyberArticlePosts = new WP_Query(array(
            'posts_per_page' => 2,
            'post_type' => 'cyber-article'
          ));

          while($cyberArticlePosts->have_posts()) {
            $cyberArticlePosts->the_post(); ?>

            <div class="event-summary">
              <a class="event-summary__date t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M') ?></span>
                <span class="event-summary__day"><?php the_time('d') ?></span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php if(has_excerpt()) {
                  echo get_the_excerpt();
                } else {
                  echo wp_trim_words(get_the_content(), 18);
                } ?> <a href="<?php the_permalink(); ?>" class="nu gray"> Read more</a></p>
              </div>
            </div>

        <?php } wp_reset_postdata();
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo get_post_type_archive_link('cyber-article'); ?>" class="btn btn--blue">View All Cyber Security Articles</a></p>

      </div>
    </div>
    <div class="full-width-split__two">
      <div class="full-width-split__inner">
        <h2 class="headline headline--small-plus t-center">Last Two Blog Posts</h2>

        <?php

        $homePagePosts = new WP_Query(array(
          'posts_per_page' => 2
        ));

        while($homePagePosts->have_posts()) {
          $homePagePosts->the_post(); ?>

          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>  
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php if(has_excerpt()) {
                echo get_the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 18);
              } ?> <a href="<?php the_permalink(); ?>" class="nu gray"> Read more</a></p>
            </div>
          </div>

        <?php } wp_reset_postdata();
        ?>
        
        <p class="t-center no-margin"><a href="<?php echo esc_url(site_url('/blog')); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
      </div>
    </div>
  </div>

	<?php get_footer();

?>