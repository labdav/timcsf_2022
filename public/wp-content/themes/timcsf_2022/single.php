<?php get_header();
echo "single.php";?>

<main class="page">
    <?php the_post();?>
    <article class="article">
        <header class="article__entete">
            <h2 class="article__titre">
                <?php the_title();?>
            </h2>
        </header>
        <p class="article__texte">
            <?php the_content();?>
        </p>
        <footer class="article__piedDePage">
            <h4 class="article__auteur">
                Par: <?php the_author();?> Publié le : <?php the_date();?>
            </h4>
        </footer>
    </article>
</main>
<?php get_footer();?>