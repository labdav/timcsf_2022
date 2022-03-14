<?php

/*Template name: Stages*/

get_header();
?>

    <main class="stages">
        <h1 class="stages__titre"><?php echo get_post(668)->titre ?></h1>
        <div class="stages__futursEtudiantsContainer">
            <h2 class="stages__futursEtudiantsTitre"><?php echo get_post(1165)->titre ?></h2>
            <?php echo get_post(1165)->texte ?>
        </div>
        <h2 class="stages__employeursTitre"><?php echo get_post(1167)->titre ?></h2>
        <div class="stages__employeursContainer">
            <div class="stages__employeursFicheFin">
                <h3 class="stages__employeursFicheFinTitre"><?php echo get_post(1167)->titre ?></h3>
                <?php echo get_post(1167)->texte ?>
            </div>
            <div class="stages__employeursFicheATE">
                <h3 class="stages__employeursFicheATETitre"><?php echo get_post(1168)->titre ?></h3>
                <?php echo get_post(1168)->texte ?>
            </div>
        </div>
        <div class="stages__profilEtContact">
            <div class="stages__profilDeCompetences">
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/image_stages.png" alt="Image d'étudiants" class="stages__profilDeCompetencesImage">
                <button class="stages__profilDeCompetencesBouton" onclick="window.location.href='./programme'">Profil de compétences des étudiants</button>
            </div>
            <div class="stages__contactVignette">
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/res3_01.png" class="stages__contactVignetteImage" alt="Image du responsable d'étudiant d'un jour">
                <div class="stages__contactContenu">
                    <h4 class="stages__contactVignetteTitre"><?php echo get_post(639)->responsabilite ?></h4>
                    <button class="stages__contactVignetteBoutonContact" onclick="window.location.href='./contact'">Contacter <?php echo get_post(639)->prenom ?></button>
                    <p class="stages__contactVignetteCoordonnees"><?php echo get_post(639)->telephone ?></p>
                </div>
            </div>
        </div>
    </main>

<?php get_footer();?>