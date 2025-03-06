<? php
/**
 * Template Name: Hero
 */
?>
<div class="hero__content global">
    <h1 class="hero__title">
        <?php bloginfo('name'); ?>
    </h1>
    <p class="hero__description">
        <?php bloginfo('description'); ?>
    </p>

    <div class="hero__cta">
        <a href="" class="hero__button">Inscrivez-vous</a>

    </div>
    <div class="hero__social"><?php get_template_part('gabarits/icone-sociaux'); ?>
    </div>
</div>