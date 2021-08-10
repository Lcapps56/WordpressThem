<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
	<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0" name="viewport">
	<meta name="twitter:widgets:theme" content="light">
	<meta property="og:title" content="Your-Title-Here" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="Your-Image-Url" />
	<meta property="og:description" content="Your-Page-Description" />
	<title>Sartre | Multipurpose HTML5 Template - Barber Shop</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/theme-mountain-favicon.ico">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7CRoboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>
	
	<!-- Css -->
	<link rel="stylesheet" href="css/core.min.css" />
	<link rel="stylesheet" href="css/skin-barber-shop.css" />

	<!--[if lt IE 9]>
    	<script type="text/javascript" src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="shop home-page">

	<!-- Overlay Navigation Menu -->

	<!-- Overlay Navigation Menu End -->

	<div class="wrapper reveal-side-navigation">
		<div class="wrapper-inner">

			<!-- Header -->
			<header class="header header-bottom header-fixed-on-mobile header-transparent" data-sticky-threshold="window-height" data-bkg-threshold="100">
				<div class="header-inner">
					<div class="row nav-bar">
						<div class="column width-12 nav-bar-inner">
							<div class="logo">
								<div class="logo-inner">
									<a href="index.html"><img src="images/barber-shop/logo-dark.png" alt="Sartre Logo" /></a>
									<a href="index.html"><img src="images/barber-shop/logo.png" alt="Sartre Logo" /></a>
								</div>
							</div>
							
						
						
							<nav class="navigation nav-block primary-navigation nav-center">
								<ul>
									<li class="current">
										<a href="index-barber-shop.html">home</a>
									</li>
									<li>
										<a href="shop-grid.html">Shop</a>
									</li>

									<li>
										<a href="contact-style-one.html">contact</a>
									</li>
									
                                </ul>
                                
                                <?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'container' => false
                ));
            ?>
							</nav>
						</div>
					</div>
				</div>
			</header>




    <!-- <header class="main-header">
        <div class="main-header__logo">
            <a href="/">Guard.</a>
        </div>

        <nav class="main-header__nav">
            <div class="menu-link">
                <span></span>
                <span></span>
            </div>
            
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'top-menu',
                    'container' => false
                ));
            ?>

        </nav>

        <div class="main-header__tools">
            <a href="#" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </a>
            <a href="<?php echo wc_get_cart_url(); ?>" class="tools-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
            </a>
        </div>

    </header>


    <div class="mobile-menu">

        <?php
            wp_nav_menu( array(
                'theme_location' => 'top-menu',
                'container' => false
            ));
        ?>

    </div> -->