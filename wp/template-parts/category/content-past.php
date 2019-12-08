        <div class="archive">
          <div class="archive__wrapper">
            <div class="archive__header"></div>
            <div class="archive__content">
            <?php
              if(is_category('past-seminars')){
                query_posts('cat=157&posts_per_page=-1');
              }
              elseif(is_category('proshedshie-seminaryi')){
                query_posts('cat=31&posts_per_page=-1');
              }
              elseif(is_category('past-media')){
                query_posts('cat=193&posts_per_page=-1');
              }
              elseif(is_category('proshedshie-smi')){
                query_posts('cat=173&posts_per_page=-1');
              }
              elseif(is_category('past-presentations')){
                query_posts('cat=187&posts_per_page=-1');
              }
              elseif(is_category('prezentatsii-proshedshie')){
                query_posts('cat=169&posts_per_page=-1');
              }
              while (have_posts()) : the_post();?>
              <div class="archive__single archive__single-past">
                <div class="row">
                  <div class="col-sm-3 hidden-xs archive__thumb"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array() ); ?></a></div>
                  <div class="col-lg-push-7 col-md-2 col-md-push-7 col-sm-3 col-sm-push-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <div class="archive__info archive__info-past">
                      <div class="archive__date"><?php echo get_field('date'); ?></div>
                      <div class="archive__time"><?php echo get_field('time'); ?></div>
                      <div class="archive__sity"><?php echo get_field('city'); ?></div>
                    </div>
                  </div>
                  <div class="col-ld-pull-2 col-md-7 col-md-pull-2 col-sm-6 col-sm-pull-3 col-xs-12">
                    <div class="archive__ad">
                      <?php if ( in_category('173') || in_category('193')) { ?>
                      <a class="archive__title archive__title-past" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?></a>
                     <?php } else { ?>
                      <a class="archive__title archive__title-past" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                     <?php } ?>                    
                      <div class="archive__subtitle"><?php echo get_field('description'); ?></div>
                      <div class="archive__preview"><?php echo get_field('preview'); ?><span>&nbsp;</span>
                      <?php if ( get_field('preview')) { ?>
                      <?php $currentlang = get_bloginfo('language');
                        if($currentlang=="en-US"):?>
                        <span><a class="archive__link archive__link-past" href="<?php echo get_permalink(); ?>">In detail</a></span>
                      <?php else: ?>
                        <span><a class="archive__link archive__link-past" href="<?php echo get_permalink(); ?>">Подробнее</a></span>
                      <?php endif; ?>
                      <?php } ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile;?>
            </div>
          </div>
        </div>