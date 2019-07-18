<div class="archive">
          <div class="archive__wrapper">
            <div class="archive__header">
              <div class="row">
                <div class="col-sm-6">
                  <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                      <div class="archive__title">Memories about metropolitan Anthony of Sourozh</div>
                    <?php else: ?>
                      <div class="archive__title">Воспоминания о Митрополите Антонии Сурожском</div>
                  <?php endif; ?>
                  <div class="archive__preview archive__preview_size_xs"><?php echo category_description( $category_id ); ?></div>
                </div>
              </div>
            </div>
            <div class="archive__content">
              <div class="row">
              <?php	
              if(is_category('memories')){
                query_posts('cat=127&posts_per_page=-1');
              }
              elseif(is_category('vospominaniya')){
                query_posts('cat=97&posts_per_page=-1');
              }
              while (have_posts()) : the_post();?>
                <div class="col-sm-6 archive-memory">
                  <a class="hidden-xs" href="<?php echo get_permalink(); ?>">
                    <div class="archive-memory__img" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
                  </a>
                  <div archive-memory__text>
                    <div class="archive__author-memory"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?><span>.&nbsp;</span><span class="archive__title-memory"><?php echo get_field('title-memory'); ?></span></a></div>
                    <div class="archive__preview"><?php echo get_field('preview-memory'); ?></div>
                  </div>
                </div>
                <?php endwhile;?>
              </div>
            </div>
          </div>
        </div>