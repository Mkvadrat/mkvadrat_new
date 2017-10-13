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
                <!-- <div class="col-md-6">
                    <?php echo getMeta('copyright_main_page'); ?>
                </div>
                <div class="col-md-6">
                    <?php echo getMeta('social_links_main_page'); ?>
                </div> -->

                <div class="col-md-12">
                    <a href="index.html" class="logo-footer"><img src="/wp-content/uploads/2017/08/logo-footer.png" alt=""></a>
                    <nav>
                        <ul class="menu-footer">
                            <li><a href="#">Кейсы</a></li>
                            <li><a href="#">О нас</a></li>
                            <li><a href="#">Услуги</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                        <div class="left-side">
                            <address>111024, г. Москва<br>2-ая ул. Энтузиастов, д. 5, стр. 39<br>ИНН - 12345678</address>
                        </div>
                        <div class="right-side">
                            <div class="back-call">
                                <a href="tel:">+7 (495) 240 87 05</a>
                                <a href="tel:">+7 (916) ??? ?? ??</a>
                                <a href="#">Обратный звонок </a>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-md-12">
                    <div class="bottom-line-footer">
                        <p class="all-rights">&#169;2017 Mkvadrat. все права защищены</p>
                        <p class="socials">Вайбер и скайп почта
                            <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- enad footer -->
    
    <script type="text/javascript">
    //форма обратной связи
    function SendShort() {
        var data = {
            'action': 'SendShort',
            'email' : $('#email').val(),
        };
        $.ajax({
            url:'http://' + location.host + '/wp-admin/admin-ajax.php',
            data:data,
            type:'POST',
            success:function(data){
                swal(data.message);
            }
        });
    };
    </script>
    
    <?php wp_footer(); ?>

</body>
</html>