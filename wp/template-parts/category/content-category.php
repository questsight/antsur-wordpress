<div class="page">
    <div class="page__wrapper">
        <div class="page__cell">
            <div class="page__header">
                <h1 class="page__title"><?php echo single_cat_title(); ?></h1>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="page__cell">
                <div class="page__content">
                    <a href="<?php echo get_permalink(); ?>">
                    <h3 class="category__name name"><?php the_title(); ?></h3>
                    </a>
                <div class="category__description description">
                  <?php the_excerpt(); ?>
                </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>