<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title>
        <?php bloginfo('name');
        if (is_home() || is_front_page()) { ?>
            - <?php bloginfo('description');
        } else { ?>
        - <?php wp_title("", true);
        }?>
    </title>
    <meta charset="<?php bloginfo('charset');?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/liaisons/css/styles.css"/>
    <?php wp_head(); ?>
</head>
<body class="body">
<header class="entete">
    <div class="entete__nav">
        <div class="entete__mobile">
            <img class="entete__logo" alt="Logo du l'entête" src="">
        </div>
    </div>
    <?php if(has_nav_menu('principal')){?>
        <nav class="navigation">
            <?php wp_nav_menu(array('theme_location' => 'principal'));?>
        </nav>
    <?php } ?>
    <img class="entete__imageHero" alt="Image héro du site" src="<?php echo get_template_directory_uri();?>/liaisons/images/image_banniere.png">

</header>