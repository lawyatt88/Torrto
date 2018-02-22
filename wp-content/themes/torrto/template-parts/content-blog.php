<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Torrto
 */

?>

<section class="intro text-center">
        <h1>What's Happening?</h1>
        <h3>Check out our blog</h3>
    </section>
    <section id="blog">
        <div class="container-fluid">
            <div class="row">

<?php 

$args = array (
		'post_type' => array('post'),
		
	);
// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="col-md-4 blog-card">
            <div class="row">
                <a href="<?php echo get_permalink( $post->ID ); ?>">
                    <div class="blog-title-wrapper">
                        <div class="text-center">
                        
                            <p class="blog-tag italic"><?php

						$terms = get_the_terms( $post->ID , 'category' );
						foreach ( $terms as $term ) {
						echo $term->name;
						}
					
					?></p>
                            <h2 class="blog-title"><?php the_title(); ?></h2>
                            
                            <?php if ( in_category( 'events' ) ) : ?>
                            <p class="blog-tag date-tag italic">When: <span><?php the_field('when_date') ?></span></p>
                            <?php else : ?>
                            <p class="blog-tag date-tag italic"><?php the_time('F jS, Y') ?></p>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </a>
                
                <?php if ( has_post_thumbnail()) {
					
                    $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
                ?>
                
                <div class="blog-img" style="background-image: url(<?php echo $src[0]; ?> )"></div>
                
                <?php } else { ?>
                
                <div class="blog-img" style="background-image: url(http://torrto.com/wp-content/uploads/2016/08/teal-29.png)"></div>
                <?php } ?>
                
            </div>
        </div>
	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
		
    </div>
	</div>
    </section>
