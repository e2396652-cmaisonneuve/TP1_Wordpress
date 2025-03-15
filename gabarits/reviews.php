<section class="testimonials-section">
    <div class="container">
        <div class="testimonials-carousel">
            <div class="carousel-track">
                <?php
                // Argumentos para buscar os reviews
                $args = array(
                    'post_type' => 'reviews', // Tipo de post personalizado
                    'posts_per_page' => 8, // Número de reviews a serem exibidos
                );

                // Query para buscar os reviews
                $reviews_query = new WP_Query($args);

                // Verifica se há reviews
                if ($reviews_query->have_posts()) :
                    while ($reviews_query->have_posts()) : $reviews_query->the_post();
                ?>
                        <div class="testimonial">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="testimonial-avatar" />
                            <?php endif; ?>
                            <h3 class="client-name"><?php the_title(); ?></h3> <!-- Nome do autor (título do post) -->
                            <div class="client-review">
                                <?php the_content(); ?> <!-- Texto do review (conteúdo do post) -->
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata(); // Reseta a query
                else :
                    // Mensagem caso não haja reviews
                    echo '<p>No reviews found.</p>';
                endif;
                ?>
            </div>
        </div>
        <!-- Botões de Navegação do Carrossel -->
        <button class="carousel-button prev" aria-label="Anterior">&#10094;</button>
        <button class="carousel-button next" aria-label="Próximo">&#10095;</button>
    </div>
</section>