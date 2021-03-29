<div class="single" id="post-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="single__header">
                   <div class="single__author"><?php echo get_field('author'); ?></div>
                   <h1 class="single__title single__title-text"><?php the_title(); ?></h1>
                </div>              
                <div class="single__content add-font">
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
                  <?php the_content(); ?>
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
                <div class="single__footer"></div>
            </div>
        </div>
    </div>
</div>