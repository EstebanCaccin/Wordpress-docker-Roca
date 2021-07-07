<?php

/**
 * Template Name: Template About
 */

get_header();
?>

<main id="site-content" role="main">


    <div class="section-inner-about">
     <h1 class="about_h1"><?php if ( $about_title = get_field( 'about_title' ) ) : ?>
	   <?php echo esc_html( $about_title ); ?>
       <?php endif; ?></h1>

    </div><!-- .section-inner-about -->

    <div class="section-main">
     <div class="container-about">
      <div class="row">
       <div class="col-7 d-flex align-items-center">
          <h2 class="section-main-h2">dolor sit amet</h2>
       </div>
       <div class="col-5 img-watch-video">
       <?php
        $link = get_field( 'about_watch-video_link-youtube' );
         if ( $link ) :
	     $link_url = $link['url'];
	     $link_title = $link['title'];
	     $link_target = $link['target'] ? $link['target'] : '_self';
	     ?>
	  <a class="button" id="watch-video-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?>
         <?php
        $about_watch_video = get_field( 'about_watch_video' );
        if ( $about_watch_video ) : ?>
        <img src="<?php echo esc_url( $about_watch_video['url'] ); ?>" alt="<?php echo esc_attr( $about_watch_video['alt'] ); ?>" />
        <?php endif; ?>
     </a>
     <?php endif; ?>
       </div>
       </div>
       </div><!-- .container-about -->
    </div><!-- .section-main -->
    
    <div class="section-wrapper">
      <div class="container-wrapper">
       <div class="row">
        <div class="col-7 d-flex align-items-center">
        <p class="subt"><?php if ( $about_wrapper_subt = get_field( 'about_wrapper_subt' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_subt ); ?>
          <?php endif; ?></p>
        </div>
       </div>
       <div class="row" id=p1t-p1>
        <div class="col-7">
        <p class="p1t"><?php if ( $about_wrapper_p1t = get_field( 'about_wrapper_p1t' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1t ); ?>
          <?php endif; ?></p>
        <p class="p1"><?php if ( $about_wrapper_p1 = get_field( 'about_wrapper_p1' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1 ); ?>
          <?php endif; ?></p>
        </div>
       
       <div class="row" id=p1t-p1>
        <div class="col-7">
        <p class="p1t"><?php if ( $about_wrapper_p1t = get_field( 'about_wrapper_p1t' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1t ); ?>
          <?php endif; ?></p>
        <p class="p1"><?php if ( $about_wrapper_p1 = get_field( 'about_wrapper_p1' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1 ); ?>
          <?php endif; ?></p>
        </div>
       </div>  

       <div class="row" id=p1t-p1>
        <div class="col-7">
        <h2 class="section-wrapper-h2"><?php if ( $about_title_2 = get_field( 'about_title_2' ) ) : ?>
	          <?php echo esc_html( $about_title_2 ); ?>
              <?php endif; ?></h2>
        </div>
       </div>  

       <div class="row" id=p1t-p1>
        <div class="col-7">
        <p class="p1t"><?php if ( $about_wrapper_p1t = get_field( 'about_wrapper_p1t' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1t ); ?>
          <?php endif; ?></p>
        <p class="p1"><?php if ( $about_wrapper_p1 = get_field( 'about_wrapper_p1' ) ) : ?>
	      <?php echo esc_html( $about_wrapper_p1 ); ?>
          <?php endif; ?></p>
        </div>
       </div>  
       </div>
      </div>
    </div>

  



</main><!-- #site-content -->

<?php $home_bg = get_field('home_bg'); ?>             
<body style="background-image:url('<?php echo $home_bg['url']; ?>'); background-repeat: no-repeat; max-height:100%; max-width:100%; background-size:cover;"></body>

<?php
get_footer();

/*<div class="section-wrapper">
<div class="container-wrapper">
 <div class="row">
  <div class="col-7 d-flex align-items-center">
  
  </div>
 </div>
</div>
</div> */
