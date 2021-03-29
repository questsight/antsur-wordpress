        <div class="single single-conference">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="single-conference__header text-center center-block">
                  <div class="single_date"><?php echo get_field('date'); ?></div>
                  <div class="single-conference__description"><?php echo get_field('description-top'); ?></div>
                  <h1 class="single-conference__title"><?php echo get_field('title'); ?></h1>
                  <div class="single-conference__description"><?php echo get_field('description-bottom'); ?></div>
                </div>
              </div>
              <div class="hidden-xs col-sm-5">
                <div class="single-conference__thumb"><img src="<?php echo get_field('img'); ?>"></div>
              </div>
              <div class="col-xs-12 col-sm-7 col-md-6">
                <div class="single__content single-conference__content">
                <?php if(get_field('promptly')): ?>
                <div class="single-conference__promptly"><?php echo get_field('promptly'); ?></div>
                <div class="single-conference__line"></div>
                <?php endif; ?>
                <?php $currentlang = get_bloginfo('language');
                  if($currentlang=="en-US"):?>
                  <h2 class="single-conference__title-link" id="program-tit">Programme and proceedings</h2>
                <?php else: ?>
                  <h2 class="single-conference__title-link" id="program-tit">ПРОГРАММА И МАТЕРИАЛЫ</h2>
                <?php endif; ?>
                  <div class="single-conference__text_size_14" id="program-link"><?php echo get_field('program-link'); ?></div>
                <?php if($currentlang=="en-US"):?>
                  <h2 class="single-conference__title-link" id="report-tit">Reviews and reports</h2>
               <?php else: ?>   
                  <h2 class="single-conference__title-link" id="report-tit">ОТЗЫВЫ И ОТЧЕТЫ</h2>
               <?php endif; ?>   
                  <div class="single-conference__text_size_14" id="report-link"><?php echo get_field('report-link'); ?></div>
                <?php if($currentlang=="en-US"):?>  
                  <h2 class="single-conference__title-link-no">Exhibitions</h2>
                <?php else: ?>  
                  <h2 class="single-conference__title-link-no">ВЫСТАВКИ</h2>
                <?php endif; ?>  
                  <div class="single-conference__link"><?php echo get_field('exhibition-link'); ?></div>
                <?php if($currentlang=="en-US"):?>   
                  <a href="<?php echo get_field('photogallery-link'); ?>"><h2 class="single-conference__title-link">Photographs</h2></a>
                <?php else: ?>  
                  <a href="<?php echo get_field('photogallery-link'); ?>"><h2 class="single-conference__title-link">ФОТОГРАФИИ</h2></a>
                <?php endif; ?>  
                  <div class="single-conference__line"></div>
                  <?php if( get_field('reg') ) : ?>
                    <?php $currentlang =        get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                      <p>Admission is free but you are strongly advised to fill in the registration form.</p>
                      <button class="single__button button_bg_theme">Registration</button>
                    <?php else: ?>
                      <p>Вход на конференцию свободный, но оргкомитет рекомендует регистрироваться, чтобы всем хватило сидячих мест.</p>
                      <button class="single__button button_bg_theme">Регистрация</button>
                      <div class="wpcf7-response-output wpcf7-display-none"></div>
                    <?php endif; ?>
                  <div class="single-conference__line"></div>
                  <?php endif; ?>
                  <div class="single-conference__text">
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
              <div class="clearfix"> </div>
              <div class="col-sm-5">   
                <div class="single__footer">
                  <?php get_template_part( 'template-parts/single/share' );?>
                </div>
              </div>
              <div class="single__form-box">
                <div class="single__form">
                  <div class="single__form-close">&times;</div>
                  <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                    <p>Registration</p>
                  <?php else: ?>
                    <p>Регистрация</p>
                  <?php endif; ?>
                  <div class="single__form-name">&#171;<?php the_title(); ?>&#187;</div>
                  <br>
                    <?php 
                    $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"){
                      echo do_shortcode( '[contact-form-7 id="1364" title="Регистрация на мероприятие (английская версия)"]' );
                    }
                    else{
                      echo do_shortcode( '[contact-form-7 id="1333" title="Регистрация на мероприятие"]' );
                    } ?>
                </div>
              </div>
            </div>
          </div>
        </div>