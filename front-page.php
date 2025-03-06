<?php get_header(); ?>

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

<?php get_footer(); ?>