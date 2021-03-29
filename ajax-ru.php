<?php require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');?>

 <script>
  jQuery(document).ready(function($) {
	jQuery("#form-ru select").change(function(e) {
    var str = jQuery("#form-ru").serialize();
    jQuery("#result-ru").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-ru.php',
        data: str,
        method: 'POST',
        success: function(data){
          jQuery("#result-ru").html(data);
        }
    });
  })
  jQuery(".archive-legacy__input-reset").click(function(e) {
    jQuery("#result-ru").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery('#form-ru input[name="theme[]"], #form-ru input[name="place[]"], #form-ru input[name="period[]"], #form-ru input[name="genre[]"]').removeAttr("checked");
    jQuery('#form-ru input[name="date"]').val("");
    jQuery('#form-ru input[id="datepicker-en"]').val("01.01.1941");
    var str = jQuery("#form-ru").serialize();
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-ru.php',
        data: str,
        method: 'POST',
        success: function(data){
          jQuery("#result-ru").html(data);
        }
    });
  })
  var page1 = 0;
  var page2 = 10;
  var a1 = 0;
  var a2 = 1;
  var a3 = 2;
  var sum = jQuery("#sum").attr('sum');
  jQuery( '.archive__one' ).slice(page1, page2).show();
  jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").addClass("archive-legacy__page-numbers-activa");
  jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").show();
  jQuery(".archive-legacy__page-numbers[page=" + a3 + "]").show();
  jQuery(".archive-legacy__page-numbers[page=" + sum + "]").show();
  jQuery(".dots[dots=" + a3 + "]").show();
  jQuery(".archive-legacy__page-numbers[page='next']").show();
  
  jQuery('.archive-legacy__page-numbers').click(function () {
    jQuery('.archive-legacy__page-numbers').removeClass("archive-legacy__page-numbers-activa");
    var a = jQuery(this).attr('page');
    if(a == "prev"){
      page1 = page1 - 10;
      page2 = page2 - 10;
      a1 = parseInt(jQuery(this).attr('link')) - 1;
      a2 = parseInt(jQuery(this).attr('link'));
      a3 = parseInt(jQuery(this).attr('link')) + 1;
    } else if (a == "next"){
      page1 = page1 + 10;
      page2 = page2 + 10;
      a1 = parseInt(jQuery(this).attr('link')) - 1;
      a2 = parseInt(jQuery(this).attr('link'));
      a3 = parseInt(jQuery(this).attr('link')) + 1;
    } else {
      page1 = (a - 1) * 10;
      page2 = a * 10;
      a1 = parseInt(a) - 1;
      a2 = parseInt(a);
      a3 = parseInt(a) + 1;
    }
      
    jQuery(".archive-legacy__page-numbers").hide();
    jQuery(".archive-legacy__page-numbers[page=" + a1 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + a3 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + sum + "]").show();
    if(a2 != 1){
      jQuery(".archive-legacy__page-numbers[page='prev']").show(); 
    }
    if(a2 != sum){
      jQuery(".archive-legacy__page-numbers[page='next']").show(); 
    }
    jQuery(".dots").hide();
    if(a3 < (sum-1)){
      jQuery(".dots[dots=" + a3 + "]").show();
    }
    if(a1 > 2){
      jQuery(".dots[dots='1']").show();
    }
    jQuery(".archive-legacy__page-numbers[page='1']").show();
    jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").addClass("archive-legacy__page-numbers-activa");
    jQuery( '.archive__one' ).hide();
    jQuery( '.archive__one' ).slice(page1, page2).show();
    setTimeout(function() {
      jQuery(".archive-legacy__page-numbers[page='prev']").attr('link',a1);
      jQuery(".archive-legacy__page-numbers[page='next']").attr('link',a3);
    }, 0);
  });
});
</script>
  <?php

  if ($_REQUEST['select'] == 'newest') { $order = "&orderby=date&order=DESC"; $s1="selected";}
  if ($_REQUEST['select'] == 'lastest') { $order = "&orderby=date&order=ASC"; $s2="selected";}
  if ($_REQUEST['select'] == 'title') { $order = "&orderby=title&order=ASC"; $s3="selected";}

  if ($_REQUEST['date']) { $date = '&year=' . substr($_REQUEST['date'], 0, 4) . '&monthnum=' . substr($_REQUEST['date'], 5, 2) . '&day=' . substr($_REQUEST['date'], 8, 2); }
  
  if($_REQUEST['idx']) { $link = "ru/legacy/" . $_REQUEST['idx'] . "/";} else { $link = "ru/legacy"; }

  if($_REQUEST['cat']){
    $cat="&cat=" . implode(",", $_REQUEST['cat']);
  }

  if ($_REQUEST['search']) { $search = '&s=' . $_REQUEST['search'];}
  
  global $query_string;
  query_posts($query_string.$order.$cat.$date.$search);
  if ($_REQUEST && !empty($_REQUEST)) {go_filter();}
?>
         <div class="archive-legacy__search-parameter">
          <?php
          $parameter;
            if($_REQUEST['theme'] || $_REQUEST['place'] || $_REQUEST['period'] || $_REQUEST['genre'] || $_REQUEST['date'] || $_REQUEST['search']){
              $parameter = 'Параметры поиска:';
              if($_REQUEST['search'] ){
                
                $s = $_REQUEST['search'];
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Ключевое слово:&nbsp;</span><span class="archive-legacy__search-name">' . $s . '</span>';
              }
              if($_REQUEST['theme'] ){
                $theme = array();
                $themefield = get_field_object('field_5ab234e6df9f5');
                foreach ($_REQUEST['theme'] as $value) {
                  foreach( $themefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $theme[] = $v;  
                    }
                  }
                }
                $theme = implode(', ',$theme);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Тема:&nbsp;</span><span class="archive-legacy__search-name">' . $theme . '</span>';
              }
              if($_REQUEST['place'] ){
                $place = array();
                $placefield = get_field_object('field_5ab24d094448a');
                foreach ($_REQUEST['place'] as $value) {
                  foreach( $placefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $place[] = $v;  
                    }
                  }
                }
                $place = implode(', ',$place);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Место:&nbsp;</span><span class="archive-legacy__search-name">' . $place . '</span>';
              }
              if($_REQUEST['date'] ){
                $originalDate = $_REQUEST['date'];
                $newDate = date("d-m-Y", strtotime($originalDate)) . ', ';
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Период:&nbsp;</span><span class="archive-legacy__search-name">' . $newDate . '</span>';
              }
              else if($_REQUEST['period'] ){
                $period = array();
                $periodfield = get_field_object('field_5ab25e6e439df');
                foreach ($_REQUEST['period'] as $value) {
                  foreach( $periodfield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $period[] = $v;  
                    }
                  }
                }
                $period = implode(', ',$period);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Период:&nbsp;</span><span class="archive-legacy__search-name">' . $period . '</span>';
              }
              if($_REQUEST['genre'] ){
                $genre = array();
                $genrefield = get_field_object('field_5ab2604cffbd7');
                foreach ($_REQUEST['genre'] as $value) {
                  foreach( $genrefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $genre[] = $v;
                    }
                  }
                }
                $genre = implode(', ',$genre);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Жанр:&nbsp;</span><span class="archive-legacy__search-name">' . $genre . '</span>';
              }
              $parameter = $parameter . '<button class="archive-legacy__input-reset" type="button" name="reset" onclick="javascript:document.location = document.location.pathname;">Сброс параметров поиска</button>';
            }
            else{
              $parameter = 'Параметры поиска не заданы';
            }
            echo $parameter;
          ?>                                           
          </div>
          <div class="archive-legacy__sorting">
            <div>
              <label>Сортировать по</label>
              <select name="select">
                <option value="newest" <?=$s1?>>дате (по убыванию)</option>
                <option value="lastest" <?=$s2?>>дате (по возрастанию)</option>
                <option value="title" <?=$s3?>>алфавиту</option>
              </select>
            </div>
          </div>
          <?php query_posts($query_string.$order.$cat.$date.'&posts_per_page=-1'.$search);
            if ($_REQUEST && !empty($_REQUEST)) {
	             go_filter();
            }
            if ( have_posts() ){
              $count = $wp_query->post_count;
            }
          ?>
          <div class="archive-legacy__nav_float_left">
          <?php if($count > 10): ?>
            <div class="archive__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Страницы:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Пред.</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">След.</span>
            </div>
            <?php endif; ?>
          </div>
          <div class="archive-legacy__result">
          <?php
            if ( $count > 0){
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
            } else {
	             echo wpautop( 'Результатов не найдено' );
            }
            ?>        
          </div>
          <div class="clearfix"></div>
          <?php 
          query_posts($query_string.$order.$cat.$date. '&posts_per_page=-1'.$search);
          if ($_REQUEST && !empty($_REQUEST)) {
	         go_filter();
          }
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="archive-legacy__one archive__one">
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
                </div>
              </div>
              <div class="col-sm-9 col-lg-10"><a class="archive-legacy__name" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?>. </a><a class="archive-legacy__date" href="<?php echo get_permalink(); ?>"><?php echo get_field('date'); ?></a>
                <?php if ( in_category('15')) { ?>
                <div class="archive-legacy__description add-font"><?php the_excerpt(); ?></div>
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
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Место:&nbsp;';
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
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Период:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                  }                
                  if(get_field('genre')){
                    $valuegenre = $genre['value'];
                    $labelgenre = $genre['choices'][ $valuegenre ];
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Жанр:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
                  }
                  echo $parameter;
                ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
          <div class="archive-legacy__nav_float_left">
          <?php if($count > 10): ?>
            <div class="archive__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Страницы:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">След.</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Пред.</span>
            </div>
            <?php endif; ?>
          </div>