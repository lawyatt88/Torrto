<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Torrto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         
        <div id="big-imac-wrapper" style="overflow: auto;">       
        <section class="intro text-center" id="project-intro">
            <h1><?php the_title(); ?></h1>
        </section>
        
  


		<?php
		while ( have_posts() ) : the_post(); ?>
		
			<div class="imac"> 
            <!--<div id="big-imac-wrapper" style="overflow: auto;">-->
            <div class="bg-imac"><img src="<?php the_post_thumbnail_url(); ?>" alt="" class="big-imac" id="big-imac"/></div>
              <div class="project-overview" id="project-overview">
                <div class="container">
                  <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>Project Overview</h2>
                    <p>
                      <?php the_content(); ?>
                    </p>
                  </div>
                </div>
              </div>
              </div>
              
		

			<?php get_template_part( 'template-parts/content', 'project' );
			
			
		endwhile; // End of the loop.
		?>
        </div>

        



