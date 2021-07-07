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
<footer id="site-footer-home" role="contentinfo" class="header-footer-group">

	

	<div class="footer-video">
        <i class="far fa-play-circle"></i> 
		<p><?php if ( $home_footer_watch_trailler = get_field( 'home_footer_watch_trailler' ) ) : ?>
	      <?php echo esc_html( $home_footer_watch_trailler ); ?>
           <?php endif; ?>
		    </p>
        </div><!-- .footer-video -->
      
	<div class="footer-icon">
		<div class="footer-icon-row">
		 <?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	     ?>
	      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-instagram"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-facebook-f"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-youtube"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 

		<div class="footer-icon-row">
		<?php
           $link = get_field( 'home_footer_link_ig' );
           if ( $link ) :
	       $link_url = $link['url'];
	       $link_title = $link['title'];
	       $link_target = $link['target'] ? $link['target'] : '_self';
	    ?>
	      <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?> <i class="fab fa-linkedin-in"></i> </a>
		    <?php endif; ?>
		</div><!--footer-icon-row --> 
	</div><!--footer-icon --> 
	

	

</footer><!-- #site-footer -->

<?php wp_footer('home'); ?>

</body>

</html>