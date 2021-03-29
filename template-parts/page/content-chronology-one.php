<div class="page">
    <div class="page__wrapper">
        <div class="page__cell">
            <div class="page__header">
                <h1 class="page__title"><?php the_title(); ?></h1>
            </div>
            <div class="page__cell">
                <div class="page__content add-font">
                    <br>
                    <?php while (have_posts()) : the_post();
                        the_content();
                    endwhile; ?>
                </div>
            </div>
            <div class="page__footer">
              <?php get_template_part( 'template-parts/single/share' );?>
            </div>
        </div>
    </div>
</div>