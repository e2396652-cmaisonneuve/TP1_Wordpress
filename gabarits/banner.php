<? php
/**
 * Template Name: Banner
 */
?>
<?php $banner_title = get_theme_mod('banner_title', 'Default Title'); ?>
<?php $banner_description = get_theme_mod('banner_description', 'Default Title'); ?>
<?php $banner_background = get_theme_mod('banner_background', 'Default Title'); ?>
<?php $banner_cta_text = get_theme_mod('banner_cta_text', 'Default Title'); ?>
<section class="banner banner__content" style="background-image: url(<?php echo $banner_background ?>);">
    <div class="global">
        <h1 class="banner__title">
            <?php echo $banner_title ?>
        </h1>
        <p class="banner__description">
            <?php echo $banner_description ?>
        </p>
        <div class="banner__cta">
            <a href="" class="banner__button"><?php echo $banner_cta_text ?></a>
        </div>
    </div>
</section>