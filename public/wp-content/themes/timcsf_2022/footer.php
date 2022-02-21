</div>
<footer class="footer">
    <div class="footer__haut">
            <?php if(has_nav_menu('secondaire')){?>
                <nav class="footer__navMenu">
                    <?php wp_nav_menu(array('theme_location' => 'secondaire'));?>
                </nav>
            <?php } ?>
        <div class="footer__sociaux">
            <a href="<?php echo get_post(673)->texte ?>" class="footer__sociauxLien">
                <img class="footer_sociauxIcon" alt="Logo de Twitter" src="<?php echo get_template_directory_uri();?>/liaisons/images/twitter.svg">
            </a>
            <a href="<?php echo get_post(672)->texte ?>" class="footer__sociauxLien">
                <img class="footer_sociauxIcon" alt="Logo de Facebook" src="<?php echo get_template_directory_uri();?>/liaisons/images/facebook.svg">
            </a>
            <a href="<?php echo get_post(674)->texte ?>" class="footer__sociauxLien">
                <img class="footer_sociauxIcon" alt="Logo de Linkedin" src="<?php echo get_template_directory_uri();?>/liaisons/images/linkedin.svg">
            </a>
            <a href="http://instagram.com" class="footer__sociauxLien">
                <img class="footer_sociauxIcon" alt="Logo d'Instagram" src="<?php echo get_template_directory_uri();?>/liaisons/images/instagram.svg">
            </a>
        </div>
    </div>
    <div class="footer__bas">
            <img src="<?php echo get_template_directory_uri();?>/liaisons/images/logoCegep.png" alt="Logo du cégep de Sainte-Foy" class="footer__basLogo">
            <?php echo get_post(670)->texte ?>
           <small><p class="footer__basCopyright"><?php echo get_post(854)->texte ?></p></small>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
