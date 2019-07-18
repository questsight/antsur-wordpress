<?php
if(is_category('39')){
  $cat = "&cat=15,16,17";
}
if(is_category('15')){
  $cat = "&cat=15";
}
if(is_category('16')){
  $cat = "&cat=16";
}
if(is_category('17')){
  $cat = "&cat=17";
}
if ($_REQUEST['search']) {
    $search = "&s=".$_REQUEST['search'];
}
  
?>
<form name="form-filter" id="form-ru">
  <input type="hidden" name="search" value="<?php echo $_REQUEST['search']; ?>">
<div class="archive-legacy">
  <div class="archive-legacy__wrapper">
    <div class="archive-legacy__header">
      <?php if ( is_category('39')) { ?>
      <h1 class="archive-legacy__title">Весь архив</h1>
      <?php } else { ?>
      <h1 class="archive-legacy__title"><?php echo single_cat_title(); ?></h1>
      <?php } ?> 
    </div>
    <div class="archive-legacy__content">
      <div class="row">
        <div class="col-sm-6">
          <?php if(is_category('17')) { ?>
          <div class="archive-legacy__switcher switcher">
            <span class="switcher__title">О митрополите Антонии</span>
            <div class="switcher__box">
              <a href="<?php echo get_category_link('381');?>"><div class="switcher__link switcher__link-left"></div></a>
              <a href="<?php echo get_category_link('17');?>"><div class="switcher__link switcher__link-right switcher__link-active"></div></a>
            </div>
            <span class="switcher__title switcher__title-active">C митрополитом Антонием</span>
          </div>
          <?php } ?>
          <?php if(is_category('15')) { ?>
          <input type="hidden" name="cat[]" value="15">
          <input type="hidden" name="idx" value="texts">
          <?php } ?>
          <?php if(is_category('16')) { ?>
          <input type="hidden" name="cat[]" value="16">
          <input type="hidden" name="idx" value="audio">
          <?php } ?>
          <?php if(is_category('17')) { ?>
          <input type="hidden" name="cat[]" value="17">
          <input type="hidden" name="idx" value="video">
          <?php } ?> 
          <div class="archive-legacy__description">
            <div class="archive-legacy__description">Для поиска материалов по теме, дате, месту или жанру в закладках отметьте интересующие вас параметры.<span class="archive-legacy__instruction-box">
              <div class="archive-legacy__instruction-question" id="question1">?</div>
              <div class="archive-legacy__instruction" id="instruction1">
                <p>По умолчанию в результатах поиска выдаются все имеющиеся в Архиве произведения митрополита Антония в последовательности их размещения на сайте.</p>
                <p>Если в закладках галочкой отметить один из параметров поиска, т.е. тему, период, место произнесения или жанр, то в результатах поиска появятся произведения, отвечающие этому параметру. </p>
                <p>Если поставить несколько галочек, то появятся те произведения, которые отвечают всем отмеченным параметрам.</p>
                <p>Например, если отметить галочками тему «Исцеление», место «Собор Всех святых и Успения Божией Матери в Лондоне» и жанр «Проповедь», то в результатах будут появятся только проповеди на тему исцеления, произнесенные митрополитом Антонием в этом Соборе. </p>
                <div class="archive-legacy__instruction-close" id="close1">&times;</div>
                <div class="archive-legacy__instruction-circle"></div>
            </div></span></div>
            <?php if ( is_category('39')) { ?>
            <div class="archive-legacy__form-type">
              <label>Искать в</label>
              <input type="checkbox" name="cat[]" value="15" checked><span>текстах,</span>
              <input type="checkbox" name="cat[]" value="16" checked><span>аудио,</span>
              <input type="checkbox" name="cat[]" value="17" checked><span>видео</span>
              <span class="archive-legacy__instruction-box">
                <div class="archive-legacy__instruction-question" id="question2">?</div>
                <div class="archive-legacy__instruction" id="instruction2">
                  <p>По умолчанию поиск производится одновременно по всем форматам материалов (тексты, аудио и видео), потому что они отмечены галочкой. </p>
                  <p>Если произведения в каком-либо формате вам не нужны, уберите соответствующую галочку. Например, если нужны только тексты и аудиоматериалы, но не видео, то уберите галочку перед словом «Видео»</p>
                  <div class="archive-legacy__instruction-close" id="close2">&times;</div>
                  <div class="archive-legacy__instruction-circle"></div>
              </div></span>
            </div>
            <?php } else { ?>
            <p>Для одновременного поиска по текстам, аудио и видео перейдите в раздел&nbsp;<span><a href="https://antsur.ru/ru/nasledie/">&#171;Весь Архив&#187;</a></span></p>
            <?php } ?>             
            <div class="text-center">
              <div class="archive-legacy__button" id="filter-open"></div>
            </div>
            <div class="archive-legacy__filter filter">
              <div id="button-theme" class="filter__button filter__button-active">Темы</div>
              <div id="button-place" class="filter__button ">Места</div>
              <div id="button-period" class="filter__button">Период</div>
              <div id="button-genre" class="filter__button">Жанр</div>
              <div class="filter__content">
                <div id="filter-theme">
                  <div class="filter__border">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="filter__border_border_right">
                          <div class="filter__box">
                            <div class="filter__title">Бог</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-presvyataya-troitsa"></span><span class="filter__label">Пресвятая Троица</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-hristos"></span><span class="filter__label">Христос</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-voploschenie"></span><span class="filter__label">Воплощение</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-svyatoy-duh"></span><span class="filter__label">Святой Дух</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-bozhiya-mater"></span><span class="filter__label">Божия Матерь</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-evangelie"></span><span class="filter__label">Евангелие</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-poslaniya-apostolov"></span><span class="filter__label">Послания Апостолов</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-evangelskie-pritchi"></span><span class="filter__label">Евангельские притчи</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="bog-vethiy-zovet"></span><span class="filter__label">Ветхий Завет</span></div>
                          </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                            <div class="filter__title">Человек перед богом</div>
                            <div class="filter__subtitle">Человек перед богом - Предание</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-bogosluzhenie"></span><span class="filter__label">Богослужение</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-liturgiya"></span><span class="filter__label">Литургия</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-tainstva"></span><span class="filter__label">Таинства</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-simvol-veryi"></span><span class="filter__label">Символ веры</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-traditsiya"></span><span class="filter__label">Традиция</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-pravoslavie"></span><span class="filter__label">Православие</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-velikiy-post"></span><span class="filter__label">Великий Пост</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-tserkovnyie-prazdniki"></span><span class="filter__label">Церковные праздники</span></div>
                            <div class="filter__subtitle">Человек перед богом - Жизнь христианина</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-vera-v-boga"></span><span class="filter__label">Вера в Бога</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-molitva"></span><span class="filter__label">Молитва</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-somnenie"></span><span class="filter__label">Сомнение</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-ispoved"></span><span class="filter__label">Исповедь</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-zastupnichestvo"></span><span class="filter__label">Заступничество</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-duhovnaya-zhizn"></span><span class="filter__label">Духовная жизнь</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-greh"></span><span class="filter__label">Грех</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-bog-lyubov"></span><span class="filter__label">Любовь</span></div>
                            </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                          <div class="filter__title">Церковь</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-tserkov"></span><span class="filter__label">Церковь</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-svyatyie"></span><span class="filter__label">Святые и святость</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-rol-miryan"></span><span class="filter__label">Роль мирян</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-tserkov-i-mir"></span><span class="filter__label">Церковь и мир</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-pastyirstvo"></span><span class="filter__label">Пастырство</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-hram"></span><span class="filter__label">Храм</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tserkov-drugie-religii"></span><span class="filter__label">Другие конфессии и религии</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="filter__border_border_left">
                          <div class="filter__box">
                            <div class="filter__title">Человек</div>
                            <div class="filter__subtitle">Человек - Дух, душа, тело</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-rol-tela"></span><span class="filter__label">Роль тела</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-stradanie"></span><span class="filter__label">Страдание, боль</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-istselenie"></span><span class="filter__label">Исцеление</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-smert"></span><span class="filter__label">Смерть</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-starenie"></span><span class="filter__label">Старение</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-psihicheskie-bolezni"></span><span class="filter__label">Психические болезни</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-meditsinskaya-etika"></span><span class="filter__label">Медицинская этика</span></div>
                            <div class="filter__subtitle">Человек - Человеческие ценности</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-dostoinstvo"></span><span class="filter__label">Достоинство человека</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-solidarnost"></span><span class="filter__label">Солидарность</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-tsennosti"></span><span class="filter__label">Человеческие ценности</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-distsiplina"></span><span class="filter__label">Дисциплина</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-svoboda"></span><span class="filter__label">Свобода</span></div>
                            <div class="filter__subtitle">Человек - Призвание христианина</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-prizvanie"></span><span class="filter__label">Призвание человека</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-vyizov-mira"></span><span class="filter__label">Вызов современного мира</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-ateisti"></span><span class="filter__label">Диалоги с атеистами</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-brak-semya"></span><span class="filter__label">Брак и семья</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-deti-roditeli"></span><span class="filter__label">Дети и родители</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-muzhchina-zhenschina"></span><span class="filter__label">Мужчина и женщина</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chelovek-molodezh"></span><span class="filter__label">Молодежь и подростки</span></div>
                          </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                            <div class="filter__title">Мир</div>
                            <div class="filter__subtitle">Мир - Творение</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-sotvorenie"></span><span class="filter__label">Сотворение мира</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-grehopadenie"></span><span class="filter__label">Грехопадение</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-drevo-zhizni"></span><span class="filter__label">Древо жизни и древо познания</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-materiya"></span><span class="filter__label">Тварный мир, материя</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-chudesa"></span><span class="filter__label">Чудеса</span></div>
                            <div class="filter__subtitle">Мир - Категории бытия</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-haos"></span><span class="filter__label">Хаос, закон</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-krasota"></span><span class="filter__label">Красота</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-vremya"></span><span class="filter__label">Мы и время</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-opyit"></span><span class="filter__label">Опыт</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-poznanie" ></span><span class="filter__label">Познание</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-psihologiya"></span><span class="filter__label">Психология и религия</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-nauka"></span><span class="filter__label">Наука</span></div>
                            <div class="filter__subtitle">Мир - Исторические судьбы</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-avtobiografiya"></span><span class="filter__label">Автобиография</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-emigratsiya"></span><span class="filter__label">Русская эмиграция ХХ века</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mir-otzyivyi" ></span><span class="filter__label">Отзывы на актуальные события</span></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filter-place" class="filter__hidden"> 
                  <div class="filter__border_border_none">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="filter__box">
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="londonskiy-prihod"></span><span class="filter__label">Лондонский приход</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="eparhialnyie-konferentsii"></span><span class="filter__label">Епархиальные конференции</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="albaniya-sergiya"></span><span class="filter__label">Содружество свв. Албания и Сергия</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="tserkvi"></span><span class="filter__label">Церкви, религиозные организации</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="nedelya-molitvyi"></span><span class="filter__label">Неделя молитвы</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="konferentsii"></span><span class="filter__label">Конференции</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="universitetyi"></span><span class="filter__label">Университеты, институты</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="shkolyi"></span><span class="filter__label">Школы</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="meditsinskie-uchrezhdeniya"></span><span class="filter__label">Медицинские учреждения</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="londonskaya-meditsinskaya-gruppa"></span><span class="filter__label">Лондонская медицинская группа</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="voennyie-uchrezhdeniya"></span><span class="filter__label">Военные учреждения</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="smi"></span><span class="filter__label">СМИ</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="sssr"></span><span class="filter__label">СССР</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="radioveschanie-sssr"></span><span class="filter__label">Радиовещание на СССР</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="intervyu-dlya-rossii"></span><span class="filter__label">Интервью для России</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="evropeyskie-stranyi"></span><span class="filter__label">Франция, Бельгия, Финляндия, др. европейские страны</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="ssha"></span><span class="filter__label">США</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="gosuchrezhdeniya"/></span><span class="filter__label">Госучреждения, международные организации и пр.</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div  id="filter-period" class="filter__hidden">
                  <div class="filter__border_border_none">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="filter__box">
                          <p>Введите точную дату</p>
                          <div class="filter__one">
                            <input value="01.01.1941" id="datepicker" class="filter__input-date" type="text" />
                            <input id="actual-date" type="hidden" name="date">
                          </div>
                          <p>или выберите временной период</p>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1941-1945"></span><span class="filter__label">1941-1945</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1946-1950"></span><span class="filter__label">1946-1950</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1951-1955"></span><span class="filter__label">1951-1955</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1956-1960"></span><span class="filter__label">1956-1960</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1961-1965"></span><span class="filter__label">1961-1965</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1966-1970"></span><span class="filter__label">1966-1970</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1971-1975"></span><span class="filter__label">1971-1975</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1976-1980"></span><span class="filter__label">1976-1980</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1981-1985"></span><span class="filter__label">1981-1985</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1986-1990"></span><span class="filter__label">1986-1990</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1991-1995"></span><span class="filter__label">1991-1995</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="1996-2000"></span><span class="filter__label">1996-2000</span></div>
                          <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="period[]" value="2001-2003"></span><span class="filter__label">2001-2003</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filter-genre" class="filter__hidden"> 
                  <div class="filter__border_border_none">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="filter__box">
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="beseda"></span><span class="filter__label">Беседа</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="propoved"></span><span class="filter__label">Проповедь</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="intervyu"></span><span class="filter__label">Интервью</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="pismo"></span><span class="filter__label">Письмо</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="statya"></span><span class="filter__label">Статья</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="bogosluzhenie"></span><span class="filter__label">Богослужение</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="obyavlenie"></span><span class="filter__label">Объявление, предисловие к книге и пр.</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6" id="result-ru">
          <div class="archive-legacy__search-parameter">
          <?php
          $parameter;
            if($_REQUEST['search']){
              $parameter = 'Параметры поиска:';
              $s = $_REQUEST['search'];
              $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Ключевое слово:&nbsp;</span><span class="archive-legacy__search-name">' . $s . '</span>';
              $parameter = $parameter . '<button class="archive-legacy__input-reset" type="button" name="reset" onclick="javascript:document.location = document.location.pathname;">Сброс параметров поиска</button>';
            }
            else{
              $parameter = 'Параметры поиска не заданы';
            }
            echo $parameter;
          ?>        
          </div>
          <div class="archive-legacy__sorting">
            <div>
              <label>Сортировать по</label>
              <select name="select" >
                <option value="newest">дате (по убыванию)</option>
                <option value="lastest">дате (по возрастанию)</option>
                <option value="title">алфавиту</option>
              </select>
            </div>
          </div>
          <?php
              query_posts($query_string.'&'. $cat. '&posts_per_page=-1'.$search);
            if ( have_posts() ){
              $count = $wp_query->post_count;}
          ?>
          <div class="archive-legacy__nav_float_left">
          <?php if($count > 10): ?>
            <div class="archive-legacy__nav">
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
          <div class="archive-legacy__result">
          <?php
            if ( $count > 0){
              if($count == 1 || $count % 10 == 1 && $count != 11 && $count % 100 != 11){
                echo wpautop( 'Найден ' . $count . ' результат');
              }
              else if($count > 1 && $count < 5){
                echo wpautop( 'Найдено ' . $count . ' результатa');
              }
              else if($count % 10 > 1 && $count % 10 < 5){
                echo wpautop( 'Найдено ' . $count . ' результатa');
              }
              else {
               echo wpautop( 'Найдено ' . $count . ' результатов'); 
              }
            } else {
	             echo wpautop( 'Результатов не найдено' );
            }
            ?>        
          </div>
          <div class="clearfix"></div>
          <?php 
          query_posts($query_string.'&'.$cat.'&posts_per_page=-1'.$search);
          if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="archive-legacy__one archive__one">
            <div class="row">
              <div class="col-sm-3 col-lg-2">
                <div class="archive-legacy__sort"><a href="<?php echo get_permalink(); ?>">
                <?php if ( in_category('15')) { ?>
                  <i class="fa fa-file-text-o" aria-hidden="true"></i>
                  <p>Текст</p>
                <?php } ?>
                <?php if ( in_category('16')) { ?>
                  <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                  <p>Аудио</p>
                <?php } ?>
                <?php if ( in_category('17')) { ?>
                  <i class="fa fa-file-video-o" aria-hidden="true"></i>
                  <p>Видео</p>
                <?php } ?>
                </a></div>
              </div>
              <div class="col-sm-9 col-lg-10"><a class="archive-legacy__name" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?>. </a><a class="archive-legacy__date" href="<?php echo get_permalink(); ?>"><?php echo get_field('date'); ?></a>
                <?php if ( in_category('15')) { ?>
                <div class="archive-legacy__description add-font"><?php the_excerpt(); ?></div>
                <?php } ?>
                <div class="archive-legacy__parameter">
                <?php
                  $parameter = '';
                  $theme = get_field_object('theme');
                  $choicestheme = $theme['value'];
                  $parametertheme = array();
                  $place = get_field_object('place');
                  $choicesplace = $place['value'];
                  $parameterplace = array();
                  $period = get_field_object('period');
                  $genre = get_field_object('genre');
                  $parameterplace = array();
                  if(is_array($choicestheme)){
                    $parameter = $parameter . '<span>Тема:&nbsp;';
                    foreach ($choicestheme as $valuetheme => $labeltheme) {
                      $valuetheme = $theme['choices'][$labeltheme];
                      $parametertheme[] = '<a href="https://antsur.ru/ru/nasledie/?theme%5B%5D=' . $labeltheme . '">' . $valuetheme . '</a>';
                    }
                    $parametertheme = implode('<span>, </span>',$parametertheme);
                    $parameter = $parameter . $parametertheme . '</span>';
                  }
                  if(is_array($choicesplace)){
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Место:&nbsp;';
                    foreach ($choicesplace as $valueplace => $labelplace) {
                      $valueplace = $place['choices'][$labelplace];
                      $parameterplace[] = '<a href="https://antsur.ru/ru/nasledie/?place%5B%5D=' . $labelplace . '">' . $valueplace . '</a>';
                    }
                    $parameterplace = implode('<span>, </span>',$parameterplace);
                    $parameter = $parameter . $parameterplace . '</span>';
                  }
                  if(get_field('period')){
                    $valueperiod = $period['value'];
                    $labelperiod = $period['choices'][ $valueperiod];
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Период:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                  }                
                  if(get_field('genre')){
                    $valuegenre = $genre['value'];
                    $labelgenre = $genre['choices'][ $valuegenre ];
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Жанр:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
                  }
                  echo $parameter;
                ?>
                </div>
              </div>
            </div>
          </div>
          <?php endwhile; endif; ?>
          <div class="archive-legacy__nav_float_left">
          <?php if($count > 10): ?>
            <div class="archive-legacy__nav">
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Страницы:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">След.</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Пред.</span>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>