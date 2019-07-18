        <div class="archive-annotatsii">
          <div class="archive-annotatsii__wrapper">
            <div class="archive-annotatsii__cell">
              <div class="archive-annotatsii__header">
               <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                      <h1 class="archive-annotatsii__title text-center">Books by metropolitan Anthony of Sourozh</h1>
                    <?php else: ?>
                      <h1 class="archive-annotatsii__title text-center">Книги Митрополита Антония Сурожского</h1>
                  <?php endif; ?>
              </div>
            </div>
            <?php
            if ($_POST['select'] == 'newest') { $order = "&orderby=date&order=DESC"; $s1 = ' selected="selected"'; }
            if ($_POST['select'] == 'title') { $order = "&orderby=title&order=ASC"; $s2 = ' selected="selected"'; }
            global $query_string;
            query_posts($query_string.'&'.$order.'&posts_per_page=-1');
            if ( have_posts() ){
              $count = $wp_query->post_count;}
            ?>
            <div class="archive-annotatsii__content">
            <div class="archive__nav_float_left">
            <?php if($count > 10): ?>
            <div class="archive__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Страницы:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Пред.</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">След.</span>
            </div>
            <?php endif; ?>
              </div>
            <?php if($_POST['select'] == 'title'):?>
            <form method="post" id="order">
            <input type="hidden" name="select" value="newest" />
            <div class="button-group text-right"> 
              <button class="archive-annotatsii__button" type="submit">
              <?php $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"): echo 'Sort by date';
                else: echo 'Сортировать по дате';
              endif; ?>
              </button>
            </div>
            </form>
            <?php else: ?>
            <form method="post" id="order">
            <input type="hidden" name="select" value="title" /> 
            <div class="button-group text-right">
              <button class="archive-annotatsii__button" type="submit">
                <?php $currentlang = get_bloginfo('language');
                if($currentlang=="en-US"): echo 'Sort by A-Z';
                else: echo 'Сортировать по алфавиту';
              endif; ?>
              </button>
            </div>
            </form>
            <?php endif; ?>          
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <div class="archive-annotatsii__cell_width_50 archive__one">
                <div class="archive-annotatsii__one">
                  <div class="archive-annotatsii__thumb"><a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail( array() ); ?></a></div>
                  <div class="archive-annotatsii__description">
                    <div class="archive-annotatsii__author"><?php echo get_field('author'); ?></div><a href="<?php echo get_permalink(); ?>">
                      <div class="archive-annotatsii__name">&#171;<?php the_title(); ?>&#187;</div></a>
                  </div>
                </div>
              </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query()?>
              
              <?php if($count > 10): ?>
            <div class="archive__nav_float_left">
            <div class="archive__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Страницы:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Пред.</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">След.</span>
            </div>
            <?php endif; ?>
              </div> 
            </div>
          </div>
        </div>