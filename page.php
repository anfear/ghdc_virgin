<?php
	get_header();

	while(have_posts()) {
		the_post();
    pageBanner(array(
      // 'title' => 
      // 'subtitle' =>
      // 'photo' =>
    ));
    ?>

  <div class="container container--narrow page-section">

    <?php
      $theParent = wp_get_post_parent_id(get_the_ID()); // current page's parent ID
      if($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
          <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
        </div>
      <?php }
    

    // this returns an array of child pages & identifies page is a parent
      $testArray = get_pages(array(
        'child_of' => get_the_ID()
      ));
      $numberChildren = (count($testArray));

      if($theParent or $testArray) {

      ?>
    
    <!-- This is the sidebar child page links on pages -->
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php

          if($theParent) { // if we are already on a child, reference the parent
              $findChildrenOf = $theParent;
          } else {
              $findChildrenOf = get_the_ID(); // if we are already on a parent
          }

          wp_list_pages(array(
              'title_li' => NULL,
              'child_of' => $findChildrenOf,
              'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php } ?>

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
		

	<?php }
	get_footer();
?>