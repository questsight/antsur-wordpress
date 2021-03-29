<div class="page">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="page__cell">
        <div class="page__content">
          <?php while ( have_posts() ) : the_post();?>
            <div id="articles">
             <div class="page__nav">
              <?php
                $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"){
                  wp_link_pages(array('before' => '<span>Pages:', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => '', 'previouspagelink' => '<span>Prev</span>', 'separator' => '')); 
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'number', 'separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => ' Next', 'previouspagelink' => '', 'separator' => ''));  
                }
                else{
                  wp_link_pages(array('before' => '<span>Страницы:', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => '', 'previouspagelink' => '<span>Пред.</span>', 'separator' => '')); 
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'number', 'separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => ' След.', 'previouspagelink' => '', 'separator' => '')); 
                }
              ?>
            </div>
            <div class="page__box page__content_text_indent text-left">
              <?php the_content(); endwhile; ?>
            </div>
            <div class="page__nav">
              <?php
                $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"){
                  wp_link_pages(array('before' => '<span>Pages:', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => '', 'previouspagelink' => '<span>Prev</span>', 'separator' => '')); 
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'number', 'separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => ' Next', 'previouspagelink' => '', 'separator' => ''));  
                }
                else{
                  wp_link_pages(array('before' => '<span>Страницы:', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => '', 'previouspagelink' => '<span>Пред.</span>', 'separator' => '')); 
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'number', 'separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'));
                  wp_link_pages(array('before' => '<span>', 'after' => '</span>', 'next_or_number' => 'next', 'nextpagelink' => ' След.', 'previouspagelink' => '', 'separator' => '')); 
                }
              ?>
            </div>
          </div>
        </div>
        <div id="certificate">
            <div class="page__cell">
            <div class="page__content"><img class="center-block" src="<?php echo get_field('img'); ?>"></div>
            </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>