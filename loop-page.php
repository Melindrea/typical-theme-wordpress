<?php
/**
 * The loop that displays a page.
 *
 * @package WordPress
 * @subpackage Typical
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( is_front_page() ) { ?>
					<h2><?php the_title(); ?></h2>
				<?php } else { ?>	
					<h1><?php the_title(); ?></h1>
				<?php } ?>			

				<?php the_content(); ?>
						
				<?php wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'typical' ), 'after' => '</nav>' ) ); ?>
		</article>
		<section id="comments" itemscope itemtype="http://schema.org/UserComments">
			<?php comments_template( '', true ); ?>
		</section>

<?php endwhile; ?>