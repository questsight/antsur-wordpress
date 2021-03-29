<div class="archive">
          <div class="archive__wrapper">
            <div class="archive__header">
            <?php if(is_category('events') || is_category('sobyitiya')): ?>
              <div class="archive-conference__box">
                  <div class="archive-conference__button archive-conference__button_width_270" id="button-authors">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"): echo 'Our authors';
                      else: echo 'Наши авторы';
                    endif; ?>
                    <div class="archive-conference__button-icon"><i class="fa fa-2x fa-angle-down"></i></div>
                  </div>
                  <div class="archive-conference__box-hidden" id="box-authors">
                    <div class="archive-conference__tit">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"): echo 'Our authors:';
                      else: echo 'Наши авторы:';
                    endif; ?>
                    </div>
                    <div class="archive-conference__exit" id="exit-authors"><i class="fa fa-times"></i></div>
                    <?php 
                      $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"){
                        $term = '397';
                        $link = 'https://antsur.ru/en/materials/texts-en/';
                      } else {
                        $term = '395';
                        $link = 'https://antsur.ru/ru/materialyi/tekstyi-ru/';
                      }
                      $values = get_meta_values('author', $term);
                      $count = count($values);
                    ?>
                    <div class="row">
                      <div class="col-sm-4">
                      <?php
                        foreach (array_values($values) as $index => $value) {
                          $index = $index + 1;
                          echo '<p><a href="' . $link . '?author=' . $value . '">' . $index . '. ' . $value . '</a></p>';
                          if($count % 3 == 0) {
                            $item1 = $count/3;
                            $item2 = $count/3*2;
                          } else {
                            $item1 = $count/3 + 1;
                            $item2 = $count/3*2 + 1;
                          }
                          if($count > 4 && ($index == $item1 || $index == $item2)) {
                            echo '</div><div class="col-sm-4">';
                          }
                        }
                      ?>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endif; ?> 
            </div>
            <div class="archive__content">
             <?php	
              if(is_category('events')){
                query_posts('cat=145,147,177,185,195&posts_per_page=-1');
              }
              elseif(is_category('sobyitiya')){
                query_posts('cat=37,41,171,159,167&posts_per_page=-1');
              }
              elseif(is_category('seminars')){
                query_posts('cat=145&posts_per_page=-1');
              }
              elseif(is_category('seminaryi')){
                query_posts('cat=41&posts_per_page=-1');
              }
              elseif(is_category('media')){
                query_posts('cat=195&posts_per_page=-1');
              }
              elseif(is_category('smi')){
                query_posts('cat=171&posts_per_page=-1');
              }
              elseif(is_category('presentations')){
                query_posts('cat=185&posts_per_page=-1');
              }
              elseif(is_category('prezentatsii')){
                query_posts('cat=167&posts_per_page=-1');
              }
              elseif(is_category('outings')){
                query_posts('cat=181&posts_per_page=-1');
              }
              elseif(is_category('poezdki')){
                query_posts('cat=163&posts_per_page=-1');
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
                      <a class="archive__title" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?></a>
                     <?php } else { ?>
                      <a class="archive__title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
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
               <?php
                endwhile;
 	            wp_reset_query();
              ?>
              <div class="button-group text-center">
                <?php $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"):?>
                  <button class="archive__button" id="button-en"></button>
                <?php else: ?>
                  <button class="archive__button" id="button-ru"></button>
                <?php endif; ?>
              </div>
              <?php
              if(is_category('events')){
                query_posts('cat=157,179,187,193,183&posts_per_page=-1');
              }
              elseif(is_category('sobyitiya')){
                query_posts('cat=31,173,161,169,165&posts_per_page=-1');
              }
              elseif(is_category('seminars')){
                query_posts('cat=157&posts_per_page=-1');
              }
              elseif(is_category('seminaryi')){
                query_posts('cat=31&posts_per_page=-1');
              }
              elseif(is_category('media')){
                query_posts('cat=193&posts_per_page=-1');
              }
              elseif(is_category('smi')){
                query_posts('cat=173&posts_per_page=-1');
              }
              elseif(is_category('presentations')){
                query_posts('cat=187&posts_per_page=-1');
              }
              elseif(is_category('prezentatsii')){
                query_posts('cat=169&posts_per_page=-1');
              }
              elseif(is_category('outings')){
                query_posts('cat=183&posts_per_page=-1');
              }
              elseif(is_category('poezdki')){
                query_posts('cat=165&posts_per_page=-1');
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
              <?php
              endwhile;
 	          wp_reset_query();
              ?>
            </div>
          </div>
        </div>