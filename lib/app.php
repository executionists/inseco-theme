<?php

// Shinee - Executionists
function inseco_app_scripts() {
    // wp_enqueue_style( 'style-name', get_stylesheet_uri() );
    // wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
    
    // Slider
    
    wp_enqueue_style( 'slider-theme', get_template_directory_uri() . '/lib/slick/slick-theme.css' );
    wp_enqueue_style( 'slider-css', get_template_directory_uri() . '/lib/slick/slick.css' );
    
    // app css
    wp_enqueue_style( 'slider-app-css', get_template_directory_uri() . '/css/theme.css' );
    
    
    wp_enqueue_script( 'inseco-jquery', '//code.jquery.com/jquery-1.11.0.min.js', array(), false, true );
    
    wp_enqueue_script( 'inseco-innerfade', get_template_directory_uri() . '/js/jquery.innerfade.js', array(), false, true );
    wp_enqueue_script( 'inseco-custom', get_template_directory_uri() . '/js/custom.js', array(), false, true );
    
    wp_enqueue_script( 'slider-js', get_template_directory_uri() . '/lib/slick/slick.js', array(), false, true );
    
    wp_enqueue_script( 'inseco-app', get_template_directory_uri() . '/js/app.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'inseco_app_scripts' );

function contact_us_map(){
    dynamic_sidebar( 'contact-us-map' );
}
add_shortcode('map','contact_us_map');

// Home page slider
function get_page_slider(){
    ob_start();
    
    $rows = get_field('home_slider_images',9); //519
    
    ?>
    
    <ul class="home-slider"> 
		<?php 
			if(!empty($rows) && is_array($rows)) {
				foreach($rows as $item) {
					echo '<li style="background-image: url('.$item['background'].');"> ';
					
					if(!empty($item['content'])) {
					    echo '
    							<div class="home-slider-content home-slider-'.$item['content_alignment'].'">';
						
						if($item['content_alignment']=='left' && empty($item['small_logo']))
						    echo '<div class="home-slider-small-no-logo"></div>';
					    else
						    echo '<img class="home-slider-small-logo" src="'.$item['small_logo'].'">';
						
						echo '<p>
    							    '.$item['content'].'
							        <a class="home-slider-link" href="'.$item['link'].'">Learn More</a></p> 
    							</div>';
    							
					}
					echo '
						</li>';
				}
			}
		?>
	 </ul>
		 
    <?php
    
    return ob_get_clean();
}