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
                <div class="col-md-6">
                    <?php echo getMeta('copyright_main_page'); ?>
                </div>
                <div class="col-md-6">
                    <?php echo getMeta('social_links_main_page'); ?>
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