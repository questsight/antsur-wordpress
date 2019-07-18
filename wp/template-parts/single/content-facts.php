<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
	<div class="single__box">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <div class="single__thumb-fact"><img src="<?php echo get_field('img'); ?>"></div>
            </div>
            <div class="col-sm-8 col-md-5">
                <div class="single__header">
                   <?php if ( get_field('new-archive') ) { ?>
                      <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"):?>
                      <h1 class="single__title-fact">Archive news: 
                        <span><?php echo get_field('tit-archive'); ?></span>
                      </h1>
                      <?php else: ?>
                      <h1 class="single__title-fact">Новое в архиве: 
                        <span><?php echo get_field('tit-archive'); ?></span>
                      </h1>
                      <?php endif; ?>
                      <?php } else { ?>
                      <h1 class="single__title-fact"><?php the_title(); ?></h1>
                      <div class="single__date_color_theme"><?php echo get_field('date'); ?></div>
                     <?php } ?>
                </div>
                <div class="single__content">
                    <?php the_content(); ?>
                </div>
                
            </div>
          <div class="col-sm-4 hidden-xs"></div>
            <div class="col-sm-8">
               <?php echo get_field('gallery'); ?>           
            <div class="single__footer">
                <?php get_template_part( 'template-parts/single/share' );?>
            </div>
            <div>
        </div>
    </div>
</div>
</div>