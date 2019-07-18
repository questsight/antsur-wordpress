</div>
            <footer class="site__footer footer">
                <div class="footer__wrapper">
                    <div class="copyright">
                       <div class="copyright__item">&copy; Metropolitan Anthony of Sourozh Foundation</div>
                      <?php $currentlang = get_bloginfo('language');
                        if($currentlang=="en-US"):?>
                          <div class="copyright__item">&copy; Metropolitan Anthony of Sourozh Spiritual Heritage Foundation</div>
                        <?php else: ?>
                          <div class="copyright__item">&copy; Фонд "Духовное наследие митрополита Антония Сурожского"</div>
                      <?php endif; ?>
                    </div>
                    <div class="social">
                        <div class="social__item">
                            <a href="https://www.facebook.com/mitrasfund/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </div>
                        <div class="social__item">
                            <a href="#" target="_blank"><i class="fa fa-vk" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="callback" id="callback">
            <div class="callback__item"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></div>
          </div>
          <div class="callback__form" id="modal">
           <div class="footer__form">
           <div class="callback__shut" id="modal__shut"><i class="fa fa-times fa-2x" aria-hidden="true"></i></div>
            <?php echo do_shortcode( '[contact-form-7 id="3996" title="Обратная связь"]' ); ?>
          </div>
          </div>
          <div class="popup-img" hidden="true"><img src=""></div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>