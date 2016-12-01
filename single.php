<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header();

 if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div id="header-image">
						<img width="893" height="131" title="Header_News&amp;Events3" alt="Header_News&amp;Events3" class="attachment-post-thumbnail wp-post-image" src="<?php bloginfo('url'); ?>/wp-content/uploads/2011/08/Header_NewsEvents3.jpg">
					</div>
					<div id="nav">
						<?php get_template_part('nav'); ?>
					</div>
					<div class="entry-content">
						<div class="main-content">
							<?php the_post_thumbnail(); ?>
							<?php the_content(); ?>
						</div>
						<div id="archive-sidebar">
	                        <h3><strong>Archives</strong></h3>
	                        <ul>
	                        	<?php wp_get_archives('type=monthly&limit=12'); ?>
	                        </ul>
	                    </div>
	                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</div><!-- #post-## -->


<?php endwhile; // end of the loop. 

get_footer(); ?>
