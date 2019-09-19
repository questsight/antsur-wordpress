<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
        <div class="row">
            <div class="col-sm-4">
                <div class="single__thumb"><img src="<?php echo get_field('img'); ?>"></div>
            </div>
            <div class="col-sm-8 col-md-7">
                <div class="single__header">
                  <div class="single_date"><div class="add-font_font_title-bold"><?php echo get_field('date'); ?>
                  <span>&nbsp;в&nbsp;</span><span><?php echo get_field('time'); ?></span></div></div>
                </div>
                <div class="single__content single__content_width_400"><div class="add-font_font_title">
                  <span><?php echo get_field('annotate'); ?></span>
                  <span>&nbsp;</span>
                  <span><?php echo get_field('annotate-new'); ?></span>
                  </div></div>
                <div class="single__header">
                    <h1 class="single__title">&#171;<?php the_title(); ?>&#187;</h1>
                </div>
                <?php if( get_field('reg') ) : ?>
                  <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                    <button class="single__button button_bg_theme">Registration</button>
                  <?php else: ?>
                    <button class="single__button button_bg_theme">Регистрация</button>
                  <?php endif; ?>
                <?php endif; ?>
                <div class="single__content">
                    <?php the_content(); ?>
                </div>
                <div class="single__content">
                    <?php echo get_field('map'); ?>
                </div>
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
                  <form><br>
                    <?php 
                    $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"){
                      echo do_shortcode( '[contact-form-7 id="1364" title="Регистрация на мероприятие (английская версия)"]' );
                    }
                    else{
                      echo do_shortcode( '[contact-form-7 id="1333" title="Регистрация на мероприятие"]' );
                    } ?>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>