<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
            <div class="single__content">
              <div class="single__box-book">
                <div class="row">
                  <div class="col-md-3 hidden-sm hidden-xs">
                    <div class="single__thumb-book"><img src="<?php echo get_field('img'); ?>"></div>
                  </div>
                  <div class="col-md-9 col-sm-12">
                    <div class="single__ad">
                      <div class="single__author-book"><?php echo get_field('author'); ?></div>
                      <div class="single__title">&#171;<?php the_title(); ?>&#187;</div>
                      <div class="single__subtitle"><?php echo get_field('subtitle'); ?></div>
                      <div class="single__content">
                        <?php the_content(); ?><br>
                        <div style="background:#afb0b0;color:white;padding:15px 25px;"><?php echo get_field('book'); ?></div>
                      </div>
                      <div class="text-center archive-download__button--group">
                        <?php if(get_field('online')):?>
                        <a class="archive-download__button archive-download__button_bg_add" href="<?php echo get_field('online'); ?>">Читать&nbsp;онлайн</a>
                        <?php endif;?>
                        <?php if(get_field('pdf')):?>
                        <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('pdf'); ?>" download>.pdf</a>
                        <?php endif;?>
                        <?php if(get_field('fb2')):?>
                        <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('fb2'); ?>" download>Cкачать в формате .fb2</a>
                        <?php endif;?>
                        <?php if(get_field('epub')):?>
                        <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('epub'); ?>" download>.epub</a>
                        <?php endif;?>
                      </div>
                      <div class="single__footer">
                        <?php get_template_part( 'template-parts/single/share' );?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </div>
</div>