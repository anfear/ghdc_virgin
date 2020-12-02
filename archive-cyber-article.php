<?php

	get_header();
	pageBanner(array(
      'title' => 'All Cyber Security Articles',
      'subtitle' => 'In one place...'
      // 'photo' =>
    ));
	?>

	<!--
	<div class="page-banner">
	  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>);"></div>
	  <div class="page-banner__content container container--narrow">
	    <h1 class="page-banner__title">All Cyber Security Articles</h1>
	    <div class="page-banner__intro">
	      <p>In one place...</p>
	    </div>
	  </div>  
	</div> -->

	<div class="container container--narrow page-section">
	  <?php
	    while(have_posts()) {
	      the_post(); ?>

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

	      <!--
	      <div class="post-item">

	        <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	        <div class="metabox">
	          <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('j M Y') ?> in <?php echo get_the_category_list(', '); ?></p>
	        </div>
	        
	        <div class="generic-content">
	          <?php the_excerpt(); ?>
	          <p><a class="btn btn--blue" href="<?php the_permalink(); ?>">Continue reading &raquo;</a></p>
	        </div>

	      </div> -->

	    <?php }

	      echo paginate_links();
	    ?>
	</div>

	<?php get_footer();

?>