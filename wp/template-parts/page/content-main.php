<div class="main">
  <div class="main__wrapper">
    <div class="main__cell">
    <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
      <a class="main__link main__link_position_left" href="<?php echo get_home_url(); ?>/memories/">
        <div class="main__one main-left"><?php while (have_posts()) : the_post(); the_content(); endwhile; ?></div>
      </a>
    <?php else: ?>  
      <a class="main__link main__link_position_left" href="<?php echo get_home_url(); ?>/vospominaniya/">
        <div class="main__one main-left"><?php the_content(); ?></div>
      </a>
    <?php endif; ?>  
    </div>
    <?php	
      query_posts('cat=31,41,145,157,159,161,177,179,406,408&showposts=1');
      while (have_posts()) : the_post();?>
      <div class="main__cell">
        <a class="main__link main__link_position_center" href="<?php echo get_permalink(); ?>">
          <div class="main__one main-center">
            <?php the_post_thumbnail( array() ); ?>
            <div class="main-center__overlay">
              <div class="main-center__date"><?php echo get_field('date'); ?></div>
              <div class="main-center__time"><?php echo get_field('time'); ?></div>
              <div class="main-center__title">&laquo;<?php the_title(); ?>&raquo;</div>
              <div class="main-center__description"><?php echo get_field('description'); ?></div>
            </div>
          </div>
        </a>
      </div>        
    <?php
	    endwhile;
 	    wp_reset_query();
	  ?>
    <div class="main__cell">
      <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
      <a class="main__link" href="<?php echo get_home_url(); ?>/legacy/">
        <div class="main__one main-right"><?php echo get_field('text_heritage'); ?></div>
      </a>
    <?php else: ?>  
      <a class="main__link" href="<?php echo get_home_url(); ?>/nasledie/">
        <div class="main__one main-right"><?php echo get_field('text_heritage'); ?></div>
      </a>
    <?php endif; ?> 
    </div>
  </div>
</div>