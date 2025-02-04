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
            <button class="hero__button">
                Inscription
            </button>
            <div class="hero__social">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000000" width="20" height="20">
            </div>
        </div>
    </section>
    <section class="gallery global">
        <h1>Our favorite destinations</h1>
        <div class="gallery__container">
            <div class="gallery__photo">
                <picture><img src="<?php echo get_template_directory_uri() . '/images/paris.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
                <picture><img src="<?php echo get_template_directory_uri() . '/images/london.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/salvador.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/newyork.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/rio.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/chicago.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/noronha.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/iceland.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/trancoso.jpg' ?>"></picture>
            </div>
            <div class="gallery__photo">
            <picture><img src="<?php echo get_template_directory_uri() . '/images/helsinki.jpg' ?>"></picture>
            </div>

        </div>

    </section>
    <section class="populaire global">
        <h1>Destinations populaires</h1>
        <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article>
        <h2><?php the_title(); ?></h2>
        <div><?php echo wp_trim_words(get_the_excerpt(), 50, "..."); ?></div>
    </article>
<?php endwhile; endif; ?>

        </div>

    </section>
    <?php get_footer(); ?>
