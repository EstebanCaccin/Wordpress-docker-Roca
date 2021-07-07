<?php

/**
 * Template Name: Template Contact-us
 */

get_header();
?>

<main id="site-content-contact" role="main">


<div class="section-inner-contact">
     <h1 class="contact_h1"><?php if ( $contact_title = get_field( 'contact_title' ) ) : ?>
	   <?php echo esc_html( $contact_title ); ?>
       <?php endif; ?></h1>

    </div><!-- .section-inner-contact -->
 
    <div class="section-main-contact">
     <div class="container-contact">
      <div class="row" id="contact-form-main">
      <?php if ( $contact_edit_ = get_field( 'contact_edit_' ) ) : ?>
	<?php echo $contact_edit_; ?>
<?php endif; ?>
       </div>
       </div><!-- .container-contact -->
    </div><!-- .section-main -->
    
   

  



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
