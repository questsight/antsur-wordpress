<div class="page-sovet">
          <div class="page-sovet__wrapper">
            <div class="page-sovet__cell">
              <div class="page-sovet__header">
                <h1 class="page-sovet__title text-center"><?php the_title(); ?></h1>
              </div>
            </div>
            <div class="page-sovet__content">
              <div class="page-sovet__cell_width_50">
                <div class="page-sovet__one">
                  <div class="page-sovet__foto"><img src="<?php echo get_field('president-photo'); ?>"></div>
                  <div class="page-sovet__description">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"):?>
                        <div class="page-sovet__job">Chair</div>
                      <?php else: ?>
                        <div class="page-sovet__job">Президент</div>
                    <?php endif; ?>
                    <div><?php echo get_field('president-text'); ?></div>
                  </div>
                </div>
              </div>
              <div class="page-sovet__cell_width_50">
                <div class="page-sovet__one">
                  <div class="page-sovet__foto"><img src="<?php echo get_field('director-photo'); ?>"></div>
                  <div class="page-sovet__description">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"):?>
                        <div class="page-sovet__job">Director</div>
                      <?php else: ?>
                        <div class="page-sovet__job">Директор фонда</div>
                    <?php endif; ?>
                    <div><?php echo get_field('director-text'); ?></div>
                  </div>
                </div>
              </div>
              <div class="page-sovet__cell">
                <?php $currentlang = get_bloginfo('language');
                  if($currentlang=="en-US"):?>
                    <div class="page-sovet__job_algin_center">Members of the Council:</div>
                  <?php else: ?>
                    <div class="page-sovet__job_algin_center">Члены совета:</div>
                <?php endif; ?>
              </div>
              <?php
                $args = array( 'post_type' => 'board' );
                $query = new WP_Query( $args );
                while( $query->have_posts() ) {
                  $query->the_post();
                  get_template_part( 'template-parts/content', 'board' );
                } wp_reset_postdata();
              ?>
            </div>
          </div>
        </div>