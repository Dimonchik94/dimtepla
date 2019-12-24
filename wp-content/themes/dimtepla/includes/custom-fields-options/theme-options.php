
<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Add second options page under 'Basic Options'
Container::make( 'theme_options', 'Настройки темы' )

    ->add_tab( 'Шапка', array(
        Field::make( 'image', 'dim_header_logo', 'Логотип' ),
    ) )
    ->add_tab( 'Подвал', array(
        Field::make( 'text', 'crb_email', 'Notification Email' ),
        Field::make( 'text', 'crb_phone', 'Phone Number' ),
    ) );
