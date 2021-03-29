<div class="archive archive-encounters">
  <div class="archive__wrapper">
    <div class="archive__header">
      <h1 class="archive__title"><?php echo single_cat_title(); ?></h1>
    </div>
    <div class="archive__content">
      <div class="row">
        <div class="col-md-4 hidden-sm hidden-xs">
          <?php
            $term = get_category(get_query_var('cat'));
            $cat_id = $term->cat_ID;
            $image_id = get_term_meta($cat_id, 'id-cat-images', true);
            echo '<div class="archive-encounters__thumb">'.wp_get_attachment_image($image_id, 'full').'</div>';
          ?> 
          <div class="archive-encounters__inscription"><?php if(get_field('img-tit', "category_".get_query_var('cat'))){echo get_field('img-tit', "category_".get_query_var('cat'));}else{echo single_cat_title();} ?></div>
        </div>
        <div class="col-md-8 col-sm-12">
          <div class="archive-encounters__description"><?php echo category_description(); ?></div>
          <?php
          function my_excerpt_length1( $length ) {
	               return 100;
              }
              add_filter( 'excerpt_length', 'my_excerpt_length1' );
          ?>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="archive-encounters__one">
            <?php if(get_field('tit-cat')): ?>
            <div class="archive-encounters__tit-cat">
            <h2><?php echo get_field('tit-cat'); ?></h2>
            </div>
            <?php endif; ?>
            <a href="<?php echo get_permalink(); ?>">
              <div class="archive__author"><?php echo get_field('author'); ?></div>
              <h2 class="archive-encounters__name"><?php echo get_field('tit'); ?>. <?php echo get_field('date'); ?></h2></a>
            <div class="archive-encounters__preview add-font"><?php the_excerpt(); ?></div>
            <?php $currentlang = get_bloginfo('language');
              if($currentlang=="en-US"):?>
              <a href="<?php echo get_permalink(); ?>">Read completely</a>
            <?php else: ?>
              <a href="<?php echo get_permalink(); ?>">Читать полностью</a>
            <?php endif; ?>
          </div>
          <?php endwhile; endif; ?>
          <div class="archive-encounters__link">
            <?php $currentlang = get_bloginfo('language');
              if($currentlang=="en-US"):?>
              <h2>References to other sources of information</h2>
            <?php else: ?>
              <h2>Ссылки на другие источники</h2>
            <?php endif; ?>
            <?php echo get_term_meta( $term->term_id, 'cl_category_link', 1 ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>