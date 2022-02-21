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
            <button class="contact__bouton">Contacter</button>
        </div>

    <?php }
} ?>
        </div>
     </div>
        <form class="contact__formulaire">
            <div class="contact__formContainerInputs">
                <label for="nom">Nom:</label>
                <input type="text" id="nom" name="nom" value="" class="champMoyen">
                <label for="courriel">Courriel:</label>
                <input type="text" id="courriel" name="courriel" value="" class="champMoyen">
                <label for="message">Message:</label>
                <input type="text" id="message" name="message" value="" class="champMessageLong">
                <button type="submit">Envoyer</button>
            </div>
            <div class="contact__formContainerDestinataire">
                <label for="responsables">Choisissez un destinataire:</label>
                <select name="responsables" id="responsables" class="formSelect">
                    <option value="sylvain">Sylvain Lamoureux</option>
                    <option value="michel">Michel Rouleau</option>
                    <option value="pascal">Pascal Larose</option>
                    <option value="benoit">Benoît Frigon</option>
                </select>
                <div class="contact__ficheResponsable" style="background-image: url('<?php echo $photo["sizes"]["large"]; ?>')" alt="<?php echo get_field("prenom"); ?> <?php echo get_field("nom"); ?>">
                    <?php $photo=get_field("photo"); ?>
                    <div class="contact__ficheResponsableEtiquette">
                        <p class="contact__ficheResponbleNom"><?php echo get_field("prenom");?> <?php echo get_field("nom");?></p>
                        <p class="contact__ficheResponsableResponsabilite"> <?php echo get_field("responsabilite");?></p>
                    </div>
                </div>
            </div>
        </form>
    </main>

<?php get_footer();?>