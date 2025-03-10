<?php

/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="site__main global">
    <section class="recherche__section">
        <!-- Afficher le nombre de résultats et la requête -->
        <?php
        global $wp_query;
        $total_results = $wp_query->found_posts;
        $search_query = get_search_query();
        ?>
        <h3>Résultats de recherche pour : "<?php echo esc_html($search_query); ?>"
            <br><span class="resultats__recherche"><?php echo $total_results; ?> résultat(s) trouvé(s)</span>
        </h3>

        <!-- Liste des résultats -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('gabarits/carte'); ?>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="category__pagination">
                <?php $args = array(
                    'format'    => 'page/%#%/',
                    'prev_text' => '← Précédent',
                    'next_text' => 'Suivant →'
                );
                the_posts_pagination($args); ?>
            </div>
        <?php else : ?>
            <!-- Cas "aucun résultat" -->
            <div class="recherche__aucun-resultat">
                <h3>Aucun résultat trouvé</h3>
                <p>Désolé, rien ne correspond à "<?php echo esc_html($search_query); ?>". Essayez d’autres mots-clés !</p>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>