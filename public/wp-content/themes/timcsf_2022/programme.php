<?php

/*Template name: Programme*/

get_header();
?>

<main class="programme">
    <h1 class="programme__titre">Le programme</h1>
    <div class="programme__axesEtBut">
        <div class="programme__tim3Mots">
            <p class="programme__grosTim">TIM</p>
            <div class="programme__3mots">
                <p class="programmeUtilisabilite">Utilisabilité</p>
                <p class="programmePortabilite">Portabilité</p>
                <p class="programmeAccessibilite">Accessibilité</p>
            </div>
        </div>
        <div class="programme__2Axes1But">
            <div class="programme__2Axes">
                <h2 class="programme__2axesTitre">2 axes de formation</h2>
                <div class="programme__2axesLogo">
                    <div class="programme__conceptionContainer">
                        <img src="<?php echo get_template_directory_uri();?>/liaisons/images/conception.svg" class="programme__conceptionLogo">
                        <p class="programme__conceptionTitre">Conception & Traitement des médias</p>
                    </div>
                    <div class="programme__integrationProgrammationContainer">
                            <img src="<?php echo get_template_directory_uri();?>/liaisons/images/programmation.svg" class="programme__integrationProgrammationLogo">
                        <p class="programme__integrationProgrammationTitre">Intégration et programmation</p>
                    </div>
                </div>
                <div class="programme__1SeulBut">
                    <h2 class="programme__1SeulButTitre"><?php echo get_post(1173)->titre ?></h2>
                    <div class="programme__1SeulButImgDesc">
                        <img src="<?php echo get_template_directory_uri();?>/liaisons/images/chapeau.svg" class="programme__1SeulButImg">
                        <p class="programme__1SeulButDesc"><?php echo get_post(1173)->texte ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="programme__profilEtCompetences">
        <h2 class="programme__profilEtCompetencesTitre">Profil et compétences</h2>
        <div class="programme__profilsContainer">
            <div class="programme__progIntContainer">
            <div class="programme__programmation onglet-actif" id="programmationDiv" onclick="afficherContenu('programmation')">
                <div class="programme__programmationBoutonDiv">
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/programmation.svg" class="programme__programmationBoutonIcone" alt="Bouton du profil programmation">
                    <p class="programme__programmationBoutonTitre"><?php echo get_post(680)->titre ?></p>
                </div>
            </div>

            <div class="programme__integration onglet-inactif" id="integrationDiv"  onclick="afficherContenu('integration')">
                <div class="programme__integrationBouton">
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/integration.svg" class="programme__integrationBoutonIcone" alt="Bouton du profil intégration">
                    <p class="programme__integrationBoutonTitre"><?php echo get_post(679)->titre ?></p>
                </div>
            </div>
            </div>

            <div class="programme__concTraitAutresContainer">
            <div class="programme__conception onglet-inactif" id="conceptionDiv"  onclick="afficherContenu('conception')">
                <div class="programme__conceptionBouton">
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/conception.svg" class="programme__conceptionBoutonIcone" alt="Bouton du profil conception">
                    <p class="programme__conceptionBoutonTitre"><?php echo get_post(677)->titre ?></p>
                </div>
            </div>

            <div class="programme__traitement onglet-inactif" id="traitementDiv"  onclick="afficherContenu('traitement')">
                <div class="programme__traitementBouton">
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/traitement.svg" class="programme__traitementBoutonIcone" alt="Bouton du profil traitement des médias">
                    <p class="programme__traitementBoutonTitre"><?php echo get_post(678)->titre ?></p>
                </div>
            </div>

            <div class="programme__autre onglet-inactif" id="autreDiv"  onclick="afficherContenu('autre')">
                <div class="programme__autreBouton">
                    <img src="<?php echo get_template_directory_uri();?>/liaisons/images/autre.svg" class="programme__autreBoutonIcone" alt="Bouton du profil autre">
                    <p class="programme__autreBoutonTitre"><?php echo get_post(681)->titre ?></p>
                </div>
            </div>
            </div>
        </div>
    <div class="programme__profilsContenuDeveloppe">
        <div id="contenuDevId" tabindex="-1"> </div>
        <div class="programme__contenuDeveloppe" id="programmationDeveloppe">
            <h3 class="programme__profilsContenuDeveloppeTitre" id="titreContenuDeveloppe"><?php echo get_post(680)->titre ?></h3>
            <?php echo get_post(680)->texte ?>
        </div>
        <div class="programme__contenuDeveloppe cache" id="integrationDeveloppe">
            <h3 class="programme__profilsContenuDeveloppeTitre" id="titreContenuDeveloppe"><?php echo get_post(679)->titre ?></h3>
            <?php echo get_post(679)->texte ?>
        </div>
        <div class="programme__contenuDeveloppe cache" id="conceptionDeveloppe">
            <h3 class="programme__profilsContenuDeveloppeTitre" id="titreContenuDeveloppe"><?php echo get_post(677)->titre ?></h3>
            <?php echo get_post(677)->texte ?>
        </div>
        <div class="programme__contenuDeveloppe cache" id="traitementDeveloppe">
            <h3 class="programme__profilsContenuDeveloppeTitre" id="titreContenuDeveloppe"><?php echo get_post(678)->titre ?></h3>
            <?php echo get_post(678)->texte ?>
        </div>
        <div class="programme__contenuDeveloppe cache" id="autreDeveloppe">
            <h3 class="programme__profilsContenuDeveloppeTitre" id="titreContenuDeveloppe"><?php echo get_post(681)->titre ?></h3>
            <?php echo get_post(681)->texte ?>
        </div>
    </div>
    <button class="programme__boutonGrilleDeCours"><a href="<?php echo get_template_directory_uri();?>/liaisons/files/grille_cours_TIM.pdf" download="grille_de_cours_tim">Consulter la grille de cours</a></button>
        <div class="programme__etudiantDUnJour">
            <div class="programme__edujContenu">
                <h3 class="programme__edujContenuTitre"><?php echo get_post(664)->titre ?></h3>
                <p class="programme__edujContenuTexte"><?php echo get_post(664)->texte ?></p>
            </div>
            <div class="programme__edujVignette"> <!-- eduj est une abréviation de étudiant d'un jour pour le balisage -->
                <img src="<?php echo get_template_directory_uri();?>/liaisons/images/res4_01.png" class="programme__edujVignetteImage" alt="Image du responsable d'étudiant d'un jour">
                <div class="programme__edujVignetteContenu">
                    <h4 class="programme__edujVignetteTitre"><?php echo get_post(640)->responsabilite ?></h4>
                    <button class="programme__edujVignetteBoutonContact" onclick="window.location.href='./contact'" >Contacter <?php echo get_post(640)->prenom ?></button>
                    <p class="programme__edujVignetteCoordonnees"><?php echo get_post(640)->telephone ?></p>
                </div>
            </div>
        </div>
</main>

<script type="text/javascript">
    function afficherContenu(idContenu) {
        document.getElementById("contenuDevId").focus();
        classesACacher = document.getElementsByClassName("programme__contenuDeveloppe");
        for(let nbClasses = 0; nbClasses < classesACacher.length; nbClasses++) {
            classesACacher[nbClasses].classList.add("cache");
        }
        ongletsAChanger = document.getElementsByClassName("onglet-actif");
        for(let nbClasses = 0; nbClasses < ongletsAChanger.length; nbClasses++) {
            ongletsAChanger[nbClasses].classList.add("onglet-inactif");
            ongletsAChanger[nbClasses].classList.remove("onglet-actif");
        }
        document.getElementById(idContenu+"Developpe").classList.remove("cache");
        document.getElementById(idContenu+"Div").classList.remove("onglet-inactif");
        document.getElementById(idContenu+"Div").classList.add("onglet-actif");
    }
</script>

<?php get_footer();?>
