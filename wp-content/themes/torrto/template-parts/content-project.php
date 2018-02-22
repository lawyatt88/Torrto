<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Torrto
 */

?>

  <section class="design-features">
    <div class="row">
      <div class="text-wrapper hidden-xs col-md-4 col-sm-5">
        <div class="text affix-top" data-spy="affix" id="designFeatures">
          <h2>Design and <br>
            Features</h2>
            <?php the_field('design_features') ?>
        </div>
      </div>
      <div class="hidden-sm hidden-md hidden-lg">
        <div class="text" id="designFeatures">
          <h2>Design and <br>
            Features</h2>
            <?php the_field('design_features') ?>
        </div>
      </div>
      <div class="content-images col-md-8 col-sm-7"> <img src="<?php the_field('image1') ?>"> <img src="<?php the_field('image2') ?>"> <img src="<?php the_field('image3') ?>"> </div>
    </div>
  </section>
  <?php
	get_footer(); ?>

