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

<?php
function tim_responsable_custom_post() {

    $labels = array(

        'name'                => _x( 'Responsables de la TIM', 'Post Type General Name'),

        'singular_name'       => _x( 'Responsables', 'Post Type Singular Name'),

        'menu_name'           => __( 'Responsables 2021'),

        'all_items'           => __( 'Tous nos responsables'),
        'view_item'           => __( 'Voir nos responsables'),
        'add_new_item'        => __( 'Ajouter un nouveau responsable'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un responsable'),
        'update_item'         => __( 'Modifier un responsable'),
        'search_items'        => __( 'Rechercher un responsable'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Nos responsables'),
        'description'         => __( 'Tous sur nos responsables'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'responsables'),
    );


    register_post_type( 'responsables', $args );
}

add_action( 'init', 'tim_responsable_custom_post', 0 );

?>

<?php
function tim_projet_custom_post() {

    $labels = array(

        'name'                => _x( 'Projets réalisés par les étudiants', 'Post Type General Name'),

        'singular_name'       => _x( 'Projets', 'Post Type Singular Name'),

        'menu_name'           => __( 'Projets 2022'),

        'all_items'           => __( 'Tous les projets'),
        'view_item'           => __( 'Voir les projets'),
        'add_new_item'        => __( 'Ajouter un nouveau projet'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un projet'),
        'update_item'         => __( 'Modifier un projet'),
        'search_items'        => __( 'Rechercher un projet'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Nos projets'),
        'description'         => __( 'Tous sur nos projets'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'projets'),
    );


    register_post_type( 'projets', $args );
}

add_action( 'init', 'tim_projet_custom_post', 0 );

?>

<?php
function tim_finissant_custom_post() {

    $labels = array(

        'name'                => _x( 'Les finissants TIM', 'Post Type General Name'),

        'singular_name'       => _x( 'Finissants', 'Post Type Singular Name'),

        'menu_name'           => __( 'Finissants 2022'),

        'all_items'           => __( 'Tous les finissants'),
        'view_item'           => __( 'Voir les finissants'),
        'add_new_item'        => __( 'Ajouter un nouveau finissant'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un finissant'),
        'update_item'         => __( 'Modifier un finissant'),
        'search_items'        => __( 'Rechercher un finissant'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Nos finissants'),
        'description'         => __( 'Tous sur nos finissants'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'finissants'),
    );


    register_post_type( 'finissants', $args );
}

add_action( 'init', 'tim_finissant_custom_post', 0 );

?>

<?php
function tim_cours_custom_post() {

    $labels = array(

        'name'                => _x( 'Les cours en TIM', 'Post Type General Name'),

        'singular_name'       => _x( 'Cours', 'Post Type Singular Name'),

        'menu_name'           => __( 'Cours'),

        'all_items'           => __( 'Tous les cours'),
        'view_item'           => __( 'Voir les cours'),
        'add_new_item'        => __( 'Ajouter un nouveau cours'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un cours'),
        'update_item'         => __( 'Modifier un cours'),
        'search_items'        => __( 'Rechercher un cours'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Nos cours'),
        'description'         => __( 'Tous sur nos cours'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'cours'),
    );


    register_post_type( 'cours', $args );
}

add_action( 'init', 'tim_cours_custom_post', 0 );

?>

<?php
function tim_textes_custom_post() {

    $labels = array(

        'name'                => _x( 'Les textes du site', 'Post Type General Name'),

        'singular_name'       => _x( 'Textes', 'Post Type Singular Name'),

        'menu_name'           => __( 'Textes'),

        'all_items'           => __( 'Tous les textes'),
        'view_item'           => __( 'Voir les textes'),
        'add_new_item'        => __( 'Ajouter un nouveau texte'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un texte'),
        'update_item'         => __( 'Modifier un texte'),
        'search_items'        => __( 'Rechercher un texte'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Les textes'),
        'description'         => __( 'Tous sur les textes'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'textes'),
    );


    register_post_type( 'textes', $args );
}

add_action( 'init', 'tim_textes_custom_post', 0 );

?>

<?php
function tim_temoignages_custom_post() {

    $labels = array(

        'name'                => _x( 'Les témoignages des finissants', 'Post Type General Name'),

        'singular_name'       => _x( 'Témoignages', 'Post Type Singular Name'),

        'menu_name'           => __( 'Témoignages'),

        'all_items'           => __( 'Tous les témoignages'),
        'view_item'           => __( 'Voir les témoignages'),
        'add_new_item'        => __( 'Ajouter un nouveau témoignage'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un témoignage'),
        'update_item'         => __( 'Modifier un témoignage'),
        'search_items'        => __( 'Rechercher un témoignage'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Les témoignages'),
        'description'         => __( 'Tous sur les témoignages'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'textes'),
    );


    register_post_type( 'temoignages', $args );
}

add_action( 'init', 'tim_temoignages_custom_post', 0 );

?>

<?php
function tim_plusdinfo_custom_post() {

    $labels = array(

        'name'                => _x( 'Les modules plus dinfo', 'Post Type General Name'),

        'singular_name'       => _x( 'Plus dinfo', 'Post Type Singular Name'),

        'menu_name'           => __( 'plus_dinfo'),

        'all_items'           => __( 'plus_dinfo'),
        'view_item'           => __( 'plus_dinfo'),
        'add_new_item'        => __( 'Ajouter un nouveau plus dinfo'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer un plus dinfo'),
        'update_item'         => __( 'Modifier un plus dinfo'),
        'search_items'        => __( 'Rechercher un plus dinfo'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Les plus dinfos'),
        'description'         => __( 'Tous sur les plus dinfos'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'plus_dinfo'),
    );


    register_post_type( 'plus_dinfo', $args );
}

add_action( 'init', 'tim_plusdinfo_custom_post', 0 );

?>

<?php
function tim_images_custom_post() {

    $labels = array(

        'name'                => _x( 'Les modules images', 'Post Type General Name'),

        'singular_name'       => _x( 'images', 'Post Type Singular Name'),

        'menu_name'           => __( 'images'),

        'all_items'           => __( 'images'),
        'view_item'           => __( 'images'),
        'add_new_item'        => __( 'Ajouter une nouvelle image'),
        'add_new'             => __( 'Ajouter'),
        'edit_item'           => __( 'Editer une image'),
        'update_item'         => __( 'Modifier une image'),
        'search_items'        => __( 'Rechercher une image'),
        'not_found'           => __( 'Non trouvé'),
        'not_found_in_trash'  => __( 'Non trouvé dans la corbeille'),
    );


    $args = array(
        'label'               => __( 'Les images'),
        'description'         => __( 'Tous sur les images'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'thumbnail'),
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'rewrite'			  => array( 'slug' => 'images'),
    );


    register_post_type( 'images', $args );
}

add_action( 'init', 'tim_images_custom_post', 0 );

?>

<?php ////////////////////////////////////////////////////////////////////////////////////
//à copier dans le fichier functions.php
//Ce filtre retire les formats d'images que l'on ne veut pas utiliser
add_filter( 'intermediate_image_sizes_advanced', 'prefix_remove_default_images' );
function prefix_remove_default_images( $sizes ) {
//    unset( $sizes['thumbnail']); // 150px
//    unset( $sizes['medium']); // 300px
//    unset( $sizes['large']); // 1024px
    unset( $sizes['medium_large']); // 768px
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    return $sizes;
}
?>

<?php
function add_file_types_to_uploads($file_types){
    $new_filetypes = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types = array_merge($file_types, $new_filetypes );
    return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');
?>
