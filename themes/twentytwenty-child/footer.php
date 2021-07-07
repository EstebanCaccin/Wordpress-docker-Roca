<?php

/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer id="site-footer-all" role="contentinfo" class="">

<div class="container-footer">
  <div class="row" id="row-line">
    <div class="col-6" id="imglogo">
	   <?php
       $logo = get_field( 'logo' );
        if ( $logo ) : ?>
	     <img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />
        <?php endif; ?>
    </div>
    <div class="col-6 col-6 text-end align-self-center">
	 <div class="footer-icon-all">
		<div class="footer-icon-all-row">
		 <?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	     ?>
	      <a class="button-footer" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-instagram"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-all-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button-footer" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-facebook-f"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-all-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button-footer" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-youtube"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-all-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button-footer" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-linkedin-in"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 
	</div><!--footer-icon --> 
    </div>
  </div>
</div>

<div class="container-footer">
	<div class="row">
		<div class="col-6">
			<p class="footer-p1"><?php if ( $all_footer_p1 = get_field( 'all_footer_p1' ) ) : ?>
	         <?php echo esc_html( $all_footer_p1 ); ?>
              <?php endif; ?></p>
	    </div>
		<div class="col-6">
			<p class="footer-p2"><?php if ( $all_footer_p2 = get_field( 'all_footer_p2' ) ) : ?>
	         <?php echo esc_html( $all_footer_p2 ); ?>
             <?php endif; ?></p>
		</div>
	</div>
</div>
	

	

</footer><!-- #site-footer -->

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>