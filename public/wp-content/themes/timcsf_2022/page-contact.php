<?php

/*Template name: Contact*/

get_header();

echo "page-contact.php"; //À retirer éventuellement
?>

<?php
//à mettre dans la page pour afficher les responsables
//**************************************************

//Requête pour obtenir les infos des responsables
$args = array(
    'post_type' => 'responsables',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'order_by' => 'post_date',
    'order' => 'ASC',
);

$the_query = new WP_Query( $args );

?>

    <main class="contact">
        <div class="contact__fiches">
        <h1 class="contact__titre"></h1>
        <div class="contact__fichesResponsables">
<?php if($the_query->have_posts()){
    while($the_query->have_posts()) {
        $the_query->the_post();?>

        <?php //Photo obtient un tableau (sizes) contenant les différentes tailles d'image
        $photo=get_field("photo");
        //ici on affiche seulement la taille thumbnail
        ?>
            <br />
        <div class="contact__ficheResponsable" style="background-image: url('<?php echo $photo["sizes"]["large"]; ?>')" alt="<?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?>">
            <?php $photo=get_field("photo"); ?>
            <div class="contact__ficheResponsableEtiquette">
                <p class="contact__ficheResponbleNom"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></p>
                <p class="contact__ficheResponsableResponsabilite"> <?php echo get_field("responsabilite");?></p>
            </div>
            <button class="contact__bouton" id="contact__bouton<?php echo get_field("prenom");?>"  onclick="choisirResponsable('<?php echo get_field("prenom");?>'.toLowerCase())">Contacter</button>
        </div>

    <?php }
} ?>
        </div>
     </div>
        <h2 class="contact__formulaireTitre">Formulaire de contact</h2>
        <form class="contact__formulaire" method="POST" novalidate>
            <label for="responsablesSelect">Choisissez un destinataire:</label>
            <select name="responsables" id="responsablesSelect" class="formSelect">
                <option value="sylvain">Sylvain Lamoureux</option>
                <option value="michel">Michel Rouleau</option>
                <option value="pascal">Pascal Larose</option>
                <option value="benoît">Benoît Frigon</option>
            </select>
                <label for="sujet">Sujet:</label>
                <input
                        type="text"
                        id="sujet"
                        name="sujet"
                        value=""
                        class="champMoyen"
                        required>
                <p class="erreur__message"></p>
                <label for="nom">Nom:</label>
                <input type="text"
                       id="nom"
                       name="nom"
                       value=""
                       class="champMoyen"
                       pattern="/[a-zA-ZÀ-ÿ -]+/"
                       required
                >
                <p class="erreur__message"></p>
                <label for="courriel">Courriel:</label>
                <input
                        type="text"
                        id="courriel"
                        name="courriel"
                        value=""
                        class="champMoyen"
                        pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/">
                <p class="erreur__message">Veuillez entrer un courriel valide</p>
                <label for="message">Message:</label>
                <textarea
                        id="message"
                        name="message" value=""
                        class="champMessageLong"
                        required>
                </textarea>
                <p class="erreur__message"></p>
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <div class="g-recaptcha" data-sitekey="6Ld2xZAUAAAAAJ2AKX2HBkO1X3vSb6vuQ4ireXAK"></div>
                <button type="submit" class="contact__boutonEnvoyer">Envoyer</button>
        </form>
    </main>
<!--    <script type="text/javascript" src="../.././public/wp-content/themes/timcsf_2022/liaisons/js/contact.js"></script>-->
    <script>
        function choisirResponsable(nom) {
            document.getElementById("responsablesSelect").value = nom;
            document.getElementById("responsablesSelect").focus();
        }
    </script>
<?php get_footer();?>