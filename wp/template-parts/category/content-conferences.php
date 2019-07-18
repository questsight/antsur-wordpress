        <div class="archive archive-conference">
          <div class="archive__wrapper">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="archive-conference__title-main"><?php echo single_cat_title(); ?></h1>
                <div class="archive__content"><?php echo category_description(); ?></div>
                <div class="archive-conference__box">
                  <div class="archive-conference__button" id="button-authors">
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
                      $values = array_unique($values);
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
                            $item1 = ceil($count/3);
                            $item2 = ceil($count/3)*2;
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
                <div class="archive__content"><?php echo get_field('text1', "category_".get_query_var('cat')); ?></div>
                <div class="archive-conference__content"><?php echo get_field('text2', "category_".get_query_var('cat')); ?></div>
                 <div class="archive-conference__box">
                  <div class="archive-conference__button" id="button-tags">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"): echo 'Tags';
                      else: echo 'Теги';
                    endif; ?>
                    <div class="archive-conference__button-icon"><i class="fa fa-2x fa-angle-down"></i></div>
                  </div>
                  <div class="archive-conference__box-hidden" id="box-tags">
                    <div class="archive-conference__tit">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"): echo 'Tags:';
                      else: echo 'Теги:';
                    endif; ?>
                    </div>
                    <div class="archive-conference__exit" id="exit-tags"><i class="fa fa-times"></i></div>
                    <?php $tags = get_tags();
                      foreach ( $tags as $tag ) {
                        $tag_link = get_tag_link( $tag->term_id );
                        $html .= "<a href='{$tag_link}'>{$tag->name}</a><span>, </span>";
                      }
                    echo $html; ?>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="archive__header"></div>
                <div class="archive__content"></div>
                <?php 
                if(is_category('konferentsii')){
                  query_posts('cat=159,161&posts_per_page=-1');
                }
                elseif(is_category('predstoyaschie-konferentsii')){
                  query_posts('cat=159&posts_per_page=-1');
                }
                elseif(is_category('proshedshie-konferentsii')){
                  query_posts('cat=161&posts_per_page=-1');
                }
                elseif(is_category('conferences')){
                  query_posts('cat=179,177&posts_per_page=-1');
                }
                elseif(is_category('past-conferences')){
                  query_posts('cat=179&posts_per_page=-1');
                }
                elseif(is_category('upcoming-conferences')){
                  query_posts('cat=177&posts_per_page=-1');
                }
                if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-xs-6 archive-conference__one">
                  <div class="archive-conference__date"><?php the_date('Y'); ?></div>
                  <a href="<?php echo get_permalink(); ?>"><div class="archive-conference__thumb"><?php the_post_thumbnail( array() ); ?></div></a>
                  <div class="archive-conference__title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
                </div>
                <?php endwhile; endif; ?>
              </div>
            </div>
          </div>
        </div>
