<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
<script type="text/javascript"> 
$(document).ready( function(){ 						
	$('#portfolio').innerfade({ speed: 'slow', timeout: 4000, type: 'sequence', containerheight: '300px' }); 	
	$('#sponsors').innerfade({ speed: 'slow', timeout: 4000, type: 'sequence',  containerheight: '100px' });				
}); 
</script>
<div id="container">
	<div id="content" role="main">
		<?php
		echo get_page_slider();
		?>
		<?php /* ?>
		<ul id="portfolio"> 
			<?php 
				$rows = get_field('slider_images', 519);
				if(!empty($rows) && is_array($rows)) {
					foreach($rows as $slimg) {
						echo '<li> 
								<a href="/who-we-are"> <img src="'
									.$slimg['slider_image'].
								'" /></a> 
							</li>';
					}
				}
			?>
		 </ul>
		 <?php */ ?>
		<div style="clear:both"> </div>

	</div><!-- #content -->
            
<div id="post_holder">
     
	<div class="front_left">
		<div class="post-header">
		<h2>News & Events</h2></div>
			<?php $newsevents = get_posts(array('numberposts' => 1, 'category' => "9,10")); ?>
			<?php if(count($newsevents) > 0) { ?>
				<?php foreach($newsevents as $new) { ?>
					<div class='post-content'>
						<!--<span><strong><?php echo $new->post_title; ?></strong><br>-->
						<?php $string = $new->post_content; ?>
						<?php if(strlen($string) > 250) $string = substr(strip_tags($string, ''), 0, 220).'...'; ?>
						<p><?php echo $string; ?></p>
					</div>
					<a class="readmore" href="<?php bloginfo('url'); ?>/news-and-events">View More......</a>
				<?php } ?>
			<?php } else { ?>
				<p>No news content to show.</p.>
			<?php } ?>
	</div>

	<div class="front_right">
		<div class="post-header">
			<h2>Service Highlights</h2>
		</div>
		<div class="post-content">
			<p>For each of the product lines that we represent, our technicians are factory certified to provide service and technical support as needed.</p>
		</div>
		<a class="readmore" href="<?php bloginfo('url'); ?>/spare-parts-and-field-services">View More......</a>
	</div>

</div>
<div style="display: none">
	<img src="/wp-content/themes/inseco/images/icon/in_icon_pharma_reg.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_pharma_rollover.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_sciences_reg.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_sciences_rollover.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_sitebilt_reg.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_sitebilt_rollover.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_pump_reg.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_pump_rollover.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_parts_reg.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_parts_rollover.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_air_reg_V2.png"></img>
	<img src="/wp-content/themes/inseco/images/icon/in_icon_air_rollover_V2.png"></img>
</div>
<div style="text-align:center" id="menub">
	<ul class="spe">
		<li id="life-sciences"><a href="<?php bloginfo('url'); ?>/life-sciences" rel="section" title="Go to Life Sciences"><span>Life Sciences</span></a></li> 
		<li id="pharm"><a href="<?php bloginfo('url'); ?>/pharmindustrial" rel="section" title="Go to Pharm and Process Equip"><span>Pharmaceutical & Process Equipment</span></a></li> 
		<li id="site-bilt"><a href="<?php bloginfo('url'); ?>/site-bilt-hvac" rel="section" title="Go to Site Bilt"><span>Site Bilt”</span></a></li> 
		<li id="pumps"><a href="<?php bloginfo('url'); ?>/pumps-and-mechanical-seals" rel="section" title="Go to Pumps and Mechanical Seals"><span>pumps & mechanical seals</span></a></li> 
		<li id="spare-parts"><a href="<?php bloginfo('url'); ?>/spare-parts-and-field-services" rel="section" title="Go to Spare Parts and Field Services"><span>Spare Parts & Field services</span></a></li> 
		<li id="compressed"><a href="<?php bloginfo('url'); ?>/compressed-air-systems" rel="section" title="Compressed Air Systems"><span>Compressed Air Systems</span></a></li> 
	</ul>
	<!-- <img src="<?php bloginfo('template_directory'); ?>/images/icons_front.jpg"/>-->
</div>
<hr>
<h2 class="brands">Brands We Represent</h2>
<div class="companies-slider-wrapper">
	<br>
	<div class="companies-slider home-companies-slider">
		<?php 
			$the_query = new WP_Query(array('post_type' => 'inseco_company'));
			while ( $the_query->have_posts() ) : $the_query->the_post();
				echo '<div>
						<span class="image">
							<a href="'.get_field('company_url').'" target="_blank">
								'.get_the_post_thumbnail(get_the_ID(),'medium').'
							</a>
						</span>
						<span class="desc hidden">
							<h3>'.get_the_title().'</h3>
							<p>'.get_the_content().'</p>
						</span>
					  </div>';
			endwhile;
			wp_reset_postdata();
		?>
	</div>
	<br>
</div>

<div class="hidden" style="text-align:center" id="sponsors">
	
	<?php
		$num_pics = 5;
		$comps = get_posts(array('numberposts' => -1, 'post_type' => 'inseco_company'));
		$num_uls = count($comps) / $num_pics;

		for ($i = 0; $i<$num_uls; $i++) {
			echo '<ul class="sponsor-list list-'.$i.' ';
			echo $i != 0 ? 'hidden' : '';
			echo '">';
				foreach (array_slice($comps, $i*$num_pics, $num_pics) as $c){
					echo "<li><a href='#'>".get_the_post_thumbnail($c->ID, 'home-sponsor')."</a></li>";
				}
			echo '</ul>';
		}
	
	
	
	?>
</div>
</div><!-- #container -->

<?php get_footer(); ?>

