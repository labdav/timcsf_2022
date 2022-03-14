<?php
get_header();

?>
<main class="acc">
    <div class="acc__descProgramme">
        <div class="acc__descProgrammeContainer">
            <h2 class="acc__descProgrammeTitre"><?php echo get_post(736)->titre ?></h2>
            <p class="acc__descProgrammeTexte"><?php echo get_post(736)->texte ?></p>
        </div>
        <div class="containerBoutonInscription">
            <button class="boutonInscription">Inscris-toi!</button>
        </div>
    </div>

    <svg class="acc__vagueRealisations" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#377CAF" fill-opacity="1" d="M0,160L60,165.3C120,171,240,181,360,160C480,139,600,85,720,64C840,43,960,53,1080,80C1200,107,1320,149,1380,170.7L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
    <div class="acc__realisations">
        <h3 class="acc__realiTitre">Réalisations étudiantes</h3>
        <div class="acc__realiGallerie">
            <?php
            $args = array(
                'post_type' => 'projets',
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'orderby' => 'rand',
            );

            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>

                <?php $photo=get_field("photo1"); ?>
                <a href="./fiche-realisation?id=<?php echo get_field("id") ?>" class="acc__realiLien">
                    <div class="acc__realiFiche" style="background-image: url('<?php echo $photo["sizes"]["medium"]; ?>')">
                        <div class="acc__realiFicheFond"></div>
                        <div class="acc__realiFicheEtiquette">
                            <h4 class="acc__realiFicheEtiquetteTitre"><?php echo get_field("titre")?></h4>
                            <p class="acc__realiFicheEtiquetteConcepteur"><?php echo get_field("concepteur")?></p> <!-- À changer pour quelque chose de programmé qui "get" le nom de l'étudiant par ID -->
                        </div>
                    </div>
                </a>
                <?php }
            } ?>
            <div class="acc__realiPuces">
            </div>
            <button type="button" class="acc__realiVoirTout" onclick="window.location.href='./realisations'">Voir toutes les réalisations</button>
        </div>
    </div>
    <div class="acc__temoignages">
        <h3 class="acc__temoiTitre"><?php echo get_post(746)->titre ?></h3>

        <?php
        $args = array(
            'post_type' => 'temoignages',
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby' => 'rand',
        );

        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                ?>

        <div class="acc__temoiFiche">
            <?php $photo=get_field("photo"); ?>
            <img class="acc__temoiPhoto" src="<?php echo $photo["sizes"]["thumbnail"]; ?>" alt="<?php echo get_field("temoin"); ?>"/>
            <div class="acc__temoiContainer">
                <div class="acc__temoiSeparateur"></div> <!-- pas sûr que ce sera nécessaire -->
                <h4 class="acc__temoiNomTemoin"><?php echo get_field("temoin")?></h4>
                <div class="acc__temoiEtiquettes">
                <div class="acc__temoiEtiquettesAnnee">
                    <p class="acc__temoiEtiquettesAnneeTexte">Diplômé <?php echo get_field("annee_diplomation")?></p>
                    </div>
                    <div class="acc__temoiEtiquettePoste">
                        <p class="acc__temoiEtiquettesPosteTexte"><?php echo get_field("titre_poste")?> chez <?php echo get_field("entreprise")?></p>
                    </div>
                </div>
            <p class="acc__temoiTexteDesc"><?php echo get_field("temoignage")?> </p>
            </div>
        </div>
            <?php }
        } ?>


    </div>

<div class="acc__plusDInfoContainer">
    <div class="acc__plusDInfo">
        <h3 class="acc__plusDInfoTitre">Pas encore convaincu?</h3>
        <div class="acc__plusFiches">
<?php
$args = array(
    'post_type' => 'plus_dinfo',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'order_by' => 'post_date',
    'order' => 'ASC',
);

$the_query = new WP_Query($args);

if ($the_query->have_posts()) {
    while ($the_query->have_posts()) {
        $the_query->the_post();?>
        <div class="acc__plusFiche">
            <div class="acc__plusFicheZoneTitre">
                <h4 class="acc__plusFicheTitre"><?php echo get_field("titre") ?></h4>
            </div>
            <p class="acc__plusFicheTexte"><?php echo get_field("contenu")  ?></p>
            <?php echo get_field("bouton") ?>
        </div>
    <?php }
}?>
        </div>
    </div>
</div>
    <div class="acc__bourseEtInscription">
        <div class="acc__infoBourse">
            <h2 class="acc__infoBourseTitre"><?php echo get_post(1205)->titre ?></h2>
            <p class="acc__infoBourseTexte"><?php echo get_post(1205)->texte ?></p>
            <button class="acc__infoBourseBouton" onclick="window.location.href='<?php echo get_post(1206)->texte ?>'"><?php echo get_post(1206)->titre ?></button>
        </div>
        <div class="acc__infoInscription">
            <h2 class="acc__infoInscriptionTitre"><?php echo get_post(667)->titre ?></h2>
            <p class="acc__infoInscriptionTexte"><?php echo get_post(667)->texte ?></p>
            <button class="acc__infoInscriptionBouton" onclick="window.location.href='<?php echo get_post(1207)->texte ?>'"><?php echo get_post(1207)->titre ?></button>
        </div>
    </div>
</main>

<?php get_footer(); ?>