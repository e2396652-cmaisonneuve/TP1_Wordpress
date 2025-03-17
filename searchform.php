<form class="recherche" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label for="search-input">
        <input id="search-input" class="recherche__input" type="search" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" aria-label="Champ de recherche" />
    </label>
    <button class="recherche__bouton" type="submit" aria-label="Démarrer la recherche">
        <span class="recherche__icone">Rechercher</span>
    </button>
</form>