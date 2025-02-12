<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.5.1' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.5.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

define( 'ASTRA_PRO_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'dashboard', 'free-theme', 'upgrade-now' ) );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', astra_get_pro_url( 'https://wpastra.com/pro/', 'customizer', 'free-theme', 'upgrade' ) );

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-surecart.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymous functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';


/**
 * **************************
 * DEBUT Custom code Armelle
 * **************************
 */

/** Créer la taxonomie personnalisé Statut **/
/*function create_status_taxonomy() {
    $labels = array(
        'name'              => _x('Statuts', 'taxonomy general name'),
        'singular_name'     => _x('Statut', 'taxonomy singular name'),
        'search_items'      => __('Chercher un statut'),
        'all_items'         => __('Tous les statuts'),
        'edit_item'         => __('Editer le statut'),
        'update_item'       => __('Mettre à jour le statut'),
        'add_new_item'      => __('Ajouter un statut'),
        'new_item_name'     => __('Nouveau status'),
        'menu_name'         => __('Statuts'),
    );

    $args = array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'cat-status'),
    );

    register_taxonomy('cat-status', 'chat', $args);
}
add_action('init', 'create_status_taxonomy');*/

// Fonction pour générer le formulaire ACF dans un shortcode
function custom_acf_form_add_cat_shortcode() {
    // Vérifiez si ACF est actif
    if (function_exists('acf_form')) {
        ob_start();
        acf_form(array(
            'post_id' => 'new_post',
            'post_title' => $fields['nom_du_chat']['value'],
            'post_content' => $fields['description']['value'],
            'new_post' => array(
                'post_type' => 'chat',
                'post_status' => 'publish',
            ),
            'submit_value' => 'Soumettre le formulaire'
        ));
        return ob_get_clean();
    } else {
        // ACF n'est pas actif, affichez un message ou une alternative
        return 'Veuillez activer ACF pour afficher le formulaire.';
    }
}
add_shortcode('acf_form_add_cat_shortcode', 'custom_acf_form_add_cat_shortcode');

/***
 * 
 */
function load_more_cats($statusChat) {
    $page = $_POST['page'];
    $args = array(
        'post_type' => 'chat',
        'meta_query' => array(
            array(
                'key' => 'status',
                'value' => $statusChat,
                'compare' => '=',
            ),
        ),
        'paged' => $page,
    );

    $query = new WP_Query($args);

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <div class="chat-item">
                <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>">
                <!-- Ajoutez ici d'autres informations que vous souhaitez afficher -->
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'Aucun chat de cette catégorie. Il y a sans doute un bug, soyez patient.';
    endif;

    $data['html'] = ob_get_clean();
    $data['has_more'] = $query->max_num_pages > $page;

    wp_send_json_success($data);
}

add_action('wp_ajax_load_more_cats', 'load_more_cats', 10, 1);
add_action('wp_ajax_nopriv_load_more_cats', 'load_more_cats', 10, 1);


// Ajouter des colonnes personnalisées à la liste d'administration
function ajouter_colonnes_personnalisees($columns) {
    $columns['sexe'] = 'Sexe';
	$columns['age'] = 'Age';
	$columns['numero'] = 'N°';
	$columns['status_cat'] = 'Statut';
	$columns['fa'] = 'FA';
    return $columns;
}
add_filter('manage_chat_posts_columns', 'ajouter_colonnes_personnalisees');

// Afficher les données dans les colonnes personnalisées
function afficher_donnees_colonnes_personnalisees($column, $post_id) {
    switch ($column) {
        case 'sexe':
            $valeur_champ = get_field('genre', $post_id);
            echo esc_html($valeur_champ);
            break;
		case 'age':
            $date_naissance_acf = get_field('date_de_naissance', $post_id);
			$date_naissance = new DateTime($date_naissance_acf);
			$aujourd_hui = new DateTime();
			$difference = $aujourd_hui->diff($date_naissance);

			if ($difference->y >= 1) {
				echo esc_html($difference->y . ' ans');
			} else {
				echo esc_html($difference->m . ' mois');
			}
            break;
		case 'numero':
            $valeur_champ = get_field('numero_chat_asso', $post_id);
            echo esc_html($valeur_champ);
            break;
		case 'status_cat':
            $id_statut = get_field('statut_du_chat', $post_id);
			if($id_statut == 23) {
				$valeur_champ = "Adopté";
			}
			else if($id_statut == 22) {
				$valeur_champ = "A l'adoption";
				$valeur_champ .= (' - ' . get_field('statut_dadoption', $post_id));
			}
			else if($id_statut == 28) {
				$valeur_champ = "Décédé";
			}
			else if($id_statut == 25) {
				$valeur_champ = "En FA";
			}
			else if($id_statut == 26) {
				$valeur_champ = "FALD";
			}
			else if($id_statut == 27) {
				$valeur_champ = "Perdu";
			}
            echo esc_html($valeur_champ);
            break;
		case 'fa':
			$fa_array = get_field('fa', $post_id);
			
            if ($fa_array && is_array($fa_array) && count($fa_array) > 0) {
                $dernier_element = end($fa_array);

                if (isset($dernier_element['famille_daccueil'])) {
                    $famille_daccueil = $dernier_element['famille_daccueil'];
                    echo esc_html(get_the_title($famille_daccueil));
                } else {
                    // Gérer le cas où 'famille_daccueil' n'est pas défini dans le dernier élément
                    echo '<span color="text-danger">Aucune FA définie</span>';
                }
            	
			} else {
                // Gérer le cas où $fa_array est vide
                echo '<span color="text-danger">Aucune FA définie</span>';
            }
			
            break;
    }
}
add_action('manage_chat_posts_custom_column', 'afficher_donnees_colonnes_personnalisees', 10, 2);

/////////////////////////////////////////////
//Gestion des filtre sur les articles chats
//////////////////////////////////////////////
//
//// Fonction pour ajouter les filtres
function ajouter_filtres_custom() {
    global $typenow;

    // Vérifier si nous sommes sur la page d'administration des articles "chats"
    if ($typenow === 'chat') {

        // Ajouter un filtre pour le champ ACF "Statut"
        ajouter_filtre_taxonomie('statut_du_chat', 'Filtrer par statut');

        // Ajouter un filtre pour le champ ACF "Genre"
        //ajouter_filtre_champ('genre', 'Filtrer par genre');
    }
}

// Action pour afficher les filtres
add_action('restrict_manage_posts', 'ajouter_filtres_custom');

// Fonction générique pour ajouter un filtre de taxonomie ACF
function ajouter_filtre_taxonomie($nom_champ, $libelle_filtre) {
    $terms = get_terms(array(
        'taxonomy' => $nom_champ,
        'hide_empty' => false,
    ));

    if ($terms) {
        echo '<select name="filtre_' . esc_attr($nom_champ) . '">
            <option value="">' . esc_html($libelle_filtre) . '</option>';
        foreach ($terms as $term) {
            echo '<option value="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</option>';
        }
        echo '</select>';
    }
}

// Fonction générique pour ajouter un filtre de champ ACF
function ajouter_filtre_champ($nom_champ, $libelle_filtre) {
    $valeur_champ = get_field($nom_champ);
    echo '<input type="text" name="filtre_' . esc_attr($nom_champ) . '" placeholder="' . esc_attr($libelle_filtre) . '" value="' . esc_attr($valeur_champ) . '">';
}

// Action pour appliquer les filtres
add_filter('parse_query', 'appliquer_filtres_custom');

// Fonction pour appliquer les filtres
function appliquer_filtres_custom($query) {
    global $pagenow;

    // Vérifier si nous sommes sur la page d'administration des articles "chats"
    if (is_admin() && $pagenow == 'edit.php' && isset($_GET['post_type']) && $_GET['post_type'] == 'chat') {

        // Ajouter la taxonomie pour le champ ACF "Statut"
        appliquer_filtre_acf_taxonomie('statut_du_chat', 'taxonomy_associée_au_statut_du_chat');

        // Ajouter la taxonomie pour le champ ACF "Genre"
        //appliquer_filtre_acf_champ('genre');
    }
}

// Fonction générique pour appliquer un filtre de taxonomie ACF
function appliquer_filtre_acf_taxonomie($nom_champ, $taxonomy_associée) {
    if (isset($_GET['filtre_' . $nom_champ]) && $_GET['filtre_' . $nom_champ] != '') {
        $query->query_vars['tax_query'][] = array(
            'taxonomy' => $taxonomy_associée,
            'field' => 'slug',
            'terms' => $_GET['filtre_' . $nom_champ],
        );
    }
}

// Fonction générique pour appliquer un filtre de champ ACF
function appliquer_filtre_acf_champ($nom_champ) {
    if (isset($_GET['filtre_' . $nom_champ]) && $_GET['filtre_' . $nom_champ] != '') {
        $query->query_vars['meta_query'][] = array(
            'key' => $nom_champ,
            'value' => $_GET['filtre_' . $nom_champ],
            'compare' => '=',
        );
    }
}


function restreindre_acces_page_utilisateur_connecte() {
    // Vérifiez si l'utilisateur n'est pas connecté et que nous sommes sur la page spécifique
    if (!is_user_logged_in() && is_page('ajouter-un-chat')) {
        // Redirigez l'utilisateur vers la page de connexion
        wp_redirect(wp_login_url());
        exit;
    }
}

// Hook pour déclencher la fonction sur le chargement de la page
add_action('template_redirect', 'restreindre_acces_page_utilisateur_connecte');

function custom_wp_nav_menu_args($args) { 
  if( $args['theme_location'] == 'primary' || $args['theme_location'] == 'principal' ) {
    if( is_user_logged_in() ) { 
      $args['menu'] = 'menu-gestionnaire';
    }
  }
  return $args;
}
add_filter( 'wp_nav_menu_args', 'custom_wp_nav_menu_args' );





/**** SUPPRIME ENTIEREMENT LE SYSTEME DE COMMENTAIRES ****/
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
     
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }
 
    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
 
    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});
 
// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
 
// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);
 
// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});
 
// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
