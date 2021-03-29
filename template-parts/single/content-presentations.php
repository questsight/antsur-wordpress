<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
	<div class="single__box">
        <div class="row">
            <div class="col-sm-3 hidden-xs">
                
                <div class="single__thumb-book"><img src="<?php echo get_field('img'); ?>"></div>
            </div>
            <div class="col-sm-9 col-md-6">
                <div class="single__header">
                    
                    <h1 class="single__title"><?php the_title(); ?>. 
                      <span><?php echo get_field('description'); ?></span>
                    </h1>
                    
                </div>
                <div class="single__content">
                    <?php the_content(); ?>
                </div>
                <div class="single__footer">
                    <?php get_template_part( 'template-parts/single/share' );?>
                </div>
            </div>
        </div>
    </div>
</div>
</div>