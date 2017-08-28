<?php
/*
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo mkvadrat_wp_title('','', true, 'right'); ?></title>
	
    <meta name="description" content="краткое описание страницы">
    <meta name="keywords" CONTENT="краткое описание страницы">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery-2.1.1.min.js"></script>
	
	<!-- Flip -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flip.min.js"></script>
	
    <!-- Bootstrap -->
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css">

    <!-- OWL-CAROUSEL -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/owl.theme.default.min.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

    <!-- HTML5 for IE -->
    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<!-- Main file -->
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/common.js"></script>
	
	<?php wp_head(); ?>
	
</head>
<body>
	
	<?php if( is_front_page() ) { ?>
	<!-- start header -->
    <header class="header">
        <div class="container-fluid">
            <div class="fixed-menu">
				<a class="logo-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
					  src="<?php header_image(); ?>"
					  height="<?php echo get_custom_header()->height; ?>"
					  width="<?php echo get_custom_header()->width; ?>"
					  alt="logotype"
					/>
				</a>
                <button><i class="fa fa-bars" aria-hidden="true"></i></button>
				<?php
					if (has_nav_menu('hidden_menu')){
						wp_nav_menu( array(
							'theme_location'  => 'hidden_menu',
							'menu'            => '',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul>%3$s</ul>',
							'depth'           => 1,
							'walker'          => '',
						) );
					}
				?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
						<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img
                              src="<?php header_image(); ?>"
                              height="<?php echo get_custom_header()->height; ?>"
                              width="<?php echo get_custom_header()->width; ?>"
                              alt="logotype"
                            />
						</a>
                        <nav class="nav-header">
							<?php
								if (has_nav_menu('left_menu')){
									wp_nav_menu( array(
										'theme_location'  => 'left_menu',
										'menu'            => '',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => '',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<div class="left-side">%3$s</div>',
										'depth'           => 1,
										'walker'          => new menu(),
									) );
								}
							?>
							<?php
								if (has_nav_menu('right_menu')){
									wp_nav_menu( array(
										'theme_location'  => 'right_menu',
										'menu'            => '',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => '',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<div class="right-side">%3$s</div>',
										'depth'           => 1,
										'walker'          => new menu(),
									) );
								}
							?>
                        </nav>
						
						<?php echo getMeta('primary_title_main_page'); ?>

                        <div class="scene">
                            <div class="cube">
                                <div class="side back">
                                    <div class="guides"></div>
                                    <span>BACK</span>
                                </div>
                                <div class="side top">
                                    <div class="guides"></div>
                                    <span>TOP</span>
                                </div>
                                <div class="side bottom">
                                    <div class="guides"></div>
                                    <span>BOTTOM</span>
                                </div>
                                <div class="side front">
                                    <div class="guides"></div>
                                    <span>FRONT</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
	<?php }else{ ?>
	<!-- start header -->
    <header class="header header-other-pages">
        <div class="container-fluid">
            <div class="fixed-menu">
				<a class="logo-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
					  src="<?php header_image(); ?>"
					  height="<?php echo get_custom_header()->height; ?>"
					  width="<?php echo get_custom_header()->width; ?>"
					  alt="logotype"
					/>
				</a>
                <button><i class="fa fa-bars" aria-hidden="true"></i></button>
				<?php
					if (has_nav_menu('hidden_menu')){
						wp_nav_menu( array(
							'theme_location'  => 'hidden_menu',
							'menu'            => '',
							'container'       => false,
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul>%3$s</ul>',
							'depth'           => 1,
							'walker'          => '',
						) );
					}
				?>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img
                              src="<?php header_image(); ?>"
                              height="<?php echo get_custom_header()->height; ?>"
                              width="<?php echo get_custom_header()->width; ?>"
                              alt="logotype"
                            />
						</a>
                        <nav class="nav-header">
							<?php
								if (has_nav_menu('main_menu')){
									wp_nav_menu( array(
										'theme_location'  => 'main_menu',
										'menu'            => '',
										'container'       => false,
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => '',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '<div class="right-side">%3$s</div>',
										'depth'           => 1,
										'walker'          => new menu(),
									) );
								}
							?>
                        </nav>
                        
						<?php echo getMeta('primary_title_internal_page'); ?>
						
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
	<?php } ?>