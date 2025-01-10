<?php
/**
 * Timber starter-theme
 * https://github.com/timber/starter-theme
 */

// Load Composer dependencies.
require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/src/StarterSite.php';

Timber\Timber::init();

// Sets the directories (inside your theme) to find .twig files.
Timber::$dirname = [ 'templates', 'views' ];

new StarterSite();

add_filter('timber/context', function ($context) {
    
    global $paged;
    
    if (!isset($paged) || !$paged) {
        $paged = 1;
    }
    
    $context['menu'] = Timber::get_menu('Main Menu');
    $context['options'] = get_fields('option');
    $context['is_front_page'] = is_front_page();
    
    return $context;

} );
