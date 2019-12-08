<div class="single" id="post-<?php the_ID(); ?>">
  <div class="single__wrapper">
	  <div class="single__box">
      <div class="row">
        <?php if(has_post_thumbnail()): ?>
        <div class="col-sm-4 hidden-xs">
          <div class="single__thumb-fact">
             <img src="<?php the_post_thumbnail_url(); ?>">
          </div>
        </div>
        <div class="col-sm-8">
        <?php else: ?>
        <div class="col-sm-12">
        <?php endif; ?>
          <div class="single__header">
            <h1 class="single__title-fact"><?php the_title(); ?></h1>
            <div class="single__date_color_theme"><?php echo get_field('date'); ?></div>
          </div>
          <div class="single__content">
            <?php the_content(); ?>
          </div>      
        </div>
        <div class="col-sm-4 hidden-xs"></div>
        <div class="col-sm-8">         
          <div class="single__footer">
            <?php get_template_part( 'template-parts/single/share' );?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>