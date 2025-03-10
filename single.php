<?php get_header(); ?>

<section class="hero">
    <?php get_template_part('gabarits/hero'); ?>
</section>
<section class="populaire global">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (in_category('Galerie')) {
                    the_content();
                } else { ?>
                    <article>
                        <div class="">
                            <div class="carte__image">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail('large');
                                }
                                ?>
                            </div>
                            <div class="card__content">
                                <h2 class="card__title"><?php the_title(); ?></h2>
                                <p class="card__content">Température maximum: <?php the_field('temperature_maximum') ?> | minimum: <?php the_field('temperature_minimum') ?></p>
                                <p class="card__description"><?php the_content() ?></p>
                                <div class="carte__category"><?php the_category() ?></div>
                                
                                
                                <p></p>
                                <div>
                                    <p><a href="<?php echo get_home_url(); ?>">
                                            ← Return home</a></p>
                                </div>
                            </div>
                        </div>

                    </article>
                <?php } ?>
        <?php endwhile;
        endif; ?>

    </div>

</section>
<?php get_footer(); ?>