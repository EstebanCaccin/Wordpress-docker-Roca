<?php
/*
 * Template Name: Template Interview-miami-1
 */

get_header();
?>


<main id="site-content-miami" role="main">


    <div class="section-inner-miami">
     <h1 class="miami_h1"><?php if ( $miami_title = get_field( 'miami_title' ) ) : ?>
	    <?php echo esc_html( $miami_title ); ?>
       <?php endif; ?></h1>

    </div><!-- .section-inner-miami -->

    <div class="footer-video-miami">
        <i class="far fa-play-circle"></i> 
		     <p><?php if ( $home_footer_watch_trailler = get_field( 'home_footer_watch_trailler' ) ) : ?>
	      <?php echo esc_html( $home_footer_watch_trailler ); ?>
           <?php endif; ?>
		    </p>
    </div><!-- .footer-video-miami -->

    <div class="bg-white">
     <div class="section-main-miami">
      <div class="container-miami">
       <div class="row">
        <div class="col-7 d-flex align-items-center">
          <h2 class="section-main-h2-miami">
              <?php if ( $Miami_main_1 = get_field( 'Miami_main_1' ) ) : ?>
	           <?php echo esc_html( $Miami_main_1 ); ?>
                <?php endif; ?></h2>
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
       </div><!-- .container-miami -->
     </div><!-- .section-main-miami -->
    
     <div class="section-wrapper-miami">
      <div class="container-wrapper-miami">
       <div class="row">
        <div class="col-7 d-flex align-items-center">
       
        <p class="miami-subt">
            <?php if ( $Miami_main_2 = get_field( 'Miami_main_2' ) ) : ?>
                <?php echo esc_html( $Miami_main_2 ); ?>
                <?php endif; ?></p>

        </div>
       </div>

       <div class="col-7">
        <p class="miami-p1t">
            <?php if ( $Miami_main_3 = get_field( 'Miami_main_3' ) ) : ?>
              <?php echo esc_html( $Miami_main_3 ); ?>
                <?php endif; ?>
         </p>
        
         <?php if ( $miami_main_4b = get_field( 'miami_main_4b' ) ) : ?>
           <?php echo $miami_main_4b; ?>
             <?php endif; ?>

        </div>

        <div class="col-7">
        
        <p class="miami-p1t">
            <?php if ( $Miami_main_4 = get_field( 'Miami_main_4' ) ) : ?>
              <?php echo esc_html( $Miami_main_4 ); ?>
                <?php endif; ?>
        </p>
        
          <?php if ( $Miami_main_6 = get_field( 'Miami_main_6' ) ) : ?>
	        <?php echo $Miami_main_6; ?>
              <?php endif; ?>

        </div>
    </div>   
    <div class="row row-img_50" >
        <div class="col-7 img_50">
          
          <?php
         $img_80 = get_field( 'img_80' );
         if ( $img_80 ) : ?>
         <img src="<?php echo esc_url( $img_80['url'] ); ?>" alt="<?php echo esc_attr( $img_80['alt'] ); ?>" />
         <?php endif; ?>
     
        </div>
    </div>   

    <div class="container-wrapper-miami">
       <div class="row">
        <div class="col-7 d-flex align-items-center">
       
        <p class="miami-subta">
            <?php if ( $miami_copy_1 = get_field( 'miami_copy_1' ) ) : ?>
                <?php echo esc_html( $miami_copy_1 ); ?>
                  <?php endif; ?>
                </p>
            
            
        </div>
       </div>

       <div class="col-7">
        <p class="miami-p1t">
        <?php if ( $miami_copy_2 = get_field( 'miami_copy_2' ) ) : ?>
                <?php echo esc_html( $miami_copy_2 ); ?>
                  <?php endif; ?>
            
            </p>
            <?php if ( $miami_copy_3 = get_field( 'miami_copy_3' ) ) : ?>
                <?php echo $miami_copy_3; ?>
                  <?php endif; ?>
            

        </div>

        <div class="col-7">
        
        <p class="miami-p1t">
        <?php if ( $miami_copy_4 = get_field( 'miami_copy_4' ) ) : ?>
                <?php echo esc_html( $miami_copy_4 ); ?>
                  <?php endif; ?>
        </p>
        
        <?php if ( $miami_copy_5 = get_field( 'miami_copy_5' ) ) : ?>
            <?php echo $miami_copy_5; ?>
              <?php endif; ?>

        </div>
    </div>
    <div class="row row-img_50">
        <div class="col-7 img_50">
          
        <?php
        $img_80_2 = get_field( 'img_80_2' );
        if ( $img_80_2 ) : ?>
        <img src="<?php echo esc_url( $img_80_2['url'] ); ?>" alt="<?php echo esc_attr( $img_80_2['alt'] ); ?>" />
        <?php endif; ?>
     
        </div>
    </div>
    <div class="container-wrapper-miami">
       <div class="row">
        <div class="col-7">
        <p class="miami-p1t">
         <?php if ( $miami_copy_6 = get_field( 'miami_copy_6' ) ) : ?>
	       <?php echo esc_html( $miami_copy_6 ); ?>
             <?php endif; ?>
            
            </p>
            <?php if ( $miami_copy_7 = get_field( 'miami_copy_7' ) ) : ?>
                <?php echo $miami_copy_7; ?>
                  <?php endif; ?>
            

         </div>
        <div class="col-7 d-flex align-items-center">
       
        <p class="miami-subta">
            <?php if ( $miami_copy_8 = get_field( 'miami_copy_8' ) ) : ?>
                <?php echo esc_html( $miami_copy_8 ); ?>
                  <?php endif; ?>
                </p>
            
            
        </div>
       </div>

       <div class="col-7">
        <p class="miami-p1t">
        <?php if ( $miami_copy_9 = get_field( 'miami_copy_9' ) ) : ?>
                <?php echo esc_html( $miami_copy_9 ); ?>
                  <?php endif; ?>
            
            </p>
            <?php if ( $miami_copy_10 = get_field( 'miami_copy_10' ) ) : ?>
                <?php echo $miami_copy_10; ?>
                  <?php endif; ?>
            

        </div>

        <div class="col-7">
        
        <p class="miami-p1t">
        <?php if ( $miami_copy_11 = get_field( 'miami_copy_11' ) ) : ?>
                <?php echo esc_html( $miami_copy_11 ); ?>
                  <?php endif; ?>
        </p>
        
        <?php if ( $miami_copy_12 = get_field( 'miami_copy_12' ) ) : ?>
            <?php echo $miami_copy_12; ?>
              <?php endif; ?>

        </div>
    </div>
    <div class="container-wrapper-miami">
       <div class="row">
        <div class="col-7">
            <div class="row">
                <div class="col-6 img_50">

                <?php
                $img_80_3 = get_field( 'img_80_3' );
                if ( $img_80_3 ) : ?>
                <img src="<?php echo esc_url( $img_80_3['url'] ); ?>" alt="<?php echo esc_attr( $img_80_3['alt'] ); ?>" />
                <?php endif; ?>

                </div>
                
                <div class="col-6">
                             
                     <p class="miami-p2t">
                     <?php if ( $miami_copy_13 = get_field( 'miami_copy_13' ) ) : ?>
                             <?php echo esc_html( $miami_copy_13 ); ?>
                               <?php endif; ?>
                         
                         </p>
                         <?php if ( $miami_copy_14 = get_field( 'miami_copy_14' ) ) : ?>
                             <?php echo $miami_copy_14; ?>
                               <?php endif; ?>
                         
                        <p class="miami-p2t">
                        <?php if ( $miami_copy_15 = get_field( 'miami_copy_15' ) ) : ?>
                             <?php echo esc_html( $miami_copy_15 ); ?>
                               <?php endif; ?>
                        </p>
                     
                        <?php if ( $miami_copy_16 = get_field( 'miami_copy_16' ) ) : ?>
                          <?php echo $miami_copy_16; ?>
                            <?php endif; ?>
             
                     </div>    
                </div>
            </div>
        </div>
    </div>
    <div class="container-wrapper-miami-slider">
       <div class="row justify-content-center">
        <div class="col-8">
            <div class="row">
            <?php if ( have_rows( 'slider' ) ) : ?>
            <?php while ( have_rows( 'slider' ) ) :
                the_row(); ?>
		
		    <?php
		    $slider_img_1 = get_sub_field( 'slider_img_1' );
            if ( $slider_img_1 ) : ?>
            <img src="<?php echo esc_url( $slider_img_1['url'] ); ?>" alt="<?php echo esc_attr( $slider_img_1['alt'] ); ?>" />
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
            </div>
        </div>   
      </div>
    </div>
    <div class="container-wrapper-miami">
       <div class="row">
        <div class="col-12">
          
            <?php if ( $miami_copy_17 = get_field( 'miami_copy_17' ) ) : ?>
	         <?php echo $miami_copy_17; ?>
              <?php endif; ?>
           
        </div>
       </div>
    </div>
    
       <div class="row">
        <div class="col-12 img-bg">
          
            <?php
            $img_80_8 = get_field( 'img_80_8' );
            if ( $img_80_8 ) : ?>
            <img src="<?php echo esc_url( $img_80_8['url'] ); ?>" alt="<?php echo esc_attr( $img_80_8['alt'] ); ?>" />
            <?php endif; ?>
                       
        </div>
       </div>
    
  
    </div> <!-- #bg-white -->

</main><!-- #site-content -->

<?php $miami_bg = get_field('miami_bg'); ?>             
<body style="background-image:url('<?php echo $miami_bg['url']; ?>'); background-repeat: no-repeat; max-height:100%; max-width:100%; background-size:cover;"></body>

<?php
get_footer();
