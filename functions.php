<?php

function pageBanner($args = NULL) {
	// check if there is any title in pageBanner array
	if(!$args['title']) {
		$args['title'] = get_the_title();
	}

	// check if there is any subtitle in pageBanner array
	if(!$args['subtitle']) {
		$args['subtitle'] = get_field('page_banner_subtitle');
	}

	// check where we can get a banner background image
	// is there an image source in the pageBanner array on the post or page php file?
	if(!$args['photo']) {
		// check if a banner image is loaded in the custom field
		if(get_field('page_banner_background_image')) {
			$args['photo'] = get_field('page_banner_background_image')['sizes']['pageBanner'];
		} else {
			// else load the default ocean.jpg banner image
			$args['photo'] = get_theme_file_uri('/images/ocean.jpg');
		}
	}
	
	?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo $args['photo']; ?>);"></div>
		<div class="page-banner__content container container--narrow">
			<h1 class="page-banner__title"><?php echo $args['title'] ?></h1>
			<div class="page-banner__intro">
				<p><?php echo $args['subtitle']; ?></p>
			</div>
		</div>  
	</div>
	<?php }

function ghdotcom_files() {
	wp_enqueue_script('ghdotcom_main_js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
	wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('ghdotcom_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ghdotcom_files');

function ghdotcom_features() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('generalPortrait', 480, 650, true);
	add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'ghdotcom_features');