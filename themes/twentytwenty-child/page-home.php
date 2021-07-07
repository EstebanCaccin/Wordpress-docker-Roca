<?php

/**
 * Template Name: Template Home
 */

get_header();
?>

<main id="site-content" role="main">

    <div class="section-inner-home">

        

    </div><!-- .section-inner-home -->

    <div class="container">
        
       <div class="container_row">
        <p class="home_miami"><?php if ( $home_miami = get_field( 'home_miami' ) ) : ?>
	     <?php echo esc_html( $home_miami ); ?>
          <?php endif; ?></p>
        <h2 class="home_h2_mia"><?php if ( $home_mia = get_field( 'home_mia' ) ) : ?>
	     <?php echo esc_html( $home_mia ); ?>
          <?php endif; ?></h2>
        </div>

       <div class="container_row">
        <p class="home_p"><?php if ( $home_coming_soon = get_field( 'home_coming_soon' ) ) : ?>
	     <?php echo esc_html( $home_coming_soon ); ?>
          <?php endif; ?></p>
        <h2 class="home_h2"><?php if ( $home_hou = get_field( 'home_hou' ) ) : ?>
	     <?php echo esc_html( $home_hou ); ?>
          <?php endif; ?></h2>
        </div>
          
       <div class="container_row">
        <p class="home_p"><?php if ( $home_coming_soon = get_field( 'home_coming_soon' ) ) : ?>
	     <?php echo esc_html( $home_coming_soon ); ?>
          <?php endif; ?></p>
        <h2 class="home_h2"><?php if ( $home_lax = get_field( 'home_lax' ) ) : ?>
	     <?php echo esc_html( $home_lax ); ?>
          <?php endif; ?></h2>
        </div>

       <div class="container_row">
        <p class="home_p"><?php if ( $home_coming_soon = get_field( 'home_coming_soon' ) ) : ?>
	     <?php echo esc_html( $home_coming_soon ); ?>
          <?php endif; ?></p>
        <h2 class="home_h2"><?php if ( $home_chi = get_field( 'home_chi' ) ) : ?>
	     <?php echo esc_html( $home_chi ); ?>
          <?php endif; ?></h2>
        </div>

       <div class="container_row">
        <p class="home_p"><?php if ( $home_coming_soon = get_field( 'home_coming_soon' ) ) : ?>
	     <?php echo esc_html( $home_coming_soon ); ?>
          <?php endif; ?></p>
        <h2 class="home_h2"><?php if ( $home_nyc = get_field( 'home_nyc' ) ) : ?>
	     <?php echo esc_html( $home_nyc ); ?>
          <?php endif; ?></h2>
        </div>

    </div>

</main><!-- #site-content -->

<?php $home_bg = get_field('home_bg'); ?>             
<body style="background-image:url('<?php echo $home_bg['url']; ?>'); background-repeat: no-repeat; max-height:100%; max-width:100%; background-size:cover;"></body>

<?php
get_footer('home');