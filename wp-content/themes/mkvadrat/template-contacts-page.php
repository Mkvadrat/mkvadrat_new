<?php
/*
Template name: Contacts page
Theme Name: Mkvadrat
Theme URI: http://mkvadrat.com/
Author: M2
Author URI: http://mkvadrat.com/
Description: Тема для сайта http://mkvadrat.com/
Version: 1.0
*/

get_header(); 
?>

    <!-- start main-contacts -->
    <?php
        $header = html_entity_decode( get_post_meta( get_the_ID(), 'primary_title_contacts_page', $single = true ));
        $moscow = get_post_meta( get_the_ID(), 'moscow_maps_cotact_page', $single = true );
        $moscow_info = html_entity_decode( get_post_meta( get_the_ID(), 'moscow_info_cotact_page', $single = true ));
        $crimea = get_post_meta( get_the_ID(), 'crimea_maps_cotact_page', $single = true );
        $crimea_info = html_entity_decode( get_post_meta( get_the_ID(), 'regional_representation_info_cotact_page', $single = true ));
        $sevastopol = get_post_meta( get_the_ID(), 'sevastopol_maps_cotact_page', $single = true );
        $sevastopol_info = html_entity_decode( get_post_meta( get_the_ID(), 'sevastopol_info_cotact_page', $single = true ));
        $link = get_post_meta( get_the_ID(), 'link_first_block_contacts_page', $single = true );
    ?>

    <!-- Дата атрибуты у блока ниже для паралакса фона -->

    <div class="container-fluid block-under-header" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $header; ?>
                </div>
            </div>
        </div>
    </div>

    <main class="main-contacts">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="two-halves-block">
                        <div class="right-side">
                            <div class="block-map-top-right">
                                <div id="moscow" style="width:100%;"></div>
                                <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
                                <script type="text/javascript">
                                    var moscowMap, moscowPlacemark, moscowcoords;
                                    ymaps.ready(init);
                                    function init () {
                                        //Определяем начальные параметры карты
                                        moscowMap = new ymaps.Map('moscow', {
                                                center: [<?php if(!empty($moscow)){ ?><?php echo $moscow; ?><?php }else{ echo '56.326944, 44.0075'; } ?>], 
                                                zoom: 17
                                            });	
                                        //Определяем элемент управления поиск по карте	
                                        var SearchControl = new ymaps.control.SearchControl({noPlacemark:true});	
                                        //Добавляем элементы управления на карту
                                         moscowMap.controls              
                                            //.add('zoomControl')                
                                            .add('typeSelector') 
                                        moscowcoords = [<?php if(!empty($moscow)){ ?><?php echo $moscow; ?><?php }else{ echo '56.326944, 44.0075'; } ?>];
                                        //Определяем метку и добавляем ее на карту				
                                        moscowPlacemark = new ymaps.Placemark([<?php if(!empty($moscow)){ ?><?php echo $moscow; ?><?php }else{ echo '56.326944, 44.0075'; } ?>],{}, {preset: "twirl#redIcon", draggable: true});	
                                        moscowMap.geoObjects.add(moscowPlacemark);			
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="left-side">
                            <?php echo $moscow_info; ?>
                        </div>
                    </div>

                    <div class="two-halves-block">
                        <div class="left-side">
                            <?php echo $crimea_info; ?>
                        </div>
                        <div class="right-side">
                            <div class="block-map-top-left">
                                <div id="crimea" style="width:100%;"></div>
                                <script type="text/javascript">
                                    var crimeaMap, crimeaPlacemark, crimeacoords;
                                    ymaps.ready(init);
                                    function init () {
                                        //Определяем начальные параметры карты
                                        crimeaMap = new ymaps.Map('crimea', {
                                                center: [<?php if(!empty($crimea)){ ?><?php echo $crimea; ?><?php }else{ echo '56.326944, 44.0075'; } ?>], 
                                                zoom: 17
                                            });	
                                        //Определяем элемент управления поиск по карте	
                                        var SearchControl = new ymaps.control.SearchControl({noPlacemark:true});	
                                        //Добавляем элементы управления на карту
                                         crimeaMap.controls              
                                            //.add('zoomControl')                
                                            .add('typeSelector') 
                                        crimeacoords = [<?php if(!empty($crimea)){ ?><?php echo $crimea; ?><?php }else{ echo '56.326944, 44.0075'; } ?>];
                                        //Определяем метку и добавляем ее на карту				
                                        crimeaPlacemark = new ymaps.Placemark([<?php if(!empty($crimea)){ ?><?php echo $crimea; ?><?php }else{ echo '56.326944, 44.0075'; } ?>],{}, {preset: "twirl#redIcon", draggable: true});	
                                        crimeaMap.geoObjects.add(crimeaPlacemark);			
                                    }
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="two-halves-block">
                        <div class="right-side">
                            <div class="block-map-top-right">
                                <div id="sevastopol" style="width:100%;"></div>
                                <script type="text/javascript">
                                    var sevastopolMap, sevastopolPlacemark, sevastopolcoords;
                                    ymaps.ready(init);
                                    function init () {
                                        //Определяем начальные параметры карты
                                        sevastopolMap = new ymaps.Map('sevastopol', {
                                                center: [<?php if(!empty($sevastopol)){ ?><?php echo $sevastopol; ?><?php }else{ echo '56.326944, 44.0075'; } ?>], 
                                                zoom: 17
                                            });	
                                        //Определяем элемент управления поиск по карте	
                                        var SearchControl = new ymaps.control.SearchControl({noPlacemark:true});	
                                        //Добавляем элементы управления на карту
                                         sevastopolMap.controls              
                                            //.add('zoomControl')                
                                            .add('typeSelector') 
                                        sevastopolcoords = [<?php if(!empty($sevastopol)){ ?><?php echo $sevastopol; ?><?php }else{ echo '56.326944, 44.0075'; } ?>];
                                        //Определяем метку и добавляем ее на карту				
                                        sevastopolPlacemark = new ymaps.Placemark([<?php if(!empty($sevastopol)){ ?><?php echo $sevastopol; ?><?php }else{ echo '56.326944, 44.0075'; } ?>],{}, {preset: "twirl#redIcon", draggable: true});	
                                        sevastopolMap.geoObjects.add(sevastopolPlacemark);			
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="left-side">
                            <?php echo $sevastopol_info; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid form-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="two-halves-block block-form">
                            <?php
                                $forms_a = get_post_meta( get_the_ID(), 'contact_form_block_contact_page', $single = true );

                                if($forms_a){
                                    echo do_shortcode('[contact-form-7 id=" ' . $forms_a . ' "]'); 
                                }
                            ?>
                            
                            <div class="right-side">
                                <?php echo $link; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- end main-contacts -->

<?php get_footer(); ?>