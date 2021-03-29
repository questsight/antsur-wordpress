<div class="single" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="single__header">
                    <h1 class="single__title"><?php the_title(); ?></h1>
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