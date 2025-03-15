<?php $hero_telephone = get_theme_mod('hero_telephone', 'Default Title'); ?>
<?php $hero_email = get_theme_mod('hero_email', 'Default Title'); ?>
<footer>
    <div class="global footer__grid">
        <div class="footer-col">
            <h4 class="footer__titre">Bougeotte Voyages</h4>
            <p class="footer__description"><?php bloginfo('description'); ?></p>
            <p class="footer__courriel"><?php echo $hero_email ?></p>
            <p class="footer__phone"><?php echo $hero_telephone ?></p>
            <p class="footer__social"><?php get_template_part('gabarits/icone-sociaux'); ?></p>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Horaire</h4>
            <p class="footer__horaire"><strong>Lundi au vendredi</strong><br>8h00 à 17h00</p>
            <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                    <h4 class="footer__titre">Recherche</h4>
                    <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit">Rechercher</button>
            </form>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Categories</h4>
            <div class="footer__categories"><?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu' => 'menu-principal', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?></div>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Links</h4>
            <p class="footer__links"><a href="#">Travel Packages</a></p>
            <p class="footer__links"><a href="#">Promotions</a></p>
            <p class="footer__links"><a href="#">Terms and Conditions</a></p>
            <p class="footer__links"><a href="#">Privacy Policy</a></p>
            <p class="footer__links"><a href="#">Work With Us</a></p>
        </div>
    </div>


    <a href="#" class="back-to-top" title="Back to Top">↑</a>

    <?php wp_footer(); ?>
</footer>