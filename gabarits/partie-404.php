<? php
/**
 * Template Name: 404 Page - Epreuve Finale
 */
?>
<?php $page404_titre = get_theme_mod('page404_titre', 'Default Title'); ?>
<?php $page404_message = get_theme_mod('page404_message', 'Default Title'); ?>
<?php $page404_background = get_theme_mod('page404_background', 'Default Title'); ?>
<?php $page404_cta_text = get_theme_mod('page404_cta_text', 'Default Title'); ?>
<section class="page404__content" style="background-image: url(<?php echo $page404_background ?>);">
    <style>
        .page404_couleur {
            color: <?php echo get_theme_mod('page404_couleur', '#000000') ?>;
        }
    </style>
    <div class="global">
        <h1 class="page404__titre">
            <?php echo $page404_titre ?>
        </h1>
        <p class="page404__message">
            <?php echo $page404_message ?>
        </p>
        
        <div class="page404__cta">
            <a href="" class="page404__button"><?php echo $page404_cta_text ?></a>
        </div>
    </div>
</section>