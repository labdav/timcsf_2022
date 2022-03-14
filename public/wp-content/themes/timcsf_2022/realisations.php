<?php

/*Template name: Réalisations*/

get_header(); //À retirer éventuellement

if(get_query_var('paged')) {
    $paged = get_query_var('paged');
} else{
    $paged = 1;
}

?>

    <main class="realisations">
        <h1 class="realisations__titre">Réalisations</h1>
            <div class="realisations__fiches">

<?php
$tCours = array();
$args = array(
    'post_type' => 'cours',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'orderby' => 'asc',
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        array_push($tCours, $post);
    }
}

$args = array(
    'post_type' => 'projets',
    'posts_per_page' => 6,
    'post_status' => 'publish',
    'orderby' => 'rand',
    'paged' => $paged
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
        <div class="realisations__fiche" onclick="location.href='./fiche-realisation?id=<?php echo get_field("id") ?>';" style="cursor: pointer;">
            <div class="realisations__ficheContenuGauche">
                <?php
                    $coursId = intval(get_field("cours_id"));
                    if($coursId <= 9) {
                        echo "<p class='realisations__ficheContenuVignetteContainer'>1ère année</p>";
                    }
                    else if($coursId >= 9 && $coursId <= 17) {
                        echo "<p class='realisations__ficheContenuVignetteContainer'>2e année</p>";
                    }
                    else {
                        echo "<p class='realisations__ficheContenuVignetteContainer'>3e année</p>";
                    }

                ?>
                <?php $photo=get_field("photo1"); ?>
                <img src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="Image du projet" class="realisations__ficheContenuImage">
            </div>
            <div class="realisations__ficheContenuDroite">
                <h2 class="realisations__ficheContenuTitre"><?php echo get_field("titre") ?></h2>
                <h3 class="realisations__ficheContenuConcepteur"><?php echo get_field("concepteur") ?></h3>
                <?php for($cpt=1; $cpt<count($tCours);$cpt++) {
                    if(get_field("cours_id")==get_field("id", $tCours[$cpt]->ID)){ ?>
                                      <p class="realisations__ficheContenuCours">Réalisé dans le cours <?php echo get_field("nom", $tCours[$cpt])?></p>
                <?php }
                }?>
<!--                <input type="button" class="realisations__ficheContenuBouton" value="Voir plus">-->
            </div>
        </div>
        <?php
        }
} ?>
                <div class="realisations__boutonsPagination">
                    <!-- ifs pour ne pas dépasser les limites des pages (1 et 13) -->
                    <!-- Pas optimal, mais ça "fait la job" -->
                    <a href="./?paged=<?php if ($paged > 1) { echo $paged-1;} else { echo 1;} ?>">Page précédente</a>
                    <a href="./?paged=<?php if ($paged < 13) { echo $paged+1;} else { echo 13;} ?>">Page suivante</a>
                </div>
            </div>



    </main>

<?php get_footer();?>