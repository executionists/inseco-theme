<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="header-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<div id="nav">
						<?php get_template_part('nav'); ?>
					</div>
					<div class="entry-content">
						<div class="main-content">
							<?php if(is_page('news-and-events') ) { ?>
								<?php include('news-and-events.php'); ?>
							<?php } else { ?>
								<?php the_content(); ?>
							<?php } ?>

						</div>
						<!--Main Content Ends-->
						

		
						  
						<?php 
						$rows = get_field('partners');
						if($rows)
						{
							echo '<div id="companies"><ul>';
							$last = count($rows);
							if(is_array($rows) && !empty($rows)) {
								foreach($rows as $row)	{
									$last--;
									//$img_thumb = wp_get_attachment_image_src($row['company_image'], 'medium');
									$class = $last == 0 ? "last" : "";
									$comp = $row['company'];
									$the_query = new WP_Query(array('p' => $comp->ID, 'post_type' => 'inseco_company'));
									while ( $the_query->have_posts() ) : $the_query->the_post();
										echo '<li class="'. $class .'">
												<span class="image">
													<a href="'.get_field('company_url').'" target="_blank">
														'.get_the_post_thumbnail($comp->ID, 'medium').'
													</a>
												</span>
												<span class="desc">
													<h3>'.$comp->post_title.'</h3>
													<p>'.$comp->post_content.'</p>
												</span>
											  </li>';
									endwhile;
									wp_reset_postdata();
									
								}
								
							}

							echo '</ul></div>';
						}
						?>

						
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
