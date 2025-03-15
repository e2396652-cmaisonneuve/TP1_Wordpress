<?php get_header(); ?>

<main>

    <section class="hero">
        <?php get_template_part('gabarits/hero'); ?>
    </section>
    <section class="populaire global">
        <div class="global">
            <h2>Nos destinations favorites</h2>
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

    </section>
    <section class="banner">
        <?php get_template_part('gabarits/banner'); ?>
    </section>

    <section class="temoignages">
        <div class="global">
            <h2 class="center">Témoignages</h2>
            <?php get_template_part('gabarits/reviews'); ?>
        </div>
</main>
<?php get_footer(); ?>