<?php 

// Habilito thumbnails
add_theme_support( 'post-thumbnails' );

// Las taxonomias las puedo llamar asi:
// is_tax('marca_coche',array('seat','bmw')); 
// o de esta manera --(is_tax('tipo', 'mototaxi')){} 

add_action('init', 'taxonomias_propias',0);
function taxonomias_propias() {

	register_taxonomy(
		'marca',
		'post', 
		array(
			'hierarchical' => true,
			'has_archive' => true,
			'label' => __('Marca del producto'),
			'query_var' => true,
			'show_ui' => true,
			'sort' => true,
			'args' => array('orderby' => 'term_order'),
			'rewrite' => array('slug' => 'marca')
		)
	);	

	register_taxonomy(
		'tipo',
		'post',
		array(
			'hierarchical' => true,
			'has_archive' => true,
			'label' => __('Moto tipo'),
			'query_var' => true,
			'show_ui' => true,
			'sort' => true,
			'args' => array('orderby' => 'term_order'),
			'rewrite' => array('slug' => 'tipo')
		)
	);
}


// Desactivo llamado de funcion wordpress que convierte entities 
// html y el jquery que trae integrado para usar el mio propio solo 
// si no estoy en el admin

add_action( 'init', 'desactivoScripts' );
function desactivoScripts() {
	if( !is_admin()){
		wp_deregister_script('jquery');
		wp_deregister_script( 'jquery-ui-core' );
		wp_deregister_script('jquery-datepicker');
	}
	wp_deregister_script('l10n');
}

// Desactivo style de recent comments
function remove_recent_comments_style() {  
    global $wp_widget_factory;  
    remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );  
}  
add_action( 'widgets_init', 'remove_recent_comments_style' ); 

// Deshabilito manifiesto xml del head
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');


// Deshabilito feed 

function disable_all_feeds() {
   wp_die( __('Lo siento, nuestro contenido no está disponible mediante RSS. Por favor, visita <a href="'. get_bloginfo('url') .'">la web</a> para leerla') );
}

add_action('do_feed', 'disable_all_feeds', 1);
add_action('do_feed_rdf', 'disable_all_feeds', 1);
add_action('do_feed_rss', 'disable_all_feeds', 1);
add_action('do_feed_rss2', 'disable_all_feeds', 1);
add_action('do_feed_atom', 'disable_all_feeds', 1);

add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

// Linea que remueve el mensaje de generado con wordpress y la version*/
remove_action('wp_head', 'wp_generator');

// Agrego jquery al administrador de wordpress ya que arriba deshabilite
// el original para usar el de google
function cargaJqueryAdmin() {
	if (is_admin()) {
	    wp_deregister_script( 'jqueryAdmin' );
	    wp_register_script( 'jqueryAdmin', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js');
	    wp_enqueue_script( 'jqueryAdmin' );
	}
}  
// Quitar barra de admin
add_filter( 'show_admin_bar', '__return_false' );

// Agrega nofollow a los enlaces desde el contenido a otras paginas
add_filter('the_content', 'wp_nofollow');
function wp_nofollow($content) {
    return preg_replace_callback('/<a[^>]+/', 'inserta_nofollow', $content);
}
function inserta_nofollow($matches) {
    $link = $matches[0];
    $url = get_bloginfo('url');
    if (strpos($link, 'rel') === false) {
        $link = preg_replace("%(href=\S(?!$url))%i", 'rel="nofollow" $1', $link);
    } elseif (preg_match("%href=\S(?!$url)%i", $link)) {
        $link = preg_replace('/rel=\S(?!nofollow)\S*/i', 'rel="nofollow"', $link);
    }
    return $link;
}

// Desactivo el wp-embed.min.js
function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

// Desactivar Emoji script
function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

// Desabilito API REST Json
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

// Desabilitio mensaje previo y siguiente
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// Imagenes
function imagenSrc($tamano = '') {
	$images = get_children( array (
		'post_parent'    => get_the_ID(),
    	'post_type'      => 'attachment',
    	'numberposts'    => 1,
    	'post_mime_type' => 'image'
	));

  	if ($images){
		
  		// Agrego clases personalizadas
		$agrega =  "img-responsive img-fluid";

    	foreach( $images as $image ){
    		if($tamano == 'mini') {
    			//$imagen = wp_get_attachment_image( $image->ID, 'thumbnail',0, $agrega);
    			$imagen = wp_get_attachment_image_src( $image->ID, 'thumbnail');
      		}
      		if($tamano == 'medio'){
      			//$imagen = wp_get_attachment_image( $image->ID, 'medium',0, $agrega);
      			$imagen = wp_get_attachment_image_src( $image->ID, 'medium');
      		}
      		if($tamano == 'grande') {
      			//$imagen = wp_get_attachment_image( $image->ID, 'full',0, $agrega);
      			$imagen = wp_get_attachment_image_src( $image->ID, 'grande');
      		}
      		echo $imagen[0];
    	}
  	}else{
   		
   		echo "/wp-content/themes/Masesa-2016/img/icon-highres.png";
   	}
}

/**
 *  Excluyo paginas específicas de la busqueda por ID
 */
function filter_where($where = '') {
  if ( is_search() ) {
    $exclude = array(34,36,929,934,936);  //aqui ids a excluir comma separated

    for($x=0;$x<count($exclude);$x++){
      $where .= " AND ID != ".$exclude[$x];
    }
  }
  return $where;
}
add_filter('posts_where', 'filter_where');


/**
 * Funcion excluir categorias concretas
 */
function SearchFilter($query) {
if ($query->is_search) { 
$query->set('cat','-19,-5'); //agregar mas separadas con coma
}
return $query; 
}
add_filter('pre_get_posts','SearchFilter');


/**
* Esto me sirve para crear singles por id
*/
define(SINGLE_PATH, TEMPLATEPATH . '/single');

/**
* Filter the single_template with our custom function
*/
add_filter('single_template', 'my_single_template');

/**
* Single template function which will choose our template
*/
function my_single_template($single) {
  global $wp_query, $post;


  /**
  * Checks for single template by ID
  */
  if(file_exists(SINGLE_PATH . '/single-' . $post->ID . '.php'))
    return SINGLE_PATH . '/single-' . $post->ID . '.php';

  /**
  * Checks for single template by category
  * Check by category slug and ID
  */
  foreach((array)get_the_category() as $cat) :

    if(file_exists(SINGLE_PATH . '/single-cat-' . $cat->slug . '.php'))
      return SINGLE_PATH . '/single-cat-' . $cat->slug . '.php';

    elseif(file_exists(SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php'))
      return SINGLE_PATH . '/single-cat-' . $cat->term_id . '.php';

  endforeach;

  /**
  * Checks for single template by tag
  * Check by tag slug and ID
  */
  $wp_query->in_the_loop = true;
  foreach((array)get_the_tags() as $tag) :

    if(file_exists(SINGLE_PATH . '/single-tag-' . $tag->slug . '.php'))
      return SINGLE_PATH . '/single-tag-' . $tag->slug . '.php';

    elseif(file_exists(SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php'))
      return SINGLE_PATH . '/single-tag-' . $tag->term_id . '.php';

  endforeach;
  $wp_query->in_the_loop = false;


  /**
  * Checks for default single post files within the single folder
  */
  if(file_exists(SINGLE_PATH . '/single.php'))
    return SINGLE_PATH . '/single.php';

  elseif(file_exists(SINGLE_PATH . '/default.php'))
    return SINGLE_PATH . '/default.php';

    return $single;

}
