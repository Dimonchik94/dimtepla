<?php

add_action( 'woocommerce_product_options_pricing', function (){
    ?>
    <div class="options_group">
        <?php
         woocommerce_wp_text_input(
             array(
                 'id'            => 'heating_area',
                 'label'         => 'площадь отопления'
             )
          );

         woocommerce_wp_text_input(
             array(
                 'id'            => 'efficiency_indicator',
                  'label'         => 'показатели кпд'
              )
         );

        woocommerce_wp_text_input(
            array(
                'id'            => 'manufacturer',
                'label'         => 'производитель'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'type_of_management',
                'label'         => 'тип управления'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'material',
                'label'         => 'материал'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'burning_time',
                'label'         => 'длительность горения'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'power',
                'label'         => 'мощьность'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'volume_of_water',
                'label'         => 'обьём воды'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'furnace_volume',
                'label'         => 'обьём топки'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'dry_weight',
                'label'         => 'сухая масса'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'height',
                'label'         => 'высота'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'width',
                'label'         => 'ширина'
            )
        );

        woocommerce_wp_text_input(
            array(
                'id'            => 'depth',
                'label'         => 'глубина'
            )
        );
        ?>
    </div>
    <?php
} );

add_action( 'woocommerce_process_product_meta', function ($post_id){

    $product = wc_get_product( $post_id );

    $heating_area = isset($_POST['heating_area']) ? sanitize_text_field($_POST['heating_area']) : '';
    $efficiency_indicator = isset($_POST['efficiency_indicator']) ? sanitize_text_field($_POST['efficiency_indicator']) : '';
    $manufacturer = isset($_POST['manufacturer']) ? sanitize_text_field($_POST['manufacturer']) : '';
    $type_of_management = isset($_POST['type_of_management']) ? sanitize_text_field($_POST['type_of_management']) : '';
    $material = isset($_POST['material']) ? sanitize_text_field($_POST['material']) : '';
    $burning_time = isset($_POST['burning_time']) ? sanitize_text_field($_POST['burning_time']) : '';
    $power = isset($_POST['power']) ? sanitize_text_field($_POST['power']) : '';
    $volume_of_water = isset($_POST['volume_of_water']) ? sanitize_text_field($_POST['volume_of_water']) : '';
    $furnace_volume = isset($_POST['furnace_volume']) ? sanitize_text_field($_POST['furnace_volume']) : '';
    $dry_weight = isset($_POST['dry_weight']) ? sanitize_text_field($_POST['dry_weight']) : '';
    $height = isset($_POST['height']) ? sanitize_text_field($_POST['height']) : '';
    $width = isset($_POST['width']) ? sanitize_text_field($_POST['width']) : '';
    $depth = isset($_POST['depth']) ? sanitize_text_field($_POST['depth']) : '';

    $product->update_meta_data( 'heating_area', $heating_area);
    $product->update_meta_data( 'efficiency_indicator',  $efficiency_indicator);
    $product->update_meta_data( 'manufacturer', $manufacturer );
    $product->update_meta_data(  'type_of_management', $type_of_management );
    $product->update_meta_data( 'material', $material );
    $product->update_meta_data( 'burning_time', $burning_time );
    $product->update_meta_data( 'power', $power );
    $product->update_meta_data( 'volume_of_water', $volume_of_water );
    $product->update_meta_data( 'furnace_volume', $furnace_volume );
    $product->update_meta_data( 'dry_weight', $dry_weight );
    $product->update_meta_data( 'height', $height );
    $product->update_meta_data( 'width', $width );
    $product->update_meta_data( 'depth', $depth );

    $product->save();

}, 10 );