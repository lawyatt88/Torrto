<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Torrto
 */

?>

<?php if ( !is_singular('project') ) : ?>
      </div><!-- #content -->
      <?php endif; ?>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <ul class="list-unstyled footer-links text-center">
          <li><a href="/">Home</a></li>
          <li><a href="/about/">About Us</a></li>
          <li><a href="/contact/">Contact</a></li>
        </ul>
        <!--<ul class="list-unstyled footer-links">
          <li><a href="#" data-toggle="modal" data-target="#myModal">Register</a></li>
          <li><a href="/terms-conditions/">Terms</a></li>
          <li><a href="/privacy-policy/">Privacy Policy</a></li>
        </ul>-->
        <div class="clearfix"></div>
      </div>
      <div class="col-md-4">
        <h3>SPREAD THE NEWS</h3>
        <p>Share this awesome news with your friends</p>
        
		
		<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
				ADDTOANY_SHARE_SAVE_KIT( array( 
					'buttons' => array( 'facebook', 'twitter', 'google_plus' ),
				) );
			} ?>
            
          <!-- <ul class="list-inline social-icons">
          <li><a href="https://www.facebook.com/torrtodigital/" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#" class="googleplus-bg"><i class="fa fa-google-plus"></i></a></li>
        </ul> -->
      </div>
      <div class="col-md-4">
        <h3>GET UPDATED</h3>
        <p>Subscribe to our newsletter</p>
        <?php gravity_form( 2, false, false, false, '', true ); ?>
       <!-- <form class="newsletter-form" method="POST">
          <div class="input-group input-group-lg">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
            <span class="input-group-btn">
            <button class="btn btn-primary" type="button"><i style="margin-right: 5px;"class="fa fa-spinner fa-spin"></i><span>SUBSCRIBE</span></button>
            </span> </div>
          <div class="alert"></div>-->
        </form>
      </div>
    </div>
    <p class="copyright">©2016 Torrto, LLC. All Rights Reserved</p>
    <!--<p><a href="/terms-conditions/">Terms</a><span> | </span><a href="/privacy-policy/">Privacy Policy</a></p>-->
  </div>
</footer>
	
<?php if ( is_singular('project') ) : ?>
	</div>
    </main><!-- #main -->
	</div><!-- #primary -->

</div><!-- #content -->

<?php endif; ?>

    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
