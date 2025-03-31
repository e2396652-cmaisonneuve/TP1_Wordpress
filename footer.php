<?php $hero_telephone = get_theme_mod('hero_telephone', 'Default Title'); ?>
<?php $hero_email = get_theme_mod('hero_email', 'Default Title'); ?>
<footer>
    <div class="global footer__grid">
        <div class="footer-col">
            <h4 class="footer__titre"><?php bloginfo('titre'); ?></h4>
            <p class="footer__description"><?php bloginfo('description'); ?></p>
            <p class="footer__courriel"><?php echo $hero_email ?></p>
            <p class="footer__phone"><?php echo $hero_telephone ?></p>
            <p class="footer__social"><?php get_template_part('gabarits/icone-sociaux'); ?></p>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Horaire</h4>
            <p class="footer__horaire"><strong>Lundi au vendredi</strong><br>8h00 à 17h00</p>
            <?php get_search_form(); ?>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Categories</h4>
            <div class="footer__categories"><?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu' => 'menu-principal', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?></div>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Links</h4>
            <p class="footer__links"><a href="#">Forfaits de Voyage</a></p>
            <p class="footer__links"><a href="#">Promotions</a></p>
            <p class="footer__links"><a href="#">Conditions Générales</a></p>
            <p class="footer__links"><a href="#">Politique de Confidentialité</a></p>
            <p class="footer__links"><a href="#">Travailler avec Nous</a></p>
        </div>
    </div>


    <a href="#" class="back-to-top" title="Back to Top">↑</a>

    <?php wp_footer(); ?>
</footer>