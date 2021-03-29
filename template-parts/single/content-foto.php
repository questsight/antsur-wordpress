<div class="page">
    <div class="page__wrapper">
        <div class="page__cell">
            <div class="page__header">
              <h1 class="page__title page-foto__title page-foto__title text-center"><?php the_title(); ?></h1>
            </div>
            <div class="page__cell">
              <div class="page__content">
                  <div class="page__envira">
                  <?php the_content(); ?>
                  </div>
              </div>
            </div>
            <div class="envira-share center-block">
  <?php get_template_part( 'template-parts/single/share' );?>
</div>
        </div>
    </div>
</div>