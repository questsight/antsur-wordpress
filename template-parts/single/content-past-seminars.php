<div class="single" id="post-<?php the_ID(); ?>">
  <div class="single__wrapper">
    <div class="row">
      <div class="col-sm-4">
        <div class="single__thumb"><img src="<?php echo get_field('img'); ?>"></div>
      </div>
      <div class="col-sm-8 col-md-7">
        <div class="single__content single__content_width_400"><div class="add-font_font_title">
        <div><?php echo get_field('annotate'); ?></div>
        <div class="single_date"><div class="add-font_font_title-bold"><?php echo get_field('date'); ?>
          <span>&nbsp;в&nbsp;</span><span><?php echo get_field('time'); ?></span></div></div>
        </div></div>
        <div class="single__annotate"><?php echo get_field('description'); ?></div>
        <h1 class="single__title">&#171;<?php the_title(); ?>&#187;</h1>
        <div class="single__content">
          <?php the_content(); ?>
        </div>
        <div class="single__line"></div>
        <div class="single__content">
          <?php echo get_field('video'); ?>
        </div>
        <div class="single__review-title">
          <div class="single__review-seminar-link"><?php echo get_field('review'); ?></div>
          <div class="single__review-name-link"><?php echo get_field('review-name'); ?></div>
        </div>
        <div class="single__review">
          <div class="single__box">
            <div class="single__review-close"><div>&#215;</div></div>
            <div class="single__review-seminar add-title-font"><?php echo get_field('review'); ?></div>
            <div class="single__review-name add-title-font"><?php echo get_field('review-name'); ?></div>
            <div class="single__review-text add-font"><?php echo get_field('review-text'); ?></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-xs-12">
        <div class="single__content">
          <?php echo get_field('foto'); ?>
        </div>
        <div class="single__footer">
          <?php get_template_part( 'template-parts/single/share' );?>
        </div>
      </div>
    </div>
  </div>
</div>