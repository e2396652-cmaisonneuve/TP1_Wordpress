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
                                <p class="card__description"><?php the_content() ?>
                                    <a href="<?php echo get_home_url(); ?>" class="hero__button"><< Return home</a>
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