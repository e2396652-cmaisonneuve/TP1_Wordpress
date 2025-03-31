<? php
/**
 * Template Name: Hero
 */
?>
<?php $hero_title = get_theme_mod('hero_title', 'Default Title'); ?>
<?php $hero_description = get_theme_mod('hero_description', 'Default Title'); ?>
<?php $hero_auteur = get_theme_mod('hero_auteur', 'Default Title'); ?>
<?php $hero_telephone = get_theme_mod('hero_telephone', 'Default Title'); ?>
<?php $hero_email = get_theme_mod('hero_email', 'Default Title'); ?>
<?php $hero_addresse = get_theme_mod('hero_addresse', 'Default Title'); ?>
<?php $hero_ville = get_theme_mod('hero_ville', 'Default Title'); ?>
<?php $hero_background = get_theme_mod('hero_background', 'Default Title'); ?>
<?php $hero_cta_text = get_theme_mod('hero_cta_text', 'Default Title'); ?>
<section class="hero__content" style="background-image: url(<?php echo $hero_background ?>);">
    <style>
        .hero_couleur {
            color: <?php echo get_theme_mod('hero_couleur', '#000000') ?>;
        }
    </style>
    <div class="global">
        <h1 class="hero__title">
            <?php echo $hero_title ?>
        </h1>
        <p class="hero__description">
            <?php echo $hero_description ?>
        </p>
        <div class="hero__description">
            <p><a href="mailto:<?php echo $hero_email ?>"><?php echo $hero_email ?></a></p>
            <p><?php echo $hero_telephone ?><br>
                <?php echo $hero_addresse ?><br>
                <?php echo $hero_ville ?></p>
            <p>Auteur: <?php echo $hero_auteur ?></p>
        </div>

        <div class="hero__cta">
            <a href="" class="hero__button"><?php echo $hero_cta_text ?></a>
        </div>
        <div class="hero__social"><?php get_template_part('gabarits/icone-sociaux'); ?>
        </div>
    </div>
</section>