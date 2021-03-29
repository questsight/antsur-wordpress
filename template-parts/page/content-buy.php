<div class="page  page-bay">
    <div class="page__wrapper">
        <div class="page__cell">
            <div class="page__header">
                <h1 class="page__title text-center"><?php echo get_field('title'); ?></h1>
            </div>
            <div class="page__cell">
                <div class="page-bay__content">
                   <div class="row">
                    <div class="col-sm-6">
                      <?php echo get_field('list'); ?>
                    </div>  
                    <div class="col-sm-6">
                      <div class="page-bay__box">
                        <?php while (have_posts()) : the_post();
                        the_content();
                        endwhile; ?>
                      </div>  
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>