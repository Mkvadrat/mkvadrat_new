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

    <!-- start footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-footer"><?php echo getImage('logo_footer_main_page');?></a>
                    <nav>
                        <?php
                            if (has_nav_menu('footer_menu')){
                                wp_nav_menu( array(
                                    'theme_location'  => 'footer_menu',
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
                                    'items_wrap'      => '<ul class="menu-footer">%3$s</ul>',
                                    'depth'           => 1,
                                ) );
                            }
                        ?>
                        <div class="left-side">
                            <?php echo getMeta('address_agency_footer_main_page'); ?>
                        </div>
                        <div class="right-side">
                            <div class="back-call">
                                <?php echo getMeta('phone_number_agency_footer_main_page'); ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="bottom-line-footer">
                        <?php echo getMeta('copyright_main_page'); ?>
                        
                        <?php echo getMeta('social_links_main_page'); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- enad footer -->
    
    <?php wp_footer(); ?>

</body>
</html>