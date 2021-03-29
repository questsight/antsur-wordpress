<div class="archive">
          <div class="archive__wrapper">
            <div class="archive__header"></div>
            <div class="archive__content">
             <?php
              if(is_category('new-books')){
                query_posts('cat=147&posts_per_page=-1');
              }
              elseif(is_category('novyie-knigi')){
                query_posts('cat=37&posts_per_page=-1');
              }
              elseif(is_category('upcoming-seminars')){
                query_posts('cat=145&posts_per_page=-1');
              }
              elseif(is_category('predstoyaschie-seminaryi')){
                query_posts('cat=41&posts_per_page=-1');
              }
              elseif(is_category('upcoming-media')){
                query_posts('cat=195&posts_per_page=-1');
              }
              elseif(is_category('predstoyaschie-smi')){
                query_posts('cat=171&posts_per_page=-1');
              }
              elseif(is_category('upcoming-presentations')){
                query_posts('cat=185&posts_per_page=-1');
              }
              elseif(is_category('predstoyaschie-prezentatsii')){
                query_posts('cat=167&posts_per_page=-1');
              }
              elseif(is_category('news')){
                query_posts('cat=408&posts_per_page=-1');
              }
              elseif(is_category('novosti')){
                query_posts('cat=406&posts_per_page=-1');
              }
              while (have_posts()) : the_post();?>
              <div class="archive__single">
                <div class="row">
                  <div class="col-sm-3 hidden-xs archive__thumb"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array() ); ?></a></div>
                  <div class="col-lg-push-7 col-md-2 col-md-push-7 col-sm-3 col-sm-push-6 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <div class="archive__info">
                      <div class="archive__date"><?php echo get_field('date'); ?>
                      <?php echo get_field('publishing'); ?></div>
                      <div class="archive__time"><?php echo get_field('time'); ?>
                      <?php echo get_field('year'); ?>
                      </div>
                      <div class="archive__city"><?php echo get_field('city'); ?>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-pull-2 col-md-7 col-md-pull-2 col-sm-6 col-sm-pull-3 col-xs-12">
                    <div class="archive__ad">
                     <div class="single__author-book"><?php echo get_field('author'); ?></div>
                      <?php if ( in_category('171') || in_category('195')) { ?>
                      <a class="archive__title archive__title-past" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?></a>
                     <?php } else { ?>
                      <a class="archive__title archive__title-past" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                     <?php } ?>
                      <div class="archive__subtitle"><?php echo get_field('description'); ?></div>
                      <div class="archive__preview"><?php echo get_field('preview'); ?><span>&nbsp;</span>
                      <?php if ( get_field('preview')) { ?>
                      <?php $currentlang = get_bloginfo('language');
                        if($currentlang=="en-US"):?>
                        <span><a class="archive__link" href="<?php echo get_permalink(); ?>">In detail</a></span>
                      <?php else: ?>
                        <span><a class="archive__link" href="<?php echo get_permalink(); ?>">Подробнее</a></span>
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