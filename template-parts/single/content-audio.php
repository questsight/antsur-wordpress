<div class="single single-audio" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="single__header">
                   <h1 class="single__title"><?php echo get_field('tit'); ?>.
                   <span class="single-audio__date"> <?php echo get_field('date'); ?></span>
                   </h1>
                </div>              
                <div class="single__content add-font">
                  <?php the_content(); ?>
                  <div class="single-audio__label single__label">
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
                 <?php if(in_category('audiozapisi') || in_category('audio')):?>
                  <div class="single__label">
                  <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>
                  <span>Read the text:  </span>
                  <?php else: ?>
                  <span>Читать текст:  </span>
                  <?php endif; ?>
                  <span>
                  <?php if(get_field('text_link')):?>
                    <a href="<?php echo get_field('text_link'); ?>"><?php echo get_field('text'); ?></a>
                  <?php else: ?>
                    <span><?php echo get_field('text'); ?>, </span>
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
                  <?php endif; ?>
                </div>
                <br>
                <br>
                <div class="single__footer">
                    <?php get_template_part( 'template-parts/single/share' );?>
                </div>
            </div>
        </div>
    </div>
</div>