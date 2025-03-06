<?php get_header(); ?>

<section class="hero">
    <?php get_template_part('gabarits/hero'); ?>
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
                                    <a href="<?php the_permalink(); ?>">[...] Continuer la lecture</a>
                                </p>
                            </div>
                        </div>

                    </article>
                <?php } ?>


        <?php endwhile;
        endif; ?>
        <!-- Pagination -->
        <div class="category__pagination">
            <?php $args = array(
                'format'    => 'page/%#%/',
                'prev_text' => '← Précédent',
                'next_text' => 'Suivant →'
            );
            the_posts_pagination($args); ?>
        </div>

    </div>

</section>
<?php get_footer(); ?>