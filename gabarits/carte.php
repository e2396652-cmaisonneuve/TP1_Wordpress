<?php

/**
 * Template Name: Carte
 */
?>
<article class="card card--big">
    <div class="carte__image">

        <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail('medium', ['class' => 'carte__image-img']);
            }
            ?>
        </a>
    </div>
    <div class="card__content">
        <a href="<?php the_permalink(); ?>">
            <h2 class="card__title"><?php the_title(); ?></h2>
        </a>
        <p class="card__description">
            <?php echo wp_trim_words(get_the_excerpt(), 25, ""); ?>
            <a href="<?php the_permalink(); ?>" class="permalink">[...] Continuer la lecture</a>
        </p>
        <p class="card__temperature">
            Température maximum: <?php the_field('temperature_maximum'); ?> | minimum: <?php the_field('temperature_minimum'); ?>
        </p>
        <div class="carte__category">
            <?php the_category(); ?>
        </div>
    </div>
</article>