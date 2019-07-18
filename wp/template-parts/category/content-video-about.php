<div class="archive-legacy">
  <div class="archive-legacy__wrapper">
    <div class="archive-legacy__header">
      <?php if ( is_category('39')) { ?>
      <h1 class="archive-legacy__title">Весь архив</h1>
      <?php } else { ?>
      <h1 class="archive-legacy__title"><?php echo single_cat_title(); ?></h1>
      <?php } ?> 
    </div>
    <div class="archive-legacy__content">
      <div class="row">
        <div class="col-sm-6">
          <?php if ( is_category('381')) { ?>
          <div class="archive-legacy__switcher switcher">
            <span class="switcher__title switcher__title-active">О митрополите Антонии</span>
            <div class="switcher__box">
              <a href="<?php echo get_category_link('381');?>"><div class="switcher__link switcher__link-left switcher__link-active"></div></a>
              <a href="<?php echo get_category_link('17');?>"><div class="switcher__link switcher__link-right">"></div></a>
            </div>
            <span class="switcher__title">C митрополитом Антонием</span>
          </div>
          <?php } else if(is_category('383')) { ?>
          <div class="archive-legacy__switcher switcher">
            <span class="switcher__title switcher__title-active">About Metropolitan Anthony</span>
            <div class="switcher__box">
              <a href="<?php echo get_category_link('383');?>"><div class="switcher__link switcher__link-left switcher__link-active"></div></a>
              <a href="<?php echo get_category_link('133');?>"><div class="switcher__link switcher__link-right">"></div></a>
            </div>
            <span class="switcher__title">With metropolitan Anthony</span>
          </div>
          <?php } ?>
          <div class="clearfix"></div>
          <br><br>
          <?php	
            if(is_category('video-about')){
              query_posts('cat=383&posts_per_page=-1');
            }
            elseif(is_category('videozapisi-o')){
              query_posts('cat=381&posts_per_page=-1');
            }
            while (have_posts()) : the_post();?>
          <div class="archive-legacy__one">
            <div class="row">
              <div class="col-sm-3 col-lg-2">
                <div class="archive-legacy__sort">
                <?php if ( in_category('383')) { ?>
                  <i class="fa fa-file-video-o" aria-hidden="true"></i>
                  <p>Video</p>
                <?php } ?>
                <?php if ( in_category('381')) { ?>
                  <i class="fa fa-file-video-o" aria-hidden="true"></i>
                  <p>Видео</p>
                <?php } ?>
                </div>
              </div>
              <div class="col-sm-9 col-lg-10"><a class="archive-legacy__name" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                <div class="archive-legacy__description add-title-font"><?php echo get_field('description'); ?></div>
                <div class="archive-legacy__description add-font"><?php the_excerpt(); ?></div>
              </div>
            </div>
          </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</div>