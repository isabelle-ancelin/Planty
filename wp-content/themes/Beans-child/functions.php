<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}
;
// Remove the breadcrumb.
add_filter('beans_pre_load_fragment_breadcrumb', '__return_true');


// Fonction pour ajouter le lien "Admin" dans le menu principal
function add_admin_menu_link($items, $args)
{
    // Vérifier si l'utilisateur est connecté en tant qu'administrateur
    if (is_user_logged_in() && current_user_can('administrator')) {
        // Vérifier le nom du menu
        if ($args->theme_location == 'primary') {
            // Ajouter le lien vers l'administration
            $admin_url = get_admin_url();
            $admin_link = '<li><a href="' . $admin_url . '">Admin</a></li>';

            // Rechercher la première occurrence de "</li>" dans $items
            $position = strpos($items, '</li>');

            // Insérer le lien "Admin" après la première balise "</li>"
            $items = substr_replace($items, $admin_link, $position + 5, 0);
        }
    }

    return $items;
}

// Ajouter le filtre pour appliquer la fonction aux éléments du menu
add_filter('wp_nav_menu_items', 'add_admin_menu_link', 10, 2);

