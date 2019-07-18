<?php require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');?>
<script>
jQuery(document).ready(function($) {
	jQuery("#form-en select").change(function(e) {
    var str = jQuery("#form-en").serialize();
    jQuery("#result-en").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-en.php',
        data: str,
        method: 'POST',
        success: function(data){
          jQuery("#result-en").html(data);
        }
    });
  })
  jQuery(".archive-legacy__input-reset").click(function(e) {
    jQuery("#result-en").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery('#form-en input[name="theme[]"], #form-en input[name="place[]"], #form-en input[name="period[]"], #form-en input[name="genre[]"]').removeAttr("checked");
    jQuery('#form-en input[name="date"]').val("");
    jQuery('#form-en input[id="datepicker-en"]').val("01.01.1941");
    var str = jQuery("#form-en").serialize();
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-en.php',
        data: str,
        method: 'POST',
        success: function(data){
          jQuery("#result-en").html(data);
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
  
  if($_REQUEST['idx']) { $link = "en/legacy/" . $_REQUEST['idx'] . "/";} else { $link = "en/legacy"; }

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
              $parameter = 'Search parameters:';
              if($_REQUEST['search'] ){
                
                $s = $_REQUEST['search'];
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Keyword:&nbsp;</span><span class="archive-legacy__search-name">' . $s . '</span>';
              }
              if($_REQUEST['theme'] ){
                $theme = array();
                $themefield = get_field_object('field_5ac722189dba0');
                foreach ($_REQUEST['theme'] as $value) {
                  foreach( $themefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $theme[] = $v;  
                    }
                  }
                }
                $theme = implode(', ',$theme);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Theme:&nbsp;</span><span class="archive-legacy__search-name">' . $theme . '</span>';
              }
              if($_REQUEST['place'] ){
                $place = array();
                $placefield = get_field_object('field_5ac771a6dcf11');
                foreach ($_REQUEST['place'] as $value) {
                  foreach( $placefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $place[] = $v;  
                    }
                  }
                }
                $place = implode(', ',$place);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Place:&nbsp;</span><span class="archive-legacy__search-name">' . $place . '</span>';
              }
              if($_REQUEST['date'] ){
                $originalDate = $_REQUEST['date'];
                $newDate = date("d-m-Y", strtotime($originalDate)) . ', ';
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Period:&nbsp;</span><span class="archive-legacy__search-name">' . $newDate . '</span>';
              }
              else if($_REQUEST['period'] ){
                $period = array();
                $periodfield = get_field_object('field_5ac90d5248f3c');
                foreach ($_REQUEST['period'] as $value) {
                  foreach( $periodfield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $period[] = $v;  
                    }
                  }
                }
                $period = implode(', ',$period);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Period:&nbsp;</span><span class="archive-legacy__search-name">' . $period . '</span>';
              }
              if($_REQUEST['genre'] ){
                $genre = array();
                $genrefield = get_field_object('field_5ac90d7548f3d');
                foreach ($_REQUEST['genre'] as $value) {
                  foreach( $genrefield['choices'] as $k => $v )
                  {
                    if($k == $value){
                      $genre[] = $v;
                    }
                  }
                }
                $genre = implode(', ',$genre);
                $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Genre:&nbsp;</span><span class="archive-legacy__search-name">' . $genre . '</span>';
              }
              $parameter = $parameter . '<button class="archive-legacy__input-reset" type="button" name="reset">Clear search parameters</button>';
            }
            else{
              $parameter = 'Search parameters not given';
            }
            echo $parameter;
          ?>                                           
          </div>
          <div class="archive-legacy__sorting">
            <div>
              <label>Sort by </label>
              <select name="select" >
                <option value="newest" <?=$s1?>>date (newest)</option>
                <option value="lastest" <?=$s2?>>date (oldest)</option>
                <option value="title" <?=$s3?>>A-Z</option>
              </select>
            </div>
          </div>
          <div class="archive-legacy__nav_float_left">
            <?php 
            query_posts($query_string.$order.$cat.$date.'&posts_per_page=-1'.$search);
            if ($_REQUEST && !empty($_REQUEST)) {
	             go_filter();}
            if ( have_posts() ){
              $count = $wp_query->post_count;
            if($count > 10): ?>
            <div class="archive__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Pages:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Prev</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Next</span>
            </div>
            <?php endif; ?>
          </div>
          <div class="archive-legacy__result">
          <?php
              if($count > 0){
                echo wpautop( $count . ' results found');
              }
              else {
	               echo wpautop( 'No results found' );
              }
            }
            ?>        
          </div>
          <div class="clearfix"></div>
          <?php 
          query_posts($query_string.$order.$cat.$date.'&posts_per_page=-1'.$search);
          if ($_REQUEST && !empty($_REQUEST)) {
	         go_filter();}
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="archive-legacy__one archive__one">
            <div class="row">
              <div class="col-sm-3 col-lg-2">
                <div class="archive-legacy__sort">
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
                <?php if ( in_category('129')) { ?>
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
                    $parameter = $parameter . '<span>Theme:&nbsp;';
                    foreach ($choicestheme as $valuetheme => $labeltheme) {
                      $valuetheme = $theme['choices'][$labeltheme];
                      $parametertheme[] = '<a href="https://antsur.ru/ru/nasledie/?theme%5B%5D=' . $labeltheme . '">' . $valuetheme . '</a>';
                    }
                    $parametertheme = implode('<span>, </span>',$parametertheme);
                    $parameter = $parameter . $parametertheme . '</span>';
                  }
                  if(is_array($choicesplace)){
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Place:&nbsp;';
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
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Period:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                  }                
                  if(get_field('genre')){
                    $valuegenre = $genre['value'];
                    $labelgenre = $genre['choices'][ $valuegenre ];
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Genre:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
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
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Pages:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Prev</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Next</span>
            </div>
            <?php endif; ?>
          </div>