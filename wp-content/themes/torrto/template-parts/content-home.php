<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Torrto
 */

?>

<div class="home-hero" style="background: url('<?php the_field('home_background'); ?>');background-size:cover;background-position:center center;background-repeat:no-repeat;background-attachment:scroll;">
  <h1>Digital Agency</h1>
  <h3>Web & App Development | Digital Marketing</h3>
  <img src="http://torrto.com/wp-content/uploads/2016/08/torrto-devices.png" class="devices" /> <a href="#about" class="page-scroll"><img src="http://torrto.com/wp-content/uploads/2016/08/torrto-mouse.png" />click to get started</a> </div>
<section id="about">
  <div class="container text-center">
    <h2 class="heading">compelling design is our cornerstone</h2>
    <p class="col-md-8 col-md-offset-2">We specialize in creative design and development of mobile apps and websites. Whether you are a startup or an enterprise, our focus is helping you to achieve your business goals through custom, interactive design and digital marketing. <br>
      We also know a thing or two about branding!</p>
    <div class="col-md-12"> <a class="btn btn-default learn-btn white page-scroll" role="button" href="#work">see our work</a> </div>
  </div>
</section>
<section id="work" class="work-home">
  <div class="container-fluid">
    <div class="row">
    <?php 
	
	// WP_Query arguments
$args = array (
	'post_type'              => array( 'project' ),
);

// the query
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-md-4 blog-card">
        <div class="row"> <a href="<?php the_permalink(); ?>">
          <div class="blog-title-wrapper">
            <div class="text-center">
              <h4 class="blog-title"><?php the_title(); ?></h4>
            </div>
          </div>
          </a>
          <div class="work-img blog-img" style="background-image: url('<?php the_field('background_image'); ?>')"></div>
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
<section id="services" class=" text-center">
<div class="container">
<h2 class="heading">we're a full service digital agency</h2>
    <p class="col-md-8 col-md-offset-2">From design & development to data analytics & marketing, we do it all. Our professionally tailored designs are derived from digital market research customized to meet all of our clients’ digital wants and needs.  Whether you are a startup or an enterprise, our focus is helping you to achieve your business goals through custom, interactive design and digital marketing. </p>
<div class="col-md-8 col-md-offset-2">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs hidden-xs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Web Applications</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mobile Applications</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Digital Marketing</a></li>
  </ul>
  
  <ul class="nav nav-tabs hidden-sm hidden-md hidden-lg" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Web Apps</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Mobile Apps</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Digital Marketing</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        <h3>responsive web development to grow your business</h3>
        
        <h4>custom design: your elevator pitch</h4>
        <p class="tab-text">We all know that first impressions are lasting impressions, and when it comes to the web, this has never been truer. Just like an elevator pitch, we craft your site with precision and care to ensure that your message, product, or service is delivered in a compelling, persuasive, and succinct manner.</p>
        
        <h4>open source CMS: The K.I.S.S. Principle</h4>
        <p class="tab-text">We believe our clients are unique when it comes to their message and branding, but unified in their desire to Keep It Simple and Smart. We use open-source Content Management Systems like WordPress to ensure that your site is easy to manage and update.</p>
        
        <h4>rapid development: perfectionists with a deadline</h4>
        <p class="tab-text">We are a small, tight-knit team of perfectionists and we don’t beat around the bush when it comes to your business. Using the latest technology and our proven development strategies, we reduce the development timeframe, going from design to launch quickly and efficiently.</p>
        
        <h4>Technology</h4>
        <ul>
            <li><img src="../../../../images/Java.png"/><p>Java</p></li>
            <li><img src="../../../../images/Php.png"/><p>PHP</p></li>
            <li><img src="../../../../images/Python.png"/><p>Python</p></li>
            <li><img src="../../../../images/Html5.png"/><p>HTML5</p></li>
            <li><img src="../../../../images/CSS3.png"/><p>CSS3</p></li>
        </ul>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
    	<h3>scalable mobile design with your user in mind</h3>
        
        <h4>User Experience: a personal touch</h4>
        <p class="tab-text">We interact so intimately with our mobile devices that apps have become more like personal assistants than simple programs. Whether it’s color palette selection, typography, or educating users on your app, we keep your users at the forefront of our design decisions.</p>
        
        <h4>Interface Design: making the connection</h4>
        <p class="tab-text">Interface design determines how your users will physically interact with your app, it’s the bridge that creates an emotional connection between your users and your product. Through market research, we craft a beautiful interface that is touch and hardware optimized that your users will want to swipe, touch, and tap!
</p>

        <h4>iOS Development Technology</h4>
        <ul>
            <li><img src="../../../../images/ObjectiveC.png"/><p>Objective C</p></li>
            <li><img src="../../../../images/Swift.png"/><p>Swift</p></li>
        </ul>
        <h4>Android Development Technology</h4>
        <ul>
            <li><img src="../../../../images/Java.png"/><p>Java</p></li>
            <li><img src="../../../../images/Android.png"/><p>Android SDK</p></li>
        </ul>
    
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
    	<h3>using data to fuel your growth</h3>
        
        <h4>Data Analytics: the foundation to your growth</h4>
        <p class="tab-text">Data is where it all starts. Through collecting data with platforms like Google Analytics, we are able to learn everything about what is working, or not working, when it comes to your brand. We then create a winning approach derived from digital market research customized and tailored to fit your needs and increase your traffic and revenue.</p>
        
        <h4>SEO and Conversion Rate Optimization: turning traffic into customers</h4>
        <p class="tab-text">When it comes to driving throngs of people to your site or app, we have you covered through Search Engine Optimization. Utilizing the latest technology and data, allows us to track and increase how many of those people become faithful customers; that’s Conversion Rate Optimization at it’s best.
</p>

<h4>Return On Investment: keeping your budget in mind</h4>
        <p class="tab-text">We understand that as a start-up, small business, or corporation, you are always looking to get the most bang for your buck. We are committed to turning your hard earned marketing budget into more revenue per dollar spent through careful assessment and targeted marketing strategies. Your Return On Investment is our factor for success.
</p>
<p></p>
    </div>
  </div>

</div>
</div>
</section>
