        <div class="page page-friendes">
          <div class="page__wrapper">
            <div class="page__cell">
              <div class="page__header">
                <h1 class="page__title"><?php the_title(); ?></h1>
                <div class="page-friendes__subtitle"><?php echo get_field('subtitle'); ?></div>
              </div>
              <div class="page__cell">
                <div class="page-friendes__content">
                  <div class="row">
                    <div class="col-sm-6"><img src="<?php echo get_the_post_thumbnail_url(); ?>"></div>
                    <div class="col-sm-4 page-friendes__description"><?php echo get_field('description'); ?></div>
                  </div>
                </div>
                <div class="page-friendes__content">
                  <div class="row">
                    <div class="col-sm-6"><?php echo get_field('pictures1'); ?></div>
                    <div class="col-sm-4 page-friendes__text"><?php echo get_field('text'); ?></div>
                  </div>
                </div>
                <div class="page-friendes__content">
                  <div class="page-friendes__subtitle"><?php echo get_field('tit2'); ?></div>
                </div>
                <div class="page-friendes__content">
                  <div class="row">
                    <div class="col-sm-6"><?php echo get_field('pictures2'); ?></div>
                    <div class="col-sm-4 page-friendes__text"><?php while (have_posts()) : the_post();
                        the_content();
                    endwhile; ?></div>
                  </div>
                </div>
                <div class="single__footer">
                  <?php get_template_part( 'template-parts/single/share' );?>
                </div>
              </div>
            </div>
          </div>
        </div>