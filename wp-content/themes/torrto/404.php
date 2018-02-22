<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Torrto
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

				
                <section class="intro text-center">
        <h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'torrto' ); ?></h1>
</section>
				<div class="page-content">
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offet-3 col-xs-12">
                    <p style="margin-bottom: 100px"><?php esc_html_e( 'Please visit the home page or try the navigation menu to reach the desired page.', 'torrto' ); ?></p>
                    
                   
                    </div>

					


				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
