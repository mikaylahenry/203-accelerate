<?php
/**
 * The template for displaying the case study archive.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post();
        $image_1 = get_field("image_1");
        $size = "full";
        $services = get_field('services');
        $client = get_field('client');?>


      	<article class="case-study">
          <aside class="case-study-sidebar">
            <h2><a href="<?php the_permalink(); ?>"<?php the_title(); ?></a></h2>
      			<h5><?php echo $services; ?></h5>
      			<?php the_excerpt(); ?>
      			<p><strong><a class="read-more-link" href="<?php the_permalink(); ?>">View Project > </a></strong></p>
          </aside>

          <div class="case-study-images">
            <a href="<?php the_permalink(); ?>">
              <?php if($image_1) { echo wp_get_attachment_image( $image_1, $size );
            } ?>
            </a>
          </div>
        </article>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
