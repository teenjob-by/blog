<form class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="label-search">
        <span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'coblog' ); ?></span>
        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'coblog' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'coblog' ); ?>" />
    </label>
    <button class="search-button" type="submit"><i class="cb-font-search"></i><span class="screen-reader-text"><?php echo esc_html_x( 'Search', 'submit button', 'coblog' ); ?></span></button>
    <button class="coblog-search-close"><i class="cb-font-cancel"></i></button>
</form>
