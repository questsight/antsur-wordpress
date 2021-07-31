        <div class="page page-friendes">
          <div class="page__wrapper">
            <div class="page__cell">
              <div class="page__header">
                <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"): ?>
                <div class="archive-legacy__switcher switcher"><span class="page__title">How to help - </span><span class="page__title_font_italic page__title-active_font_italic">Voluntary help </span>
                  <div class="switcher__box">
                    <a href="<?php echo get_page_link('664');?>"><div class="switcher__link switcher__link-left switcher__link-active"></div></a>
                    <a href="<?php the_permalink('1704');?>"><div class="switcher__link switcher__link-right"></div></a>
                  </div><span class="page__title_font_italic">Financial support</span>
                </div>
                <?php else: ?>
                <div class="archive-legacy__switcher switcher"><span class="page__title">Как помочь - </span><span class="page__title_font_italic page__title-active_font_italic">Делами </span>
                  <div class="page__title_font_italic"><a href="<?php echo get_page_link('1704');?>">Деньгами &rarr;</a></div>
                </div>
                <?php endif; ?>  
                <div class="page-friendes__subtitle"><?php echo get_field('subtitle'); ?></div>
              </div>
              <div class="page__cell">
                <div class="page-friendes__content">
                  <div class="row">
                    <div class="col-sm-6"><?php echo do_shortcode('[smartslider3 slider=5]'); ?>
                      <div class="page-friendes__description_fond_title"><?php echo get_field('text'); ?></div>
                      <div class="page-friendes__text_padding_bottom"><?php while (have_posts()) : the_post();
                        the_content();
                    endwhile; ?></div>
                    </div>
                    <div class="col-sm-4">
                      <div class="page-friendes__description_fond_title"><?php echo get_field('help-title'); ?></div>
                      <div class="page-friendes__text_padding_bottom"><?php echo get_field('help'); ?></div>
                    </div>
                  </div>
                </div>
                <div class="page__footer">
                  <div class="single__share">
                    <!-- —— Rambler.Likes script start ——-->
                    <div class="rambler-share"></div>
                    <script>
                      (function() {
                      var init = function() {
                      RamblerShare.init('.rambler-share', {
                      "style": {
                      "buttonHeight": 26
                      },
                      "utm": "utm_medium=social",
                      "counters": true,
                      "buttons": [
                      "vkontakte",
                      "facebook",
                      "odnoklassniki",
                      "twitter"
                      ]
                      });
                      };
                      var script = document.createElement('script');
                      script.onload = init;
                      script.async = true;
                      script.src = 'https://developers.rambler.ru/likes/v1/widget.js';
                      document.head.appendChild(script);
                      })();
                      // ——   Rambler.Likes script end  —--
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>