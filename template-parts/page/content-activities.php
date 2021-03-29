        <div class="page page-activities">
          <div class="page__wrapper">
            <div class="page__cell">
              <div class="page__header">
                <h1 class="page__title text-center"><?php the_title(); ?></h1>
              </div>
              <div class="page__cell">
                <div class="page__content">
                  <div class="row page-activities__sections">
                    <div class="col-md-3 col-sm-6">
                      <div class="page-activities__link"><a href="<?php echo get_field('link1'); ?>"><img src="<?php echo get_field('img1'); ?>">
                          <p><?php echo get_field('text1'); ?></p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="page-activities__link"><a href="<?php echo get_field('link2'); ?>"><img src="<?php echo get_field('img2'); ?>">
                          <p><?php echo get_field('text2'); ?></p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="page-activities__link"><a href="<?php echo get_field('link3'); ?>"><img src="<?php echo get_field('img3'); ?>">
                          <p><?php echo get_field('text3'); ?></p></a></div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="page-activities__link"><a href="<?php echo get_field('link4'); ?>"><img src="<?php echo get_field('img4'); ?>">
                          <p><?php echo get_field('text4'); ?></p></a></div>
                    </div>
                  </div>
                  <div class="row">
                    <?php if(get_field('ad')): ?>
                     <div class="col-md-6">
                      <div class="page-bay__info">
                        <?php if(get_field('ad-img')): ?>
                        <div class="page-activities__img"><img src="<?php echo get_field('ad-img'); ?>"></div>
                        <?php endif; ?>
                        <div class="page-bay__info-text"><?php echo get_field('ad'); ?></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="page-activities__box">
                        <?php while (have_posts()) : the_post();
                          the_content();
                        endwhile; ?>
                      </div>
                    </div>
                    <?php else: ?>
                    <div class="col-md-12">
                      <div class="page-activities__box">
                        <?php while (have_posts()) : the_post();
                          the_content();
                        endwhile; ?>
                      </div>
                    </div>
                    <?php endif; ?>
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