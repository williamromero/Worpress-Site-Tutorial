<?
  function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'main_css', get_stylesheet_directory_uri() . '/css/style.css', array(), '1.1', 'all' );
    // wp_enqueue_style( 
  }
  add_action( 'wp_enqueue_scripts', 'theme_styles');

  function theme_js() {
    global $wp_scripts;
    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js');
    wp_enqueue_script( 'font_awesome', 'https://use.fontawesome.com/fdcb798443.js');    
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.1', false );
  }
  add_action( 'wp_enqueue_scripts', 'theme_js');
?>
