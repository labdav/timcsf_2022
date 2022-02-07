<?php
get_header();
echo "index.php";
?>
<main class="index">
    <?php
        if(have_posts()) {
            while (have_posts()) {
                the_post();?>
                    <article class="article">
                        <header class="article__entete">
                            <h2 class="article__titre">
                                <?php //affiche le lien et le titre de l'article'?>
                                <a class="article__lien" href="<?php the_permalink();?>"><?php the_title()?></a>
                            </h2>
                        </header>
                        <p class="article__texte">
                            <?php //affiche le texte de l'article
                            the_content();
                            ?>
                        </p>
                    </article>
           <?php }
        } ?>
</main>

<?php get_footer(); ?>