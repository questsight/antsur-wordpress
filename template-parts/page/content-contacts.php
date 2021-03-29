<div class="page">
    <div class="container">
        <div class="page__header">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                </div>
            </div>
        </div>
        <div class="page__content">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4  text-center">
                    <?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
                </div>
            </div>
        </div>
    </div>
</div>