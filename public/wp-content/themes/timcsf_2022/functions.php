<?php
    if (function_exists('register_sidebar')){
        $args = array(
            'name'=>__('Ma barre latérale', 'theme_text_domain'),
            'id'=> 'unique-sidebar-id',
            'description'=>'Barre latérale de navigation',
            'class'=>'',
            'before_widget'=>'<li id="%1$s" class="widget %2$s">',
            'after_widget'=>'</li>',
            'before_title'=>'<h2 class="widgettitle">',
            'after_title'=>'</h2>'
        );
        register_sidebar($args);
    }
    ?>

<?php

if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array (
            'principal' => 'Menu principal',
            'secondaire' => 'Menu secondaire'
        )
    );
}

?>
