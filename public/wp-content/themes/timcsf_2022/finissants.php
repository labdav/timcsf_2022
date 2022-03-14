<?php

/*Template name: Finissants*/

get_header();
?>

<main class="finissants">
    <?php the_post(); //recherche le post reçu par le gabarit?>
    <div class="entetePage">
        <h2><?php the_title();?></h2>
    </div>
    <p>
        <?php the_content();?>
    </p>
</main>

<?php get_sidebar();?>
<?php get_footer();?>
