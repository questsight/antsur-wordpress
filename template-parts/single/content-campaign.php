<div class="page__wrapper">
    <div class="page__cell">
        <div class="breadcrumb">
          <div class="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList"><span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://antsur.ru/ru/" itemprop="item" class="home"><span itemprop="name">Главная</span></a></span> <span class="sep">-</span> <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="https://antsur.ru/ru/kak-pomoch/" itemprop="item" class="home"><span itemprop="name">О Фонде — Как помочь</span></a></span> <span class="sep">-</span> <span class="current">Деньгами</span></div>
        </div>
    </div>
</div>
<div class="single" id="post-<?php the_ID(); ?>">
    <div class="single__wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="single__header">
                <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"): ?>
                <div class="archive-legacy__switcher switcher"><span class="page__title">How to help - </span><span class="page__title_font_italic">Voluntary help </span>
                  <div class="switcher__box">
                    <a href="<?php echo get_page_link('664');?>"><div class="switcher__link switcher__link-left"></div></a>
                    <a href="<?php the_permalink('1704');?>"><div class="switcher__link switcher__link-right switcher__link-active"></div></a>
                  </div><span class="page__title_font_italic page__title-active_font_italic">Financial support</span>
                </div>
                <?php else: ?>
                <div class="archive-legacy__switcher switcher"><span class="page__title">Как помочь - </span><span class="page__title_font_italic">Делами </span>
                  <div class="switcher__box">
                    <a href="<?php echo get_page_link('75');?>"><div class="switcher__link switcher__link-left"></div></a>
                    <a href="<?php the_permalink('1704');?>"><div class="switcher__link switcher__link-right switcher__link-active"></div></a>
                  </div><span class="page__title_font_italic page__title-active_font_italic">Деньгами</span>
                </div>
                <?php endif; ?>  
                <div class="page-friendes__subtitle"><?php echo get_field('subtitle'); ?></div>
                </div>
            </div>
            <div class="col-sm-5">
              <div class="add-font">
                <p>Познакомить с личностью, словом и служением митрополита Антония Сурожского, помочь каждому, кто соприкоснулся и заинтересовался открыть для себя богатое и глубочайшее духовное наследие Владыки Антония - в этом наш Фонд видит главную цель своей работы. Вы можете поддержать нашу деятельность, перечислив денежное пожертвование. Пусть даже небольшое, Ваше пожертвование поможет Фонду:</p>
                <p>- издавать бесплатные брошюры для людей, оказавшихся в тяжелых и страшных жизненных ситуациях</p>
                <p>- проводить встречи для всех желающих, приглашать на них интересных людей, которые смогут поделиться своими воспоминаниями и размышлениями о Владыке и его наследии</p>
                <p>- разыскивать, переводить с других языков и публиковать новые тексты Владыки, издавать новые книги</p>
                <p>- проводить исследования неизвестных сторон служения митрополита Антония, собирать и сохранять его Архив, делать выставки, печатать раздаточные материалы</p>
                <p>- собирать и передавать книги митрополита Антония в региональные библиотеки, тюрьмы, дома престарелых, хосписы</p>
                <p>- поддерживать этот сайт, знакомить людей с находками и мероприятиями Фонда, устраивать презентации, а также многое другое, что с радостью и любовью старается делать Фонд и его Друзья.</p>
                <p><b style="color:#090909">Вы можете пожертвовать любую сумму </b>(сумма 100 рублей указана условно – по правилам платежной системы мы не могли оставить окошко пустым).</p>
                <p>Пожалуйста, укажите сумму пожертвования и выберите способ оплаты, затем нажмите кнопку ПОЖЕРТВОВАТЬ</p>
                <p><b style="color:#090909">Благодарим Вас за оказанную поддержку!</b></p>
              </div>
              <br>
              <br>
              <a target="_blank" href="https://antsur.ru/wp-content/uploads/2018/09/PUBL-OFERTA-FAS-UD.pdf">ДОГОВОР ПОЖЕРТВОВАНИЯ</a>
              <div class="single__footer">
                <?php get_template_part( 'template-parts/single/share' );?>
              </div> 
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
              <div class="single__content">
                <?php the_content(); ?>
              </div>
            </div>
        </div>
    </div>
</div>