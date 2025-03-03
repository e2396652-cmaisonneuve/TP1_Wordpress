<?php get_header(); ?>

<section class="hero">
    <div class="hero__content global">
        <h1 class="hero__title">
            Travel with Bougeotte Voyages
        </h1>
        <p class="hero__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur aspernatur est officiis, mollitia minus
            asperiores quas libero saepe consequuntur at blanditiis et eligendi, sequi sit quae laboriosam, ex
            delectus nesciunt.
        </p>
        <a href="" class="hero__email">
            info@bougeottevoyages.com
        </a>
        <div class="hero__social">
            <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
            <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000000" width="20" height="20">
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
        <h2><?php single_cat_title(); ?></h2>
        <p><?php echo category_description(); ?></p>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('Galerie')) {
                    the_content();
                } else { ?>
                    <article>
                        <div class="card card--big">
                            <div class="carte__image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('medium');
                                }
                                ?>
                            </div>
                            <div class="card__content">
                                <a href="<?php the_permalink(); ?>">
                                    <h2 class="card__title"><?php the_title(); ?></h2>
                                </a>
                                <p class="card__description"><?php echo wp_trim_words(get_the_excerpt(), 100, ""); ?>
                                    <a href="<?php the_permalink(); ?>">[...] Lire la suite</a>
                                </p>
                            </div>
                        </div>

                    </article>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>
<?php get_footer(); ?>