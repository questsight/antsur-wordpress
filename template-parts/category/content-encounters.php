<div class="archive">
  <div class="archive__wrapper">
    <div class="archive__header">
      <h1 class="archive__title text-center"><?php echo single_cat_title(); ?></h1>
    </div>
    <div><?php echo category_description(); ?></div>
    <div class="archive__content">
      <div class="row">
        <div class="col-lg-10 col-lg-offset-1 archive-encounters">
          <?php mayak_cats_images(); ?>
        </div>
      </div>
    </div>
  </div>
</div>