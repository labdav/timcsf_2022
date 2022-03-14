<?php

/*Template name: Fiche Réalisation*/

get_header();
$idProjet = "";
if(isset($_GET['id'])) {
    $idProjet = $_GET['id'];
} else {
    $idProjet = 1;
}?>

    <main class="ficheProj">
        <?php $args = array(
        'numberposts'	=> -1,
        'post_type'		=> 'projets',
        'meta_key'		=> 'id',
        'meta_value'	=> $idProjet
        );
        $the_query = new WP_Query($args);
        $the_query->the_post();
        $idDiplome = get_field("diplome_id");
        ?>
        <div class="ficheProj__container">
        <div class="ficheProj__ficheContainer">
        <h1 class="ficheProj__titre"><?php echo get_field("titre"); ?></h1>
        <h2 class="ficheProj__titreConcepteur"><?php echo get_field("concepteur"); ?></h2>
        <?php
        $photo1 = get_field("photo1")["sizes"]["large"];
        ?>
        <div class="ficheProj__images">
            <img class="ficheProj__grosseImage" id="grosseImage" src="<?php echo $photo1 ?>">
            <div class="ficheProj__petitesImages">
                <img class="ficheProj__petiteImage image-active" id="petiteImage1" src="<?php echo get_field("photo1")["sizes"]["thumbnail"]; ?>">
                <img class="ficheProj__petiteImage" id="petiteImage2" src="<?php echo get_field("photo2")["sizes"]["thumbnail"]; ?>">
                <?php if(isset(get_field("photo3")["sizes"]["thumbnail"])) { ?><img class="ficheProj__petiteImage" id="petiteImage3" src="<?php echo get_field("photo3")["sizes"]["medium"]; ?>"> <?php }?>
                <?php if(isset(get_field("photo4")["sizes"]["thumbnail"])) { ?><img class="ficheProj__petiteImage" id="petiteImage4" src="<?php echo get_field("photo4")["sizes"]["medium"]; ?>"> <?php }?>
            </div>
            <div class="ficheProj__description">
                <p class="ficheProj__descriptionTexte"><?php echo get_field("description");?></p>
                <h3 class="ficheProj__descriptionTechnologiesTitre">Technologies utilisées</h3>
                <p class="ficheProj__descriptionTechonologies"><?php echo get_field('technologies')?></p>
                <?php $idCours = get_field("cours_id");
                $args = array(
                    'numberposts'	=> -1,
                    'post_type'		=> 'cours',
                    'meta_key'		=> 'id',
                    'meta_value'	=> $idCours
                );
                $the_query = new WP_Query($args);
                $the_query->the_post(); ?>
                <h3 class="ficheProj__titreDescription">Réalisé dans le cadre du cours: <?php echo get_field('nom')?></h3>
            </div>
        </div>
        </div>
        </div>
        <?php
        $args = array(
            'numberposts'	=> -1,
            'post_type'		=> 'finissants',
            'meta_key'		=> 'id',
            'meta_value'	=> $idDiplome
        );
        $the_query = new WP_Query($args);
        $the_query->the_post(); ?>
        <div class="ficheProj__concepteurContainer">
            <div class="ficheProj__concepteur">
                <h2 class="ficheProj__concepteurAPropos">À propos du concepteur</h2>
                <?php $photo=get_field("photo"); ?>
                <img src="<?php echo $photo["sizes"]["medium"]; ?>" alt="Photo du concepteur" class="ficheProj__concepteurPhoto">
                <h3 class="ficheProj__concepteurNom"><?php echo get_field('prenom')?> <?php echo get_field('nom')?></h3>
                <?php echo get_field('presentation')?>
            </div>
        </div>
        <button class="ficheProj__boutonRetourRealisations" onclick="window.location.href='./realisations'" value="">Retour à la liste des projets</button>
    </main>
    <script src="../.././public/wp-content/themes/timcsf_2022/liaisons/js/fiche-realisation.js"></script>
<?php get_footer();?>