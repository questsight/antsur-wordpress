        <div class="page page-foto">
          <div class="page__wrapper">
            <div class="page__cell">
              <div class="page__header">
                <h1 class="page__title text-center"><?php the_title(); ?></h1>
              </div>
              <div class="page__cell">
                <div class="page__content page-foto__content">
                  <div class="row">
                  <?php $stati_children = new WP_Query(array(
                    'post_type' => 'page',
                    'post_parent' => get_the_ID(),
                    'order' => 'asc'
                    ) );
                    if($stati_children->have_posts()):
                    $x = 0;
                    while($stati_children->have_posts()): $stati_children->the_post();
                    $x = $x + 1; ?>
                    <div class="col-sm-4">
                      <div class="page-foto__item"><a href="<?php echo get_the_permalink(); ?>"><img class="center-block" src="<?php echo get_the_post_thumbnail_url(); ?>"></a>
                        <p class="text-center"><a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title();?></a></p>
                      </div>
                    </div>
                    <?php if($x == 3 || $x == 5){echo '<div class="col-sm-2"></div>';} ?>
                    <?php endwhile; endif; wp_reset_query(); ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>