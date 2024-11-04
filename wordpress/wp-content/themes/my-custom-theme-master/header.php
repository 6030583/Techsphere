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

  <header class="site-header">
	<section class="background">
		
		<div id="top-menu">
			<a href="https://techsphere.local/wordpress_p5_julian/wordpress/"><img  id ="logo" src="https://techsphere.local/wordpress_p5_julian/wordpress/wp-content/uploads/2024/09/Logo-TechSphere-ALT-Blauw-6.png" alt="Logo Techsphere"></a>
			<h1 id="h1-header">Techsphere</h1>
			<button id="a-menu">&#8801;</button>
	</div>

		
			<div id="overlay">
				<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
			) );
			?>
				<div id="close">&#10006;</div>
			</div>
	</section>
	
  </header>
  
