<?php if(!function_exists('dynamic_sidebar')|| !dynamic_sidebar('main-sidebar')):?>

    <div class="sidebar-widget">
        <h4><?php _e('Search','adaptive-framework')?></h4>
        <?php get_search_form(); ?>
    </div>

<?php endif; ?>