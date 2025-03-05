<footer>
    <div class="global flex">
        <section class="footer__about">
            <h4 class="footer__titre">Bougeotte Voyages</h4>
            <p class="footer__description"><?php bloginfo( 'description' ); ?></p>
            <p class="footer__courriel">info@bougeottevoyages.com</p>
            <p class="footer__phone">514-123-4567</p>
            <p class="footer__social"><?php get_template_part('gabarits/icone-sociaux'); ?>
</p>
        </section>
        <section class="footer__horaire">

            <h4 class="footer__titre">Horaire</h4>
            <p><strong>Lundi au vendredi</strong><br>
            8h00 à 17h00</p>
            <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
    <h4 class="footer__titre">Recherche</h4>
        <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button class="recherche__bouton" type="submit">Rechercher
    </button>
</form>
        </section>
        <section>
            <h4 class="footer__titre">Categories</h4>
            <div>
                <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu' => 'menu-principal', 'container' => '', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?>
            </div>
        </section>
        <section class="footer__links">
            <h4 class="footer__titre">Links</h4>
            <p class="footer__links"><a href="http://www.expedia.ca">Expedia</a></p>
            <p class="footer__links"><a href="http://www.expedia.ca">TripAdvisor</a></p>
            <p class="footer__links"><a href="http://www.expedia.ca">Booking</a></p>
            <p class="footer__links"><a href="http://www.expedia.ca">Hotels.com</a></p>
            <p class="footer__links"><a href="http://www.expedia.ca">Priceline</a></p>
        </section>
    </div>
    <div class="global footer-bottom">
        <p>&copy; 2025 Club de Voyage. Tous droits réservés.</p>
    </div>
    <?php wp_footer(); ?>
</footer>