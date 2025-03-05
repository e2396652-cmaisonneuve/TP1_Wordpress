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
        <br><span class="resultats__recherche"><?php echo $total_results; ?> résultat(s) trouvé(s)</span></h3>

        <!-- Liste des résultats -->
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
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
            <?php endwhile; ?>

            <!-- Pagination -->
            <nav class="recherche__pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => 'Précédent',
                    'next_text' => 'Suivant',
                    'mid_size'  => 2,
                ));
                ?>
            </nav>
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