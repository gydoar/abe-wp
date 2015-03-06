<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>
 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php wp_head(); ?>
</head>
<body>

	  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <header class="container">
    <div id="logo" class="three columns offset-by-one">
      <a href="<?php echo home_url('/' ); ?>"><img width="257" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
    </div>
	
	<div>
		
	</div class="six columns offset-by-two">
	<a class="bottom-green hv" href="<?php echo home_url('/hoja-de-vida' ); ?>">EMPLEAMOS</a>
	    <ul id="menu">
			<li><a href="<?php echo home_url('/' ); ?>">INICIO</a></li>
	      <li><a href="<?php echo home_url('/nuestros-servicios' ); ?>">NUESTROS SERVICIOS</a></li>
	      <li><a href="<?php echo home_url('/contactenos' ); ?>">CONTÁCTENOS</a></li>
	    </ul>
	</div>
  </header>


