<?php

show_admin_bar( false );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
add_filter( 'excerpt_more', function( $more ) {
  return '...';
});

if ( ! function_exists( 'solovki_setup' ) ) :
	function solovki_setup() {
		load_theme_textdomain( 'solovki', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'header' => esc_html__( 'Header Menu', 'solovki' ),
      'language' => esc_html__( 'Language Switcher', 'solovki' ),
		) );
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		add_theme_support( 'custom-background', apply_filters( 'solovki_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support( 'custom-logo', array(
			'height'      => 157,
			'width'       => 118,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'solovki_setup' );

function solovki_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'solovki_content_width', 640 );
}
add_action( 'after_setup_theme', 'solovki_content_width', 0 );

function solovki_widgets_init() {
    register_sidebar(array(
        'name' => __('Header', 'solovki'),
        'id' => 'header_text',
        'description' => __('Текст для header', 'solovki'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="titlewidget">',
        'after_title' => '</h2>'
    ));
}
add_action( 'widgets_init', 'solovki_widgets_init' );

function solovki_scripts() {
	wp_enqueue_style( 'solovki-style', get_stylesheet_uri() );
    wp_enqueue_style('solovki-vendor-css', get_template_directory_uri() . '/libs/css/vendor.min.css', array(), null, false);
    wp_enqueue_style('solovki-common-css', get_template_directory_uri() . '/assets/css/common.min.css', array(), null, false);
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'solovki-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
    wp_enqueue_script( 'solovki-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
    wp_enqueue_script('solovki-vendor-js', get_template_directory_uri() . '/libs/js/vendor.min.js', array( 'jquery' ), null, true);
    wp_enqueue_script('solovki-common-js', get_template_directory_uri() . '/assets/js/common.min.js', array( 'jquery' ), null, true);
    wp_enqueue_script('solovki-pleer-js', get_template_directory_uri() . '/assets/js/pleer.js', array( 'jquery' ), null, true);
    wp_enqueue_script('solovki-datepicker-js', get_template_directory_uri() . '/assets/js/datepicker.js', array( 'jquery' ), null, true);
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'solovki_scripts' );

require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/custom-types.php';

/*
 * "Хлебные крошки"
*/
function the_breadcrumbs() {

  /* === ОПЦИИ === */
  $currentlang = get_bloginfo('language');
    if($currentlang=="en-US"){
      $text['home'] = 'Main page'; // текст ссылки "Главная"
    }
    else{
      $text['home'] = 'Главная'; // текст ссылки "Главная"
    }
  $text['category'] = '%s'; // текст для страницы рубрики
  if($currentlang=="en-US"){
      $text['search'] = 'Results found by request "%s"'; // текст для страницы с результатами поиска
    }
    else{
      $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    }
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '-'; // разделитель между "крошками"
  $sep_before = '<span class="sep">'; // тег перед разделителем
  $sep_after = '</span>'; // тег после разделителя
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $before = '<span class="current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link_before = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link_after = '</span>';
  $link_attr = ' itemprop="item"';
  $link_in_before = '<span itemprop="name">';
  $link_in_after = '</span>';
  $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
  $frontpage_id = get_option('page_on_front');
  $parent_id = ($post) ? $post->post_parent : '';
  $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
  $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

  if (is_home() || is_front_page()) {

    if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

  } else {

    echo $wrap_before;
    if ($show_home_link) echo $home_link;

    if ( is_category() ) {
      $cat = get_category(get_query_var('cat'), false);
      if ($cat->parent != 0) {
        $cats = get_category_parents($cat->parent, TRUE, $sep);
        $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        if ($show_home_link) echo $sep;
        echo $cats;
      }
      if ( get_query_var('paged') ) {
        $cat = $cat->cat_ID;
        echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
      }

    } elseif ( is_search() ) {
      if (have_posts()) {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
      } else {
        if ($show_home_link) echo $sep;
        echo $before . sprintf($text['search'], get_search_query()) . $after;
      }

    } elseif ( is_day() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
      echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
      if ($show_current) echo $sep . $before . get_the_time('d') . $after;

    } elseif ( is_month() ) {
      if ($show_home_link) echo $sep;
      echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
      if ($show_current) echo $sep . $before . get_the_time('F') . $after;

    } elseif ( is_year() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . get_the_time('Y') . $after;

    } elseif ( is_single() && !is_attachment() ) {
      if ($show_home_link) echo $sep;
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
        if ($show_current) echo $sep . $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        $cats = get_category_parents($cat, TRUE, $sep);
        if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
        if ( get_query_var('cpage') ) {
          echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
        } else {
          if ($show_current) echo $before . get_the_title() . $after;
        }
      }

    // custom post type
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      if ( get_query_var('paged') ) {
        echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . $post_type->label . $after;
      }

    } elseif ( is_attachment() ) {
      if ($show_home_link) echo $sep;
      $parent = get_post($parent_id);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      if ($cat) {
        $cats = get_category_parents($cat, TRUE, $sep);
        $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
        echo $cats;
      }
      printf($link, get_permalink($parent), $parent->post_title);
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && !$parent_id ) {
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_page() && $parent_id ) {
      if ($show_home_link) echo $sep;
      if ($parent_id != $frontpage_id) {
        $breadcrumbs = array();
        while ($parent_id) {
          $page = get_page($parent_id);
          if ($parent_id != $frontpage_id) {
            $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
          }
          $parent_id = $page->post_parent;
        }
        $breadcrumbs = array_reverse($breadcrumbs);
        for ($i = 0; $i < count($breadcrumbs); $i++) {
          echo $breadcrumbs[$i];
          if ($i != count($breadcrumbs)-1) echo $sep;
        }
      }
      if ($show_current) echo $sep . $before . get_the_title() . $after;

    } elseif ( is_tag() ) {
      if ( get_query_var('paged') ) {
        $tag_id = get_queried_object_id();
        $tag = get_tag($tag_id);
        echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
      }

    } elseif ( is_author() ) {
      global $author;
      $author = get_userdata($author);
      if ( get_query_var('paged') ) {
        if ($show_home_link) echo $sep;
        echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
      } else {
        if ($show_home_link && $show_current) echo $sep;
        if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
      }

    } elseif ( is_404() ) {
      if ($show_home_link && $show_current) echo $sep;
      if ($show_current) echo $before . $text['404'] . $after;

    } elseif ( has_post_format() && !is_singular() ) {
      if ($show_home_link) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
} // end of the_breadcrumbs()

//the_excerpt
function my_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'my_excerpt_length' );

//Filter

function go_filter() { 
	$args = array();
  $args['meta_query'] = array('relation' => 'AND');
	global $wp_query;
  
  if ($_REQUEST['theme']) {
    $themes = array('relation' => 'OR');
    foreach ($_REQUEST['theme'] as $value){
		$themes[] = array(
			'key' => 'theme', 
			'value' => $value,
      'type' => 'text',
      'compare' => 'LIKE'
			);
    }
    $args['meta_query'][] = $themes;
	}
  
  if ($_REQUEST['place']) {
    $places = array('relation' => 'OR');
    foreach ($_REQUEST['place'] as $value){
		$places[] = array(
			'key' => 'place', 
			'value' => $value,
      'type' => 'text',
      'compare' => 'LIKE'
			);
    }
    $args['meta_query'][] = $places;
	}
  
  if ($_REQUEST['period']) {
		$args['meta_query'][] = array(
			'key' => 'period', 
			'value' => $_REQUEST['period'],
      'type' => 'text',
      'compare' => 'IN'
			);
	}


  if ($_REQUEST['genre']) {
		$args['meta_query'][] = array(
			'key' => 'genre', 
			'value' => $_REQUEST['genre'],
      'type' => 'text',
      'compare' => 'IN'
			);
	}
  
  if ($_REQUEST['author']) {
		$args['meta_query'][] = array(
			'key' => 'author', 
			'value' => $_REQUEST['author'],
      'type' => 'text',
      'compare' => 'LIKE'
			);
	}

  
	query_posts(array_merge($args,$wp_query->query));
}
//Дополнительные поля в рубрике
class trueTaxonomyMetaBox {
	private $opt;
	private $prefix;

	function __construct( $option ) {
		$this->opt    = (object) $option;
		$this->prefix = $this->opt->id .'_'; // префикс настроек

		foreach( $this->opt->taxonomy as $taxonomy ){
			add_action( $taxonomy . '_edit_form_fields', array( &$this, 'fill'), 10, 2 ); // хук добавления полей
		}

		// установим таблицу в $wpdb, если её нет
		global $wpdb;
		if( ! isset( $wpdb->termmeta ) ) $wpdb->termmeta = $wpdb->prefix .'termmeta';

		add_action('edit_term', array( &$this, 'save'), 10, 1 ); // хук сохранения значений полей
	}

	function fill( $term, $taxonomy ){

		foreach( $this->opt->args as $param ){
			$def   = array('id'=>'', 'title'=>'', 'type'=>'', 'desc'=>'', 'std'=>'', 'args'=>array() );
			$param = (object) array_merge( $def, $param );

			$meta_key   = $this->prefix . $param->id;
			$meta_value = get_metadata('term', $term->term_id, $meta_key, true ) ?: $param->std;

			echo '<tr class ="form-field">';
				echo '<th scope="row"><label for="'. $meta_key .'">'. $param->title .'</label></th>';
				echo '<td>';

				// select
		if( $param->type == 'wp_editor' ){
		  wp_editor( $meta_value, $meta_key, array(
			'wpautop' => 1,
			'media_buttons' => false,
			'textarea_name' => $meta_key, //нужно указывать!
			'textarea_rows' => 10,
			//'tabindex'      => null,
			//'editor_css'    => '',
			//'editor_class'  => '',
			'teeny'         => 0,
			'dfw'           => 0,
			'tinymce'       => 1,
			'quicktags'     => 1,
			//'drag_drop_upload' => false
		  ) );
		}
		// select
				elseif( $param->type == 'select' ){
					echo '<select name="'. $meta_key .'" id="'. $meta_key .'">
							<option value="">...</option>';

							foreach( $param->args as $val => $name ){
								echo '<option value="'. $val .'" '. selected( $meta_value, $val, 0 ) .'>'. $name .'</option>';
							}
					echo '</select>';
					if( $param->desc ) echo '<p class="description">' . $param->desc . '</p>';
				}
				// checkbox
				elseif( $param->type == 'checkbox' ){
					echo '
						<label>
							<input type="hidden" name="'. $meta_key .'" value="">
							<input name="'. $meta_key .'" type="'. $param->type .'" id="'. $meta_key .'" '. checked( $meta_value, 'on', 0) .'>
							'. $param->desc .'
						</label>
					';
				}
				// textarea
				elseif( $param->type == 'textarea' ){
          $settings = array(
            'wpautop' => 0,
            'media_buttons'=>0,
            'name'=>$meta_key,
            'textarea_name'=>$meta_key,
            'quicktags'=>1,
            'teeny'=>0,
            'tinymce'=> 1,
            'textarea_rows'=>5,
            'id'=>$meta_key,
            'value'=>$meta_value,
          );

          $aut = wp_editor(esc_html( $meta_value ), 'cl_category_link', $settings);
          return $aut;
				}
				// text
				else{
					echo '<input name="'. $meta_key .'" type="'. $param->type .'" id="'. $meta_key .'" value="'. $meta_value .'" class="regular-text">';

					if( $param->desc ) echo '<p class="description">' . $param->desc . '</p>';
				}
				echo '</td>';
			echo '</tr>';         
		}

	}

	function save( $term_id ){
		foreach( $this->opt->args as $field ){
			$meta_key = $this->prefix . $field['id'];
			if( ! isset($_POST[ $meta_key ]) ) continue;

			if( $meta_value = trim($_POST[ $meta_key ]) ){
				update_metadata('term', $term_id, $meta_key, $meta_value, '');
			}
			else {
				delete_metadata('term', $term_id, $meta_key, '', false );
			}
		}
	}

}
add_action('init', 'register_additional_term_fields');
function register_additional_term_fields(){ 
	new trueTaxonomyMetaBox( array(
		'id'       => 'cl', // id играет роль префикса названий полей
		'taxonomy' => array('category'), // названия таксономий, для которых нужно добавить ниже перечисленные поля
    'name' => 'cl_category_link',
		'args'     => array(
			array(
				'id'    => 'category_link', // атрибуты name и id без префикса, получится "txseo_seo_title"
				'title' => 'Ссылки на другие источники',
				'type'  => 'textarea',
				'desc'  => '',
				'std'   => '', // по умолчанию
			)
		)
	) );
}


//Добавление изображенияк рубрике
add_action( 'category_edit_form_fields', 'mayak_update_category_image' , 10, 2 );
function mayak_update_category_image ( $term, $taxonomy ) {
?>
   <style>
   img{border:3px solid #ccc;}
   .term-group-wrap p{float:left;}
   .term-group-wrap input{font-size:18px;font-weight:bold;width:40px;}
   #bitton_images{font-size:18px;}
   #bitton_images_remove{font-size:18px;margin:5px 5px 0 0;}
   </style>
   <tr class="form-field term-group-wrap">
     <th scope="row">
       <label for="id-cat-images">Изображение</label>
     </th>
     <td>
       <p><input type="button" class="button bitton_images" id="bitton_images" name="bitton_images" value="+" /></br>
       <input type="button" class="button bitton_images_remove" id="bitton_images_remove" name="bitton_images_remove" value="&ndash;" /></p>
       <?php $id_images = get_term_meta ( $term -> term_id, 'id-cat-images', true ); ?>
       <input type="hidden" id="id-cat-images" name="id-cat-images" value="<?php echo $id_images; ?>">
       <div id="cat-image-miniature">
         <?php if (empty($id_images )) { ?>
         <img src="https://antsur.ru/wp-content/themes/solovki/assets/images/wp.png" alt="Zaglushka" width="84" height="89"/>
         <?php } else {?>
           <?php echo wp_get_attachment_image ( $id_images, 'thumbnail' ); ?>
         <?php } ?>
       </div>
     </td>
   </tr>
<?php
}
if(preg_match("#tag_ID=([0-9.]+)#", $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']))
add_action( 'admin_footer', 'mayak_loader'  );
function mayak_loader() { ?>
   <script>
     jQuery(document).ready( function($) {
       function mayak_image_upload(button_class) {
         var mm = true,
         _orig_send_attachment = wp.media.editor.send.attachment;
         $('body').on('click', button_class, function(e) {
           var mb = '#'+$(this).attr('id');
           var mt = $(mb);
           mm = true;
           wp.media.editor.send.attachment = function(props, attachment){
             if (mm) {
               $('#id-cat-images').val(attachment.id);
               $('#cat-image-miniature').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
               $('#cat-image-miniature .custom_media_image').attr('src',attachment.sizes.thumbnail.url).css('display','block');
             } else {
               return _orig_send_attachment.apply( mb, [props, attachment] );
             }
            }
         wp.media.editor.open(mt);
         return false;
       });
     }
     mayak_image_upload('.bitton_images.button');
     $('body').on('click','.bitton_images_remove',function(){
       $('#id-cat-images').val('');
       $('#cat-image-miniature').html('<img class="custom_media_image" src="" style="margin:0;padding:0;max-height:100px;float:none;" />');
     });
     $(document).ajaxComplete(function(event, xhr, settings) {
       var mk = settings.data.split('&');
       if( $.inArray('action=add-tag', mk) !== -1 ){
         var mh = xhr.responseXML;
         $mr = $(mh).find('term_id').text();
         if($mr!=""){
           $('#cat-image-miniature').html('');
         }
       }
     });
   });
</script>
<?php }
add_action( 'edited_category','mayak_updated_category_image' , 10, 2 );
function mayak_updated_category_image ( $term_id, $tt_id ) {
   if( isset( $_POST['id-cat-images'] ) && '' !== $_POST['id-cat-images'] ){
     $image = $_POST['id-cat-images'];
     update_term_meta ( $term_id, 'id-cat-images', $image );
   } else {
     update_term_meta ( $term_id, 'id-cat-images', '' );
   }
}
function mayak_cats_images(){
$ags = array(
'taxonomy'=>'category',
'parent' => get_query_var('cat'),
'meta_query' => array(array('key' => 'id-cat-images',)),
);
$terms = get_terms($ags);
 $count = count($terms);
 if($count > 0){
     foreach ($terms as $term) {
     $term_taxonomy_id = $term->term_taxonomy_id;
     $image_id = get_term_meta ( $term_taxonomy_id, 'id-cat-images', true );
     $image_array = wp_get_attachment_image_src( $image_id, full);
       echo '<div class="archive-encounters__box"><a href="'.get_category_link($term_taxonomy_id).'">
       <div class="archive-encounters__img" style="background-image: url(' . $image_array[0] . ')"></div>
       <div class="archive-encounters__tit">'.$term->name.'</div></a>
       </div>';
     }
 }
} 

function mayak_cats_book_images(){
  $ags = array(
    'taxonomy'=>'category',
    'parent' => get_query_var('cat'),
    'hide_empty' => false,
    'meta_query' => array(array('key' => 'id-cat-images',)),
  );
  $terms = get_terms($ags);
  $count = count($terms);
  if($count > 0){
    foreach ($terms as $term) {
      $term_taxonomy_id = $term->term_taxonomy_id;
      $image_id = get_term_meta ( $term_taxonomy_id, 'id-cat-images', true );
      $image_array = wp_get_attachment_image_src( $image_id, full);
      echo '<div class="col-sm-3 archive-encounters__box">
       <div class="archive-encounters__img center-block"><a href="'.get_category_link($term_taxonomy_id).'"><img src="' . $image_array[0] . '"></a></div>
       <div class="text-center archive-download__subtitle"><a href="'.get_category_link($term_taxonomy_id).'">'.$term->name.'</a></div>
       </div>';
    }
  }
}
//Получение всех значений произвольного поля
function get_meta_values( $key = '', $term = '', $type = 'post', $status = 'publish' ) {
  global $wpdb;
  if( empty( $key ) )
  return;
  $r = $wpdb->get_col( $wpdb->prepare( "
    SELECT pm.meta_value FROM {$wpdb->postmeta} pm
    LEFT JOIN {$wpdb->posts} p ON p.ID = pm.post_id
    LEFT JOIN {$wpdb->term_relationships} tr ON tr.object_id = pm.post_id
    WHERE pm.meta_key = '%s' 
    AND p.post_status = '%s' 
    AND p.post_type = '%s'
    AND tr.term_taxonomy_id = '%s'
    ", $key, $status, $type, $term ) );
  $r = array_unique($r);
  $r = array_diff($r, array(''));
  sort($r);
  return $r;
}

//загрузка fb2
function my_upload_mimes() {
$mime_types = array(
'zip'     => 'application/zip'
);
return $mime_types;
}
add_filter( 'upload_mimes', 'my_upload_mimes' );

 