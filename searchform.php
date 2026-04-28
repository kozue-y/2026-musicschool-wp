<form class="p-widget__search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
    <label class="p-widget__search-label">
        <input type="search" name="s" placeholder="検索ワード" class="p-widget__search-input"
            value="<?php echo get_search_query(); ?>">
    </label>
    <button type="submit" class="p-widget__search-button" aria-label="検索">
        <span class="p-widget__search-icon">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon-search.svg" alt="検索">
        </span>
    </button>
</form>