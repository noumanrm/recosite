<?php


// helper to check if the current page is the login screen
function is_login_page() {
    return !strncmp($_SERVER['REQUEST_URI'], '/wp-login.php', strlen('/wp-login.php'));
}


// deregister styles  & setup cache
add_action('wp_print_styles', 'ogk_deregister_styles', 100);
function ogk_deregister_styles() {

    if ( !is_admin() ) :

        global $theme_setup;
        global $wp_styles;

        if ( !is_user_logged_in() && !is_login_page() ) {

            if ( $theme_setup['disable_dash_icon_styles'] ) :
                wp_deregister_style('dashicons');
            endif;

            if ( $theme_setup['disable_admin_bar_styles'] ) :
                wp_deregister_style('admin-bar');
            endif;

        }

        if ( $theme_setup['disable_block_library'] ) :
            wp_deregister_style('wp-block-library');
        endif;

    endif;

}

/**
 *  Reusable Sections
 *
 *  The function that grabs all section parts from the sections folder
 */
function ogk_get_reusable_sections() {
    $files = glob(get_template_directory() . '/sections/*');

    foreach ($files as $file) {
        $filename = basename($file, '.php');
        $file_str_name = str_replace('section-', '', $filename);
        $file_layout_name = str_replace('-', '_', $file_str_name);
        $file_layout_name .= '_section';

        if (get_row_layout() == $file_layout_name ) {
            get_template_part('sections/section', $file_str_name);
        }
    }
}

/**
 *  OGK Button
 *
 *  The function that renders a button
 * @param string $class
 * @param bool $download
 * @param string $link_selector
 * @param string $text_selector
 *
 * @return string
 */
function ogk_button( $class, $download = false, $link_selector = 'button_link', $text_selector = 'button_text' ) {
    ob_start(); ?>
    <div class="btn-wrap">
        <a href="<?= get_sub_field($link_selector) ?>" class="<?= $class ?>"<?php if($download == true): ?> download<?php endif; ?>><?= get_sub_field($text_selector) ?></a>
    </div>
    <?php echo ob_get_clean();
}


/**
 *   Create ACF options pages
 */
// ACF option pages
if ( function_exists( 'acf_add_options_page' ) ) {

    acf_add_options_page( array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug'  => 'site-settings',
        'capability' => 'edit_posts',
        'redirect'   => false
    ) );

}




/** =========================================================================================== **/
/**
 *  THEMED LOGIN PAGE
 */
function custom_login() { ?>
    <style type="text/css">
        body {
            background-color: #11090B !important;
            color: #222 !important;
        }

        .login .message, .login .success, .login #login_error {
            background-color: #eee !important;
            color: #11090B;
            border-left-color: #999 !important;
        }

        #login form {
            background: #eee;
        }

        form .submit input {
            background: #11090B !important;
            color: #fff !important;
            box-shadow: none !important;
            text-shadow: none !important;
            border-radius: 0 !important;
            border: none !important;
            text-transform: uppercase;
            font-weight: 700;

        }

        form .submit input:hover {
            background: #fff !important;
            color: #11090B !important;
            border: 2px solid #ddd !important;
        }

        #login h1 a, .login h1 a {
            background-image: url(<?= get_template_directory_uri() ?>/images/OGK_Logo_White.svg);
            height: 65px;
            width: 320px;
            background-size: 320px 65px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }

        #login path {
            fill: #000;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts', 'custom_login' );

/** =========================================================================================== **/
/**
 * @return string|void
 * Login Logo to redirect to homepage
 */
function my_login_logo_url() {
    return home_url();
}

add_filter( 'login_headerurl', 'my_login_logo_url' );

/** =========================================================================================== **/

add_theme_support( 'menus' ); // add menus
add_theme_support( 'post-thumbnails' ); // add featured iamges
add_post_type_support( 'page', 'excerpt' ); // add excerpts

/** =========================================================================================== **/

/**
 * REGISTER MAIN MENU
 */
function register_my_menu() {
    register_nav_menus(
        array(
            'main-menu'   => __( 'Main Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}

add_action( 'init', 'register_my_menu' );

/**
 * @param $ulclass
 *
 * @return string|string[]|null
 */
function add_menuclass( $ulclass ) {
    return preg_replace( '/<a/', '<a class="menu-item"', $ulclass, - 1 );
}

add_filter( 'wp_nav_menu', 'add_menuclass' );

/** =========================================================================================== **/

/**
 * Allow shortcodes in menu items
 *
 * @param $items
 * @param $args
 *
 * @return string
 */
function wp_nav_menu_items( $items, $args ) {
    $items = do_shortcode( $items );

    return $items;
}

add_filter( 'wp_nav_menu_items', 'wp_nav_menu_items', 10, 2 );

/** =========================================================================================== **/

/**
 * add SVG to allowed file uploads
 *
 * @param $file_types
 *
 * @return array
 */
function add_file_types_to_uploads( $file_types ) {

    $new_filetypes        = array();
    $new_filetypes['svg'] = 'image/svg+xml';
    $file_types           = array_merge( $file_types, $new_filetypes );

    return $file_types;
}

add_action( 'upload_mimes', 'add_file_types_to_uploads' );

/** =========================================================================================== **/

/**
 * OGKlip function
 * Missy's function for clipping a string to a desired length.
 */
function ogklip( $string, $width = 100 ) {
    $wrapped = wordwrap( $string, $width );
    $lines   = explode( "\n", $wrapped );
    $new_str = $lines[0] . '...';

    return $new_str;
}
/** =========================================================================================== **/

/** 
 * CPT Our Team
 * **/
function my_custom_post_team() {
    $labels = array(
      'name'               => _x( 'Our Team', 'post type general name' ),
      'singular_name'      => _x( 'Our Team', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'team' ),
      'add_new_item'       => __( 'Add New Team Member' ),
      'edit_item'          => __( 'Edit Team Member' ),
      'new_item'           => __( 'New Our Team' ),
      'all_items'          => __( 'All Our Team' ),
      'view_item'          => __( 'View Our Team' ),
      'search_items'       => __( 'Search Our Team' ),
      'not_found'          => __( 'No Our Team found' ),
      'not_found_in_trash' => __( 'No Our Team found in the Trash' ), 

      'menu_name'          =>  __( 'Our Team' )
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'Our Team', $args ); 
  }
  add_action( 'init', 'my_custom_post_team' );

  function my_taxonomies_team() {
    $labels = array(
      'name'              => _x( 'Our Team Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Our Team Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Our Team Categories' ),
      'all_items'         => __( 'All Our Team Categories' ),
      'parent_item'       => __( 'Parent Our Team Category' ),
      'parent_item_colon' => __( 'Parent Our Team Category:' ),
      'edit_item'         => __( 'Edit Our Team Category' ), 
      'update_item'       => __( 'Update Our Team Category' ),
      'add_new_item'      => __( 'Add New Our Team Category' ),
      'new_item_name'     => __( 'New Our Team Category' ),
      'menu_name'         => __( 'Our Team Categories' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => true,
    );
    register_taxonomy( 'team_category', 'ourteam', $args );
  }
  add_action( 'init', 'my_taxonomies_team', 0 );

  /** CPT Addiction Treatment **/

  function my_custom_addiction_treatment() {
    $labels = array(
      'name'               => _x( 'Addiction Treatment', 'post type general name' ),
      'singular_name'      => _x( 'Addiction Treatment', 'post type singular name' ),
      'add_new'            => _x( 'Addiction Treatment', 'team' ),
      'add_new_item'       => __( 'Add New Addiction Treatment' ),
      'edit_item'          => __( 'Edit Addiction Treatment' ),
      'new_item'           => __( 'New Addiction Treatment' ),
      'all_items'          => __( 'All Addiction Treatment' ),
      'view_item'          => __( 'View Addiction Treatment' ),
      'search_items'       => __( 'Search Addiction Treatment' ),
      'not_found'          => __( 'No Addiction Treatment found' ),
      'not_found_in_trash' => __( 'No Addiction Treatment found in the Trash' ), 

      'menu_name'          =>  __( 'Addiction Treatment' )
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'Addiction Treatment', $args ); 
  }
  add_action( 'init', 'my_custom_addiction_treatment' );


  /**CPT Therapeutic Excursions **/
  function my_custom_post_therapeutic() {
    $labels = array(
      'name'               => _x( 'Therapeutic Excursions', 'post type general name' ),
      'singular_name'      => _x( 'Therapeutic Excursions', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'Therapeutic Excursions' ),
      'add_new_item'       => __( 'Add New Therapeutic Excursions' ),
      'edit_item'          => __( 'Edit Therapeutic Excursions' ),
      'new_item'           => __( 'New Therapeutic Excursions' ),
      'all_items'          => __( 'All Therapeutic Excursions' ),
      'view_item'          => __( 'View Therapeutic Excursions' ),
      'search_items'       => __( 'Search Therapeutic Excursions' ),
      'not_found'          => __( 'No Therapeutic Excursions found' ),
      'not_found_in_trash' => __( 'No Therapeutic Excursions found in the Trash' ), 

      'menu_name'          =>  __( 'Therapeutic Excursions' )
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'Therapeutic', $args ); 
  }
  add_action( 'init', 'my_custom_post_therapeutic' );

  /** CPT Group Therapy  **/
  function my_custom_post_therapy() {
    $labels = array(
      'name'               => _x( 'Group Therapy', 'post type general name' ),
      'singular_name'      => _x( 'Group Therapy', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'Group Therapy' ),
      'add_new_item'       => __( 'Add New Group Therapy' ),
      'edit_item'          => __( 'Edit Group Therapy' ),
      'new_item'           => __( 'New Group Therapy' ),
      'all_items'          => __( 'All Group Therapy' ),
      'view_item'          => __( 'View Group Therapy' ),
      'search_items'       => __( 'Search Group Therapy' ),
      'not_found'          => __( 'No Group Therapy found' ),
      'not_found_in_trash' => __( 'No Group Therapy found in the Trash' ), 

      'menu_name'          =>  __( 'Group Therapy' )
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'Group Therapy', $args ); 
  }
  add_action( 'init', 'my_custom_post_therapy' );

  /* CPT ALUMNI EVENTS */

  function my_custom_post_events() {
    $labels = array(
      'name'               => _x( 'Alumni Events', 'post type general name' ),
      'singular_name'      => _x( 'Alumni Event', 'post type singular name' ),
      'add_new'            => _x( 'Add New', 'Alumni Events' ),
      'add_new_item'       => __( 'Add New Alumni Events' ),
      'edit_item'          => __( 'Edit Alumni Events' ),
      'new_item'           => __( 'New Alumni Events' ),
      'all_items'          => __( 'All Alumni Events' ),
      'view_item'          => __( 'View Alumni Events' ),
      'search_items'       => __( 'Search Alumni Events' ),
      'not_found'          => __( 'No Alumni Events found' ),
      'not_found_in_trash' => __( 'No Alumni Events found in the Trash' ), 

      'menu_name'          =>  __( 'Alumni Events' )
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
      'has_archive'   => true,
    );
    register_post_type( 'Alumni events', $args ); 
  }
  add_action( 'init', 'my_custom_post_events' );


    /* CPT OUR PRPERTIES */

    function my_custom_post_properties() {
        $labels = array(
          'name'               => _x( 'Our Properties', 'post type general name' ),
          'singular_name'      => _x( 'Our Properties', 'post type singular name' ),
          'add_new'            => _x( 'Add New', 'Our Properties' ),
          'add_new_item'       => __( 'Add New Our Properties' ),
          'edit_item'          => __( 'Edit Our Properties' ),
          'new_item'           => __( 'New Our Properties' ),
          'all_items'          => __( 'All Our Properties' ),
          'view_item'          => __( 'View Our Properties' ),
          'search_items'       => __( 'Search Our Properties' ),
          'not_found'          => __( 'No Our Properties found' ),
          'not_found_in_trash' => __( 'No Our Properties found in the Trash' ), 
    
          'menu_name'          =>  __( 'Our Properties' )
        );
        $args = array(
          'labels'        => $labels,
          'public'        => true,
          'menu_position' => 5,
          'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
          'has_archive'   => true,
          'hierarchical'        => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'exclude_from_search' => true,
          'publicly_queryable'  => true,
          'capability_type'     => 'page',
          'show_in_rest'        => true,
        );
        register_post_type( 'Our Properties', $args ); 
      }
      add_action( 'init', 'my_custom_post_properties' );
      function my_taxonomies_properties() {
        $labels = array(
          'name'              => _x( 'Our Properties Categories', 'taxonomy general name' ),
          'singular_name'     => _x( 'Our Properties Category', 'taxonomy singular name' ),
          'search_items'      => __( 'Search Our Properties Categories' ),
          'all_items'         => __( 'All Our Properties Categories' ),
          'parent_item'       => __( 'Parent Our Properties Category' ),
          'parent_item_colon' => __( 'Parent Our Properties Category:' ),
          'edit_item'         => __( 'Edit Our Properties Category' ), 
          'update_item'       => __( 'Update Our Properties Category' ),
          'add_new_item'      => __( 'Add New Our Property Category' ),
          'new_item_name'     => __( 'New Our Properties Category' ),
          'menu_name'         => __( 'Our Properties Categories' ),
        );
        $args = array(
          'labels' => $labels,
          'hierarchical' => true,
          'show_ui' => true,
          'show_in_rest' => true,
          'show_admin_column' => true,
          'query_var' => true
        );
        register_taxonomy( 'properties_category', 'ourproperties', $args );
      }
      add_action( 'init', 'my_taxonomies_properties', 0 );



      function sm_custom_meta() {
        add_meta_box( 'sm_meta', __( 'Featured Posts', 'sm-textdomain' ), 'sm_meta_callback', 'post' );
    }
    function sm_meta_callback( $post ) {
        $featured = get_post_meta( $post->ID );
        ?>
     
      <p>
        <div class="sm-row-content">
            <label for="meta-checkbox">
                <input type="checkbox" name="meta-checkbox" id="meta-checkbox" value="yes" <?php if ( isset ( $featured['meta-checkbox'] ) ) checked( $featured['meta-checkbox'][0], 'yes' ); ?> />
                <?php _e( 'Featured this post', 'sm-textdomain' )?>
            </label>
            
        </div>
    </p>
     
        <?php
    }
    add_action( 'add_meta_boxes', 'sm_custom_meta' );

    /**
 * Saves the custom meta input
 */
function sm_meta_save( $post_id ) {
 
  // Checks save status
  $is_autosave = wp_is_post_autosave( $post_id );
  $is_revision = wp_is_post_revision( $post_id );
  $is_valid_nonce = ( isset( $_POST[ 'sm_nonce' ] ) && wp_verify_nonce( $_POST[ 'sm_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

  // Exits script depending on save status
  if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
      return;
  }

// Checks for input and saves
if( isset( $_POST[ 'meta-checkbox' ] ) ) {
  update_post_meta( $post_id, 'meta-checkbox', 'yes' );
} else {
  update_post_meta( $post_id, 'meta-checkbox', '' );
}

}
add_action( 'save_post', 'sm_meta_save' );


/**
 * WordPress Breadcrumbs
 */
function tsh_wp_custom_breadcrumbs() {

  $separator              = '/';
  $breadcrumbs_id         = 'tsh_breadcrumbs';
  $breadcrumbs_class      = 'tsh_breadcrumbs';
  $home_title             = esc_html__('Home', 'your-domain');

  // Add here you custom post taxonomies
  $tsh_custom_taxonomy    = 'product_cat';

  global $post,$wp_query;
     
  // Hide from front page
  if ( !is_front_page() ) {
     
      echo '<ul id="' . $breadcrumbs_id . '" class="' . $breadcrumbs_class . '">';
         
      // Home
      echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
      echo '<li class="separator separator-home"> ' . $separator . ' </li>';
         
      if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
            
          echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title('', false) . '</strong></li>';
            
      } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
            
          // For Custom post type
          $post_type = get_post_type();
            
          // Custom post type name and link
          if($post_type != 'post') {
                
              $post_type_object = get_post_type_object($post_type);
              $post_type_archive = get_post_type_archive_link($post_type);
            
              echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
              echo '<li class="separator"> ' . $separator . ' </li>';
            
          }
            
          $custom_tax_name = get_queried_object()->name;
          echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
            
      } else if ( is_single() ) {
            
          $post_type = get_post_type();

          if($post_type != 'post') {
                
              $post_type_object = get_post_type_object($post_type);
              $post_type_archive = get_post_type_archive_link($post_type);
            
              echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
              echo '<li class="separator"> ' . $separator . ' </li>';
            
          }
            
          // Get post category
          $category = get_the_category();
           
          if(!empty($category)) {
            
              // Last category post is in
              $last_category = $category[count($category) - 1];
                
              // Parent any categories and create array
              $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
              $cat_parents = explode(',',$get_cat_parents);
                
              // Loop through parent categories and store in variable $cat_display
              $cat_display = '';
              foreach($cat_parents as $parents) {
                  $cat_display .= '<li class="item-cat">'.$parents.'</li>';
                  $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
              }
           
          }

          $taxonomy_exists = taxonomy_exists($tsh_custom_taxonomy);
          if(empty($last_category) && !empty($tsh_custom_taxonomy) && $taxonomy_exists) {
                 
              $taxonomy_terms = get_the_terms( $post->ID, $tsh_custom_taxonomy );
              $cat_id         = $taxonomy_terms[0]->term_id;
              $cat_nicename   = $taxonomy_terms[0]->slug;
              $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $tsh_custom_taxonomy);
              $cat_name       = $taxonomy_terms[0]->name;
             
          }
            
          // If the post is in a category
          if(!empty($last_category)) {
              echo $cat_display;
              echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                
          // Post is in a custom taxonomy
          } else if(!empty($cat_id)) {
                
              echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
              echo '<li class="separator"> ' . $separator . ' </li>';
              echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
            
          } else {
                
              echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                
          }
            
      } else if ( is_category() ) {
             
          // Category page
          echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
             
      } else if ( is_page() ) {
             
          // Standard page
          if( $post->post_parent ){
                 
              // Get parents 
              $anc = get_post_ancestors( $post->ID );
                 
              // Get parents order
              $anc = array_reverse($anc);
                 
              // Parent pages
              if ( !isset( $parents ) ) $parents = null;
              foreach ( $anc as $ancestor ) {
                  $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                  $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
              }
                 
              // Render parent pages
              echo $parents;
                 
              // Active page
              echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                 
          } else {
                 
              // Just display active page if not parents pages
              echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                 
          }
             
      } else if ( is_tag() ) { // Tag page
             
          // Tag information
          $term_id        = get_query_var('tag_id');
          $taxonomy       = 'post_tag';
          $args           = 'include=' . $term_id;
          $terms          = get_terms( $taxonomy, $args );
          $get_term_id    = $terms[0]->term_id;
          $get_term_slug  = $terms[0]->slug;
          $get_term_name  = $terms[0]->name;
             
          // Return tag name
          echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
         
      } elseif ( is_day() ) { // Day archive page
             
          // Year link
          echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
          echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
          // Month link
          echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
          echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
             
          // Day display
          echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
             
      } else if ( is_month() ) { // Month Archive
             
          // Year link
          echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
          echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
             
          // Month display
          echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
             
      } else if ( is_year() ) { // Display year archive

          echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
             
      } else if ( is_author() ) { // Author archive
             
          // Get the author information
          global $author;
          $userdata = get_userdata( $author );
             
          // Display author name
          echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
         
      } else if ( get_query_var('paged') ) {
             
          // Paginated archives
          echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
             
      } else if ( is_search() ) {
         
          // Search results page
          echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
         
      } elseif ( is_404() ) {
             
          // 404 page
          echo '<li>' . 'Error 404' . '</li>';
      }

      echo '</ul>';  
  }
}