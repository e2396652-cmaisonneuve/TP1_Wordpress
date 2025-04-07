<? php
/**
 * Template Name: 404 Page - Epreuve Finale
 */
?>
<?php $page404_titre = get_theme_mod('page404_titre', 'Default Title'); ?>
<?php $page404_message = get_theme_mod('page404_message', 'Default Title'); ?>
<?php $page404_background = get_theme_mod('page404_background', 'Default Title'); ?>
<?php $page404_cta_text = get_theme_mod('page404_cta_text', 'Default Title'); ?>
<section class="page404" style="background-image: url(<?php echo $page404_background ?>);">
    <style>
        .page404_couleur li{
            background-color: <?php echo get_theme_mod('page404_couleur', '#000000') ?>;
            list-style-type: none;
            color: #FFFFFF;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            text-align: center;
        }
    </style>
    <div class="global page404 center">
        <div class="page404__content">
            <h1 class="page404__titre">
            <?php echo $page404_titre ?>
        </h1>
        <p class="page404__message center">
            <?php echo $page404_message ?>
        </p>
        
        <div class="page404__cta">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="page404__button"><?php echo $page404_cta_text ?></a>
        </div>
    </div>
 <div class="menu404">
 <?php
                wp_nav_menu(array(
                    'theme_location' => '404-menu',
                    'menu' => 'menu-404',
                    'container' => 'div',
                    'menu_class' => 'page404_couleur',
                    'container_aria_label' => 'Menu 404'
                ));
                ?>
        


    </div>
    <div><?php get_search_form(); ?></div>
 </div>
    
</section>