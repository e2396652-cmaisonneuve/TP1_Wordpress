<?php get_header(); ?>

<section class="hero">
    <div class="hero__content global">
        <h1 class="hero__title">
        <?php bloginfo( 'name' ); ?>
        </h1>
        <p class="hero__description">
        <?php bloginfo( 'description' ); ?>
        </p>
        <a href="" class="hero__email">
            info@bougeottevoyages.com
        </a>
        <div class="hero__social"><?php get_template_part('gabarits/icone-sociaux'); ?>
        </div>
        <form class="hero__form">
            <div class="form__group">
                <label for="nom" class="form__label">Nom</label>
                <input type="text" id="nom" class="hero__form-input" placeholder="Écrivez votre nom">
            </div>
            <div class="form__group">
                <label for="prenom" class="form__label">Prénom</label>
                <input type="text" id="prenom" class="hero__form-input" placeholder="Écrivez votre prénom">
            </div>
            <div class="form__group">
                <label for="courriel" class="form__label">Courriel</label>
                <input type="email" id="courriel" class="hero__form-input" placeholder="Écrivez votre courriel">
            </div>
            <div class="form__group">
                <label for="telephone" class="form__label">Téléphone</label>
                <input type="tel" id="telephone" class="hero__form-input" placeholder="Écrivez votre téléphone">
            </div>
            <div class="form__group">
                <label for="submit-btn" class="form__label"><br></label>
                <input type="submit" id="submit-btn" value="S'INSCRIRE" class="hero__button">
            </div>
        </form>

    </div>
</section>
<section class="populaire global">
    <div class="global">
        <h2>Destinations populaires</h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('Galerie')) {
                    the_content();
                } else { ?>
                   <?php get_template_part('gabarits/carte'); ?>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>
<?php get_footer(); ?>