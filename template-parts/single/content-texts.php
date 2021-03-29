<div class="single" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 single__box">
                <div class="single__header">
                   <div class="single__author"><?php echo get_field('author'); ?></div>                 
                   <h1 class="single__title single__title-text"><?php echo get_field('tit'); ?></h1>
                   <?php if(in_category('texts') || in_category('tekstyi')):?>
                   <div class="single__description"><?php echo get_field('description'); ?></div>
                   <div class="single__date_color_theme"><?php echo get_field('date'); ?></div>
                   <div class="single__label">
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
                    $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"){
                      $parameter = $parameter . '<span>Theme:&nbsp;';
                    }
                    else {
                      $parameter = $parameter . '<span>Тема:&nbsp;';  
                    }
                    
                    foreach ($choicestheme as $valuetheme => $labeltheme) {
                      $valuetheme = $theme['choices'][$labeltheme];
                      $parametertheme[] = '<a href="https://antsur.ru/ru/nasledie/?theme%5B%5D=' . $labeltheme . '">' . $valuetheme . '</a>';
                    }
                    $parametertheme = implode('<span>, </span>',$parametertheme);
                    $parameter = $parameter . $parametertheme . '</span>';
                  }
                  if(is_array($choicesplace)){
                    if($currentlang=="en-US"){
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Place:&nbsp;';
                    }
                    else {
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Место:&nbsp;';  
                    }
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
                    if($currentlang=="en-US"){
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Period:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                    }
                    else {
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Период:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>'; 
                    }
                  }                
                  if(get_field('genre')){
                    $valuegenre = $genre['value'];
                    $labelgenre = $genre['choices'][ $valuegenre ];
                    if($currentlang=="en-US"){
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Genre:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
                    }
                    else {
                      $parameter = $parameter . '<span> &nbsp;&nbsp;Жанр:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
                    }
                  }
                  echo $parameter;
                ?>
                   </div>
                   <?php endif; ?>
                </div>              
                <div class="single__content add-font">
                  <?php if(in_category('texts') || in_category('tekstyi')):?>
                  <div class="single__thumb_float_left">
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="popup-open">
                  </div>
                  <?php endif; ?>
                  <?php the_content(); ?>
                  <?php if(in_category('texts') || in_category('tekstyi')):?>
                  <div class="single__label">
                  <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>
                  <span>Listen to audio:  </span>
                  <?php else: ?>
                  <span>Слушать аудиозапись:  </span><?php endif; ?><span>
                  <?php if(get_field('audio_link')):?>
                    <a href="<?php echo get_field('audio_link'); ?>"><?php echo get_field('audio'); ?></a>
                  <?php else: ?>
                    <span><?php echo get_field('audio'); ?></span>
                  <?php endif; ?>
                  </span>
                  <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>
                  <span> Watch video: </span>
                  <?php else: ?>
                  <span>, смотреть видеозапись: </span>
                  <?php endif; ?>
                  <span>
                  <?php if(get_field('video_link')):?>
                    <a href="<?php echo get_field('video_link'); ?>"><?php echo get_field('video'); ?></a>
                  <?php else: ?>
                    <span><?php echo get_field('video'); ?></span>
                  <?php endif; ?>
                  </span></div>
                  <div class="single__tags"><?php the_tags('#', ', #'); ?></div> 
                  <?php endif; ?>
                </div>
                <div class="single__footer">
                    <?php get_template_part( 'template-parts/single/share' );?>
                </div>
            </div>
        </div>
    </div>
</div>