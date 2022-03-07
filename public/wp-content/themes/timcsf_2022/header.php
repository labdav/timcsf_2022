<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
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
    <div class="entete__logoTable">
        <p class="entete__TIM">TIM</p>
        <p class="entete__slogan">Web et apps</p>
    </div>
    <img class="entete__imageHero" alt="Image héro du site" src="<?php echo get_template_directory_uri();?>/liaisons/images/image_banniere.png">

</header>