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
            <p class="card__description"><?php echo wp_trim_words(get_the_excerpt(), 40, ""); ?>
                <a href="<?php the_permalink(); ?>">[...] Continuer la lecture</a>
            </p>
        </div>
    </div>

</article>