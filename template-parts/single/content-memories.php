        <div class="single" id="post-<?php the_ID(); ?>">
          <div class="single__wrapper">
            <div class="row">
              <div class="col-sm-4">
                <div class="single__thumb-memory"><img class="popup-open" src="<?php echo get_field('img-memory_1'); ?>">
                <?php if(get_field('img-memory_2')):?>
                <img class="popup-open" src="<?php echo get_field('img-memory_2'); ?>">
                <?php endif;?>
                <?php if(get_field('img-memory_3')):?>
                <img class="popup-open" src="<?php echo get_field('img-memory_3'); ?>">
                <?php endif;?>
                </div>
              </div>
              <div class="col-sm-8 col-md-7">
                <div class="single__content">
                  <h1 class="single__author-memory"><?php the_title(); ?></h1>
                  <h2 class="single__title single__title-memory"><?php echo get_field('title-memory'); ?></h2>
                  <div class="single__date-memory"><?php echo get_field('date-memory'); ?></div>
                </div>
                <div class="single__subtitle single__subtitle-memory"><?php echo get_field('preview-memory'); ?></div>
                <div class="single__content add-font">
                  <?php the_content(); ?>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-xs-12">
                <div class="single__content">
                  <?php echo get_field('gallery-memory'); ?>
                </div>
              </div>
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                <div class="single__footer">
                 <?php get_template_part( 'template-parts/single/share' );?>
                </div>
              </div>
            </div>
          </div>
        </div>
