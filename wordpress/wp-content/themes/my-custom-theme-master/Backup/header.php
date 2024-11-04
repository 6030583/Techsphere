<?php
/**
 * The header template part.
 *
 * @copyright  Copyright (c) 2020, Danny Cooper
 * @license    http://opensource.org/licenses/gpl-2.0.php GNU Public License
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="stylesheet" href="style.css">
		<?php wp_head(); ?>
	</head>
	<article class="top-header">
		<h5><a class="site-description"><?php bloginfo( 'description' ); ?></a></h1>
	</article>
  <header class="site-header">
	<section class="background">
    <p class="site-title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	  <img src="https://localhost/wordpress_P5_Julian/wordpress/wp-content/uploads/2024/09/Logo-TechSphere.png" width="350px">
      </a>
    </p>
    <p class="site-info">Welkom bij TechSphere Events! dé plek waar technologie en innovatie samenkomen. Ontdek onze aankomende evenementen, ontworpen om de ICT-branche te inspireren en te verbinden. Verken nieuwe ideeën, ontmoet gelijkgestemde professionals en blijfvoorop lopen in de digitale wereld. Schrijf je vandaag nog in voor een van onzeevenementen en beleef de toekomst van technologie!</p>
	<?php
	wp_nav_menu( array(
    	'theme_location' => 'menu-1',
	) );
	?></section>
  </header><!-- .site-header -->
