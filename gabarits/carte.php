<? php
/**
 * Template Name: Carte
 */
?>
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
            <div class="carte__category"><?php the_category() ?></div>
            <p class="card__description"><?php echo wp_trim_words(get_the_excerpt(), 25, ""); ?>
                <a href="<?php the_permalink(); ?>">[...] Continuer la lecture</a>
            </p>
            <p class="card__description">Température maximum: <?php the_field('temperature_maximum') ?> | minimum: <?php the_field('temperature_minimum') ?></p>
        </div>
    </div>

</article>