        <div class="archive archive-download">
          <div class="archive__wrapper">
            <div class="archive__header"> 
              <h1 class="text-center archive__title"><?php echo single_cat_title(); ?></h1>
            </div>
            <div class="archive__content">
              <div class="row">
                <div class="col-lg-push-2 col-lg-8">
                  <?php	query_posts('cat=' . get_queried_object()->term_id .'&posts_per_page=-1'); while (have_posts()) : the_post();?>
                  <div class="archive-download__one">
                    <h2 class="archive-download__subtitle text-center"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="text-center"><?php echo get_field('preview'); ?></div>
                    <div class="text-center archive-download__button--group">
                    <?php if(get_field('online')):?>
                    <a class="archive-download__button archive-download__button_bg_add" href="<?php echo get_field('online'); ?>">Читать&nbsp;онлайн</a>
                    <?php endif;?>
                    <?php if(get_field('pdf')):?>
                    <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('pdf'); ?>" download>.pdf</a>
                    <?php endif;?>
                    <?php if(get_field('fb2')):?>
                    <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('fb2'); ?>" download>.fb2</a>
                    <?php endif;?>
                    <?php if(get_field('epub')):?>
                    <a class="archive-download__button archive-download__button_bg_theme" href="<?php echo get_field('epub'); ?>" download>.epub</a>
                    <?php endif;?>
                    </div>
                  </div>
                  <?php endwhile;?>
                </div>
              </div>
            </div>
            <div class="archive__footer"></div>
          </div>
        </div>