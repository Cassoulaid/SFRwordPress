<?php 
function montheme_menus() {
    register_nav_menus(
        array('header' =>  'Menu Principal')
    );
}
add_action( 'after_setup_theme', 'montheme_menus' ); 

function montheme_secondary_menus() {
    register_nav_menus(
        array('header_secondary' =>  'Menu Secondaire')
    );
}
add_action( 'after_setup_theme', 'montheme_secondary_menus' ); 





