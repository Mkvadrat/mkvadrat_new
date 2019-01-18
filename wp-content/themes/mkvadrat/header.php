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
                <button type="button" class="menu-button-fixed hidden-sm hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
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
							'items_wrap'      => '<ul class="main-list">%3$s</ul>',
							'depth'           => 1,
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
                            <button type="button" class="menu-button hidden-sm hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
                            <div class="menu-items">
                                <div class="left-side">
                                    <?php echo get_field('address_agency_header_main_page', 21); ?>
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
												'items_wrap'      => '<ul>%3$s</ul>',
												'depth'           => 1,
											) );
										}
									?>
                                </div>
                                <div class="right-side">
                                    <div class="back-call">
                                        <?php echo get_field('phone_number_agency_header_main_page', 21); ?>
                                    </div>
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
												'items_wrap'      => '<ul>%3$s</ul>',
												'depth'           => 1,
											) );
										}
									?>
                                </div>
                            </div>
                        </nav>
						
						<?php echo get_field('primary_title_main_page', 21); ?>

                        <!--<div class="scene">
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
                        </div>-->
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
            <div class="fixed-menu fixed-menu">
				<a class="logo-2" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img
					  src="<?php header_image(); ?>"
					  height="<?php echo get_custom_header()->height; ?>"
					  width="<?php echo get_custom_header()->width; ?>"
					  alt="logotype"
					/>
				</a>
                <button><i class="fa fa-bars" aria-hidden="true"></i></button>
                <button type="button" class="menu-button-fixed hidden-sm hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
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
							'items_wrap'      => '<ul class="other-list">%3$s</ul>',
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
										'items_wrap'      => '<ul>%3$s</ul>',
										'depth'           => 1,
									) );
								}
							?>
							<button type="button" class="menu-button hidden-sm hidden-md hidden-lg"><i class="fa fa-bars" aria-hidden="true"></i></button>
                        </nav>
						
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
	<?php } ?>