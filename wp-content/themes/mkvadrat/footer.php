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
                    <?php $img = get_field('logo_footer_main_page', 21); ?>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-footer"><img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>"></a>
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
                            <?php echo get_field('address_agency_footer_main_page', 21); ?>
                        </div>
                        <div class="right-side">
                            <div class="back-call">
                                <?php echo get_field('phone_number_agency_footer_main_page', 21); ?>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="bottom-line-footer">
                        <?php echo get_field('copyright_main_page', 21); ?>
                        
                        <?php echo get_field('social_links_main_page', 21); ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- enad footer -->
    
    <?php wp_footer(); ?>

</body>
</html>