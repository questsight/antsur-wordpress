<div class="page">
    <div class="container">
        <div class="page__header">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h1 class="page__title text-center"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
        <div class="page__content">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 text-left">
                    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>