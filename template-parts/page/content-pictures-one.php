<div class="page">
    <div class="page__wrapper">
        <div class="page__cell">
            <div class="page__header">
                <?php $currentlang = get_bloginfo('language');
                  if($currentlang=="en-US"):?>
                  <h1 class="page__title page-foto__title page-foto__title text-center">Period <?php the_title(); ?></h1>
                  <?php else: ?>
                  <h1 class="page__title page-foto__title text-center">Период <?php the_title(); ?></h1>
                <?php endif; ?>
            </div>
            <div class="page__cell">
                <div class="page__content">
                   <div class="page__envira">
                    <?php while (have_posts()) : the_post();
                        the_content();
                    endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="envira-share center-block">
  <?php get_template_part( 'template-parts/single/share' );?>
</div>
        </div>
    </div>
</div>