<footer>
    <div class="global flex">
        <section class="footer__about">
            <h4 class="footer__titre">Bougeotte Voyages</h4>
            <p class="footer__description">Travel with us! Lorem ipsum dolor sit amet consectetur.</p>
            <h4 class="footer__titre">Contact</h4>
            <p class="footer__courriel">info@bougeottevoyages.com</p>
            <p class="footer__phone">514-123-4567</p>
        </section>
        <section class="footer__horaire">

            <h4 class="footer__titre">Horaire</h4>
            <p class="footer__jour">Lundi au vendredi</p>
            <p class="footer__heure">8h00 à 17h00</p>
            <h4 class="footer__titre">Search</h4>
            <form action="" method="get" class="footer__form">
                <input type="search" name="search" id="search" class="footer__input" placeholder="Recherche...">
                <button type="submit" class="footer__button">Recherche</button>
            </form>
        </section>
        <section class="footer__links">
            <h4 class="footer__titre">Menu</h4>
            <div class="footer__navigation">
                <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu' => 'menu-principal', 'container' => 'p', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?>
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