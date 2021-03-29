<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
	<div class="single__box">
        <div class="row">
            <div class="col-sm-4 hidden-xs">
                <div class="single__thumb"><img src="<?php echo get_field('img'); ?>"></div>
            </div>
            <div class="col-sm-8 col-md-5">
                <div class="single__header">
                    <h1 class="single__title"><?php echo get_field('tit'); ?></h1>
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