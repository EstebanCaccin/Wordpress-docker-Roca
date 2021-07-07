<?php

/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>> 

<head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="profile" href="https://gmpg.org/xfn/11">

	<script src="https://kit.fontawesome.com/8ed70baffc.js" crossorigin="anonymous"></script>

     <!-- bootstrap -->
 	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
	<!-- Google fonts: Saira extra condensed -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Extra+Condensed:wght@100;300;500;600;700&display=swap" rel="stylesheet">  
	<?php wp_head(); ?>

    <!-- Google fonts: PT Serif -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">


	<?php
	///////////// ESTO HAY QUE GUARDARLO EN UNA COOKIE Y PISARLO SI EL USUARIO CAMBIA DE PAÍS
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	// var_dump($ip);

	/*$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, "http://ip-api.com/json/$ip");
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($curl);
	$json = json_decode($output);
	curl_close($curl);

	$detected_language = "English";
	$detected_country = $json->country;
	$detected_link = "";

	// var_dump($detected_country);

	//$siteDomain = "amiad.php71.projectsunderdev.com";
	// $siteDomain = "php74.projectsunderdev.com/seba/";
	// $id_menu = 24568;

	switch ($json->country) {
		case 'Canada':
		case 'United States':
			$detected_country = "North America";
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'Brazil':
		case 'Mexico':
		case 'Colombia':
		case 'Argentina':
		case 'Peru':
		case 'Venezuela':
		case 'Chile':
		case 'Guatemala':
		case 'Ecuador':
		case 'Bolivia':
		case 'Haiti':
		case 'Cuba':
		case 'Dominican Republic':
		case 'Honduras':
		case 'Paraguay':
		case 'Nicaragua':
		case 'El Salvador':
		case 'Costa Rica':
		case 'Panama':
		case 'Uruguay':
		case 'Spain':
			$detected_country = "España y LATAM";
			$detected_language = "Español";
			$detected_link = "es";
			break;
		case 'China':
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'Russia':
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'Germany':
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'France':
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'Israel':
			$detected_language = "English";
			$detected_link = "en";
			break;
		case 'Irlanda':
			$detected_language = "English";
			$detected_link = "en";
			break;
		default:
			$detected_language = "English";
			$detected_link = "en";
	}*/

	// var_dump($detected_language);
	// var_dump($detected_link);


	global $default_detected_language;
	global $default_detected_link;

	echo $default_detected_language = $detected_language;
	echo $default_detected_link = $detected_link;

	?>

</head>

<body <?php body_class(); ?>>

	<?php
	wp_body_open();
	?>

	<header id="site-header" class="header-footer-group" role="banner">

		<div class="header-inner section-inner">

			<div class="header-titles-wrapper">

				<?php

				// Check whether the header search is activated in the customizer.
				$enable_header_search = get_theme_mod('enable_header_search', true);

				if (true === $enable_header_search) {

				?>

					<button class="toggle search-toggle mobile-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<?php twentytwenty_the_theme_svg('search'); ?>
							</span>
							<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
						</span>
					</button><!-- .search-toggle -->

				<?php } ?>

				<div class="header-titles">

					<?php
					// Site title or logo.
					twentytwenty_site_logo();

					// Site description.
					twentytwenty_site_description();
					?>

				</div><!-- .header-titles -->

				<button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
					<span class="toggle-inner">
						<span class="toggle-icon">
							<?php twentytwenty_the_theme_svg('ellipsis'); ?>
						</span>
						<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
					</span>
				</button><!-- .nav-toggle -->

			</div><!-- .header-titles-wrapper -->

			<div class="header-navigation-wrapper">

				<?php
				if (has_nav_menu('primary') || !has_nav_menu('expanded')) {
				?>

					<nav class="primary-menu-wrapper" aria-label="<?php echo esc_attr_x('Horizontal', 'menu', 'twentytwenty'); ?>" role="navigation">

						<ul class="primary-menu reset-list-style">

							<?php
							if (has_nav_menu('primary')) {

								wp_nav_menu(
									array(
										'container'  => '',
										'items_wrap' => '%3$s',
										'theme_location' => 'primary',
									)
								);
							} elseif (!has_nav_menu('expanded')) {

								wp_list_pages(
									array(
										'match_menu_classes' => true,
										'show_sub_menu_icons' => true,
										'title_li' => false,
										'walker'   => new TwentyTwenty_Walker_Page(),
									)
								);
							}
							?>

						</ul>

					</nav><!-- .primary-menu-wrapper -->

				<?php
				}

				if (true === $enable_header_search || has_nav_menu('expanded')) {
				?>

					<div class="header-toggles hide-no-js">

						<?php
						if (has_nav_menu('expanded')) {
						?>

							<div class="toggle-wrapper nav-toggle-wrapper has-expanded-menu">

								<button class="toggle nav-toggle desktop-nav-toggle" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
									<span class="toggle-inner">
										<span class="toggle-text"><?php _e('Menu', 'twentytwenty'); ?></span>
										<span class="toggle-icon">
											<?php twentytwenty_the_theme_svg('ellipsis'); ?>
										</span>
									</span>
								</button><!-- .nav-toggle -->

							</div><!-- .nav-toggle-wrapper -->

						<?php
						}

						if (true === $enable_header_search) {
						?>

							<div class="toggle-wrapper search-toggle-wrapper">

								<button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
									<span class="toggle-inner">
										<?php twentytwenty_the_theme_svg('search'); ?>
										<span class="toggle-text"><?php _ex('Search', 'toggle text', 'twentytwenty'); ?></span>
									</span>
								</button><!-- .search-toggle -->

							</div>

						<?php
						}
						?>

					</div><!-- .header-toggles -->
				<?php
				}
				?>

			</div><!-- .header-navigation-wrapper -->

		</div><!-- .header-inner -->

		<?php
		// Output the search modal (if it is activated in the customizer).
		if (true === $enable_header_search) {
			get_template_part('template-parts/modal-search');
		}
		?>

	</header><!-- #site-header -->

	<?php
	// Output the menu modal.
	get_template_part('template-parts/modal-menu');
