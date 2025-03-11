<?php $hero_telephone = get_theme_mod('hero_telephone', 'Default Title'); ?>
<?php $hero_email = get_theme_mod('hero_email', 'Default Title'); ?>
<footer>
    <div class="global footer__grid">
        <div class="footer-col">
            <h4 class="footer__titre">Bougeotte Voyages</h4>
            <p class="footer__description"><?php bloginfo('description'); ?></p>
            <p class="footer__courriel"><?php echo $hero_email ?></p>
            <p class="footer__phone"><?php echo $hero_telephone ?></p>
            <p class="footer__social"><?php get_template_part('gabarits/icone-sociaux'); ?>
            </p>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Horaire</h4>
            <p class="footer__horaire"><strong>Lundi au vendredi</strong><br>
                8h00 à 17h00</p>
            <form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                <label>
                    <h4 class="footer__titre">Recherche</h4>
                    <input class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
                </label>
                <button class="recherche__bouton" type="submit">Rechercher
                </button>
            </form>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Categories</h4>
            <div class="footer__categories"><?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu' => 'menu-principal', 'container' => 'div', 'container_class' => '', 'container_id' => '', 'container_aria_label' => '', 'menu_class' => '')) ?></div>
            </p>
        </div>
        <div class="footer-col">
            <h4 class="footer__titre">Links</h4>
            <p class="footer__links"><a href=#>Expedia</a></p>
            <p class="footer__links"><a href=#>TripAdvisor</a></p>
            <p class="footer__links"><a href=#>Booking</a></p>
            <p class="footer__links"><a href=#>Hotels.com</a></p>
            <p class="footer__links"><a href=#>Priceline</a></p>
            </p>
        </div>

    </div>

    <?php wp_footer(); ?>
</footer>