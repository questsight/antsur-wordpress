<?php get_header();?>

<?php
  if ($_GET['select'] == 'newest') { $order = "&orderby=date&order=DESC"; $s1 = ' selected="selected"'; }
  if ($_GET['select'] == 'lastest') { $order = "&orderby=date&order=ASC"; $s2 = ' selected="selected"'; }
  if ($_GET['select'] == 'title') { $order = "&orderby=title&order=ASC"; $s3 = ' selected="selected"'; }
  global $query_string;
  query_posts($query_string);
?>

<div class="archive-legacy">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="archive-legacy__header">
          <?php $currentlang = get_bloginfo('language');
            if($currentlang=="en-US"):?>
              <h1 class="archive-legacy__title text-center">Documents by Tag #<?php echo single_cat_title(); ?></h1>
          <?php else: ?>
              <h1 class="archive-legacy__title text-center">Материалы по тегу #<?php echo single_cat_title(); ?></h1>
          <?php endif; ?>
        </div>
        <div class="archive-legacy__content">
          <form name="form-filter"  method="get">
            <div class="archive-legacy__sorting">
              <div>
              <?php $currentlang = get_bloginfo('language');
            if($currentlang=="en-US"):?>
               <label>Sort by </label>
              <select name="select" onchange="this.form.submit()">
                <option value="newest" <?=$s1?>>date (newest)</option>
                <option value="lastest" <?=$s2?>>date (oldest)</option>
                <option value="title" <?=$s3?>>A-Z</option>
              </select>
               <?php else: ?>
                <label>Сортировать по</label>
                <select name="select" onchange="this.form.submit()">
                  <option value="newest" <?=$s1?>>дате (по убыванию)</option>
                  <option value="lastest" <?=$s2?>>дате (по возрастанию)</option>
                  <option value="title" <?=$s3?>>по алфавиту</option>
                </select>
                <?php endif; ?>
              </div>
            </div>          
            <div class="archive-legacy__nav_float_left">
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
            <div class="archive-legacy__result">
            <?php
              query_posts($query_string.'&posts_per_page=-1');
              $currentlang = get_bloginfo('language');
              if($currentlang=="en-US"){
                if ( have_posts() ){
                  $count = $wp_query->post_count;
                  if($count > 0){
                    echo wpautop( $count . ' results found');
                  }
                  else {
	                   echo wpautop( 'No results found' );
                  }
                }
              }
              else {
                if ( have_posts() ){
                  $count = $wp_query->post_count;
                  if($count == 1 || $count % 10 == 1 && $count != 11 && $count % 100 != 11){
                    echo wpautop( 'Найден ' . $count . ' результат');
                  }
                  else if($count > 1 && $count < 5){
                    echo wpautop( 'Найдено ' . $count . ' результатa');
                  }
                  else if($count % 10 > 1 && $count % 10 < 5){
                    echo wpautop( 'Найдено ' . $count . ' результатa');
                  }
                  else {
                    echo wpautop( 'Найдено ' . $count . ' результатов'); 
                  }
                } 
                else {
	               echo wpautop( 'Результатов не найдено' );
                } 
              }
            ?>        
            </div>
            <div class="clearfix"></div>
            <?php 
              query_posts($query_string.'&'.$order);
              if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="archive-legacy__one">
                <div class="row">
                  <div class="col-sm-3 col-lg-2">
                    <div class="archive-legacy__sort">
                    <?php if ( in_category('15')) { ?>
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                      <p>Текст</p>
                    <?php } ?>
                    <?php if ( in_category('16')) { ?>
                      <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                      <p>Аудио</p>
                    <?php } ?>
                    <?php if ( in_category('17')) { ?>
                      <i class="fa fa-file-video-o" aria-hidden="true"></i>
                      <p>Видео</p>
                    <?php } ?>
                    <?php if ( in_category('129')) { ?>
                      <i class="fa fa-file-text-o" aria-hidden="true"></i>
                      <p>Text</p>
                    <?php } ?>
                    <?php if ( in_category('131')) { ?>
                      <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                      <p>Audio</p>
                    <?php } ?>
                    <?php if ( in_category('133')) { ?>
                      <i class="fa fa-file-video-o" aria-hidden="true"></i>
                      <p>Video</p>
                    <?php } ?>
                    </div>
                  </div>
                  <div class="col-sm-9 col-lg-10"><a class="archive-legacy__name" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?>. </a><a class="archive-legacy__date" href="<?php echo get_permalink(); ?>"><?php echo get_field('date'); ?></a>
                  <?php if ( in_category('15')) { ?>
                    <div class="archive-legacy__description"><?php the_excerpt(); ?></div>
                  <?php } ?>
                    <div class="archive-legacy__parameter">
                    <?php
                      $parameter = '';
                      $theme = get_field_object('theme');
                      $choicestheme = $theme['value'];
                      $parametertheme = array();
                      $place = get_field_object('place');
                      $choicesplace = $place['value'];
                      $parameterplace = array();
                      $period = get_field_object('period');
                      $genre = get_field_object('genre');
                      $parameterplace = array();
                      if(is_array($choicestheme)){
                        $parameter = $parameter . '<span>Тема:&nbsp;';
                        foreach ($choicestheme as $valuetheme => $labeltheme) {
                          $valuetheme = $theme['choices'][$labeltheme];
                          $parametertheme[] = '<a href="https://antsur.ru/ru/nasledie/?theme%5B%5D=' . $labeltheme . '">' . $valuetheme . '</a>';
                        }
                        $parametertheme = implode('<span>, </span>',$parametertheme);
                        $parameter = $parameter . $parametertheme . '</span>';
                      }
                      if(is_array($choicesplace)){
                        $parameter = $parameter . '<span> Место:&nbsp;';
                        foreach ($choicesplace as $valueplace => $labelplace) {
                          $valueplace = $place['choices'][$labelplace];
                          $parameterplace[] = '<a href="https://antsur.ru/ru/nasledie/?place%5B%5D=' . $labelplace . '">' . $valueplace . '</a>';
                        }
                        $parameterplace = implode('<span>, </span>',$parameterplace);
                        $parameter = $parameter . $parameterplace . '</span>';
                      }
                      if(get_field('period')){
                        $valueperiod = $period['value'];
                        $labelperiod = $period['choices'][ $valueperiod];
                        $parameter = $parameter . '<span> Период:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                      }                
                      if(get_field('genre')){
                        $valuegenre = $genre['value'];
                        $labelgenre = $genre['choices'][ $valuegenre ];
                        $parameter = $parameter . '<span> Жанр:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
                      }
                      echo $parameter;
                  ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; endif; ?>                                                                
            <div class="archive-legacy__nav_float_left">
              <?php
                $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"){
                  the_posts_pagination(array('prev_text' => 'Prev', 'next_text' => 'Next', 'previouspagelink' => ''));
                }
                else{
                  the_posts_pagination(array('prev_text' => 'Пред.', 'next_text' => 'След.'));}
                ?>
            </div>
            <div class="archive-legacy__result">
            <?php
              query_posts($query_string.'&posts_per_page=-1');
              $currentlang = get_bloginfo('language');
              if($currentlang=="en-US"){
                if ( have_posts() ){
                  $count = $wp_query->post_count;
                  if($count > 0){
                    echo wpautop( $count . ' results found');
                  }
                  else {
	                   echo wpautop( 'No results found' );
                  }
                }
              }
              else {
                if ( have_posts() ){
                  $count = $wp_query->post_count;
                  if($count == 1 || $count % 10 == 1 && $count != 11 && $count % 100 != 11){
                    echo wpautop( 'Найден ' . $count . ' результат');
                  }
                  else if($count > 1 && $count < 5){
                    echo wpautop( 'Найдено ' . $count . ' результатa');
                  }
                  else if($count % 10 > 1 && $count % 10 < 5){
                    echo wpautop( 'Найдено ' . $count . ' результатa');
                  }
                  else {
                    echo wpautop( 'Найдено ' . $count . ' результатов'); 
                  }
                } 
                else {
	               echo wpautop( 'Результатов не найдено' );
                } 
              }
            ?>       
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>