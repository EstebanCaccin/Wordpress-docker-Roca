<?php
/*
 * Template Name: Template City-Miami
 */

get_header();
?>


<main id="site-content-city-miami" role="main">


    <div class="section-inner-city-miami">
     <h1 class="citymiami_h1">
         <?php if ( $city_miami_title = get_field( 'city_miami_title' ) ) : ?>
	      <?php echo esc_html( $city_miami_title ); ?>
            <?php endif; ?></h1>
    
    </div><!-- .section-inner-city-miami -->

    <div class="footer-video-city-miami">
        <i class="far fa-play-circle"></i> 
		 <p><?php if ( $home_footer_watch_trailler = get_field( 'home_footer_watch_trailler' ) ) : ?>
	      <?php echo esc_html( $home_footer_watch_trailler ); ?>
           <?php endif; ?>
		    </p>
    </div><!-- .footer-video-city-miami -->

  <div class="bg-white">
     <div class="section-main-city-miami">
      <div class="container-city-miami">
       <div class="row">
        <div class="col-6 my-5">
          <h2 class="section-main-h2">
          <?php if ( $city_miami_h2 = get_field( 'city_miami_h2' ) ) : ?>
          <?php echo esc_html( $city_miami_h2 ); ?>
          <?php endif; ?></h2>
         
          
          <h3 class="section-city-miami-h3">
          <?php if ( $city_miami_h3 = get_field( 'city_miami_h3' ) ) : ?>
          <?php echo $city_miami_h3; ?>
          <?php endif; ?></h3>
         </div>

         <div class="col-6 my-5">
          <p class="city-miami-p1">
            <?php if ( $city_miami_p = get_field( 'city_miami_p' ) ) : ?>
             	<?php echo esc_html( $city_miami_p ); ?>
                <?php endif; ?></p>
         </div>

         <div class="row">
          <div class="col-12 my-5">
            <?php if ( $city_miami_h3_1 = get_field( 'city_miami_h3_1' ) ) : ?>
	            <?php echo $city_miami_h3_1; ?>
                <?php endif; ?>
          </div>
         </div>
       
         <!-- IMAGEN 1 -->
         <div class="row">
          <div class="col-6 my-5">
            <?php
              $city_miamimg50_1 = get_field( 'city_miamimg50_1' );
              if ( $city_miamimg50_1 ) : ?>
              	<img src="<?php echo esc_url( $city_miamimg50_1['url'] ); ?>" alt="<?php echo esc_attr( $city_miamimg50_1['alt'] ); ?>" />
              <?php endif; ?>
          </div>
   
          <div class="col-6 my-5 align-self-center">
          <div class="container-city-miami-img "> 
              
              <h2 class="city-miami-mainh2">
                <?php if ( $city_miamimg_h1 = get_field( 'city_miamimg_h1' ) ) : ?>
	                <?php echo esc_html( $city_miamimg_h1 ); ?>
                    <?php endif; ?></h2>
              
                    <p class="city-miami-main-p1">
                      <?php if ( $city_miamimg_p_1_ = get_field( 'city_miamimg_p_1_' ) ) : ?>
	                      <?php echo esc_html( $city_miamimg_p_1_ ); ?>
                          <?php endif; ?></p>
                    
                    <!-- Button -->
                    <?php if ( $city_miamimg_button_1 = get_field( 'city_miamimg_button_1' ) ) : ?>
	                    <?php echo $city_miamimg_button_1; ?>
                        <?php endif; ?>
              
            </div>
          </div>
         </div>

           <!-- IMAGEN 2 -->
           <div class="row">
            <div class="col-6 my-5 align-self-center">
             <div class="container-city-miami-img">  
              <h2 class="city-miami-mainh2">
                <?php if ( $city_miamimg_h1 = get_field( 'city_miamimg_h1' ) ) : ?>
	                <?php echo esc_html( $city_miamimg_h1 ); ?>
                    <?php endif; ?></h2>
              
                    <p class="city-miami-main-p1">
                      <?php if ( $city_miamimg_p_1_ = get_field( 'city_miamimg_p_1_' ) ) : ?>
	                      <?php echo esc_html( $city_miamimg_p_1_ ); ?>
                          <?php endif; ?></p>
                    
                    <!-- Button -->
                    <?php if ( $city_miamimg_button_1 = get_field( 'city_miamimg_button_1' ) ) : ?>
	                    <?php echo $city_miamimg_button_1; ?>
                        <?php endif; ?>
                  </div>
                 </div>
            
                 <div class="col-6 my-5">
                 <?php
                  $city_miamimg50_2 = get_field( 'city_miamimg50_2' );
                  if ( $city_miamimg50_2 ) : ?>
                  	<img src="<?php echo esc_url( $city_miamimg50_2['url'] ); ?>" alt="<?php echo esc_attr( $city_miamimg50_2['alt'] ); ?>" />
                  <?php endif; ?>
            </div> 
         </div>

           <!-- IMAGEN 3 -->
           <div class="row">
             <div class="col-6 my-5">
               <?php
                 $city_miamimg50_1 = get_field( 'city_miamimg50_1' );
                 if ( $city_miamimg50_1 ) : ?>
                 	<img src="<?php echo esc_url( $city_miamimg50_1['url'] ); ?>" alt="<?php echo esc_attr( $city_miamimg50_1['alt'] ); ?>" />
                 <?php endif; ?>
              </div>
        
              <div class="col-6 my-5 align-self-center">
               <div class="container-city-miami-img">  
                 <h2 class="city-miami-mainh2 ">
                   <?php if ( $city_miamimg_h1 = get_field( 'city_miamimg_h1' ) ) : ?>
	                   <?php echo esc_html( $city_miamimg_h1 ); ?>
                       <?php endif; ?></h2>
                 
                       <p class="city-miami-main-p1 ">
                         <?php if ( $city_miamimg_p_1_ = get_field( 'city_miamimg_p_1_' ) ) : ?>
	                         <?php echo esc_html( $city_miamimg_p_1_ ); ?>
                             <?php endif; ?></p>
                       
                       <!-- Button -->
                       <?php if ( $city_miamimg_button_1 = get_field( 'city_miamimg_button_1' ) ) : ?>
	                       <?php echo $city_miamimg_button_1; ?>
                           <?php endif; ?>
                  </div>
              </div>
           </div>
       
       
      
        </div> <!-- .row -->
       </div><!-- .container-city-miami -->
     </div><!-- .section-main-city-miami -->  
 </div> <!-- #bg-white -->

</main><!-- #site-content -->

<?php $city_miami_bg = get_field('city_miami_bg'); ?>             
<body style="background-image:url('<?php echo $city_miami_bg['url']; ?>'); background-repeat: no-repeat; background-size:100% 55%;"></body>

<?php
get_footer();

