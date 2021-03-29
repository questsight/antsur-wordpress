<?php get_header(); ?>

<div class="archive">
  <div class="archive__wrapper">
    <div class="archive__header">
      <?php $currentlang = get_bloginfo('language');
        if($currentlang=="en-US"):?>
        <h1 class="archive__title text-center"><?php printf( esc_html__( 'Results found by request: %s', 'solovki' ), get_search_query() ) ?></h1>
      <?php else: ?>
        <h1 class="archive__title text-center"><?php printf( esc_html__( 'Результаты поиска по запросу: %s', 'solovki' ), get_search_query() ) ?></h1>
      <?php endif; ?>
    </div>
    <div class="archive__content">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
          <div class="row">
          <?php
            while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', 'search' );
			     endwhile;
          ?>
          <div class="archive__nav_float_left">
            <?php
               add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
               function my_navigation_template( $template, $class ){
	             return '
		            <div class="archive__nav">
                <span>Страницы:</span>
                %3$s</div>   
	             ';
              }
                $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"){
                  the_posts_pagination(array('prev_text' => 'Prev', 'next_text' => 'Next', 'previouspagelink' => ''));
                }
                else{
                  the_posts_pagination(array('prev_text' => 'Пред.', 'next_text' => 'След.'));}
            ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
