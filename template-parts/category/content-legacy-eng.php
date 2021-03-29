<?php
if(is_category('118')){
  $cat = "&cat=129,131,133";
}
if(is_category('129')){
  $cat = "&cat=129";
}
if(is_category('131')){
  $cat = "&cat=131";
}
if(is_category('133')){
  $cat = "&cat=133";
}
if ($_REQUEST['search']) {
    $search = "&s=".$_REQUEST['search'];
}
?>

<form name="form-filter" id="form-en">
<input type="hidden" name="search" value="<?php echo $_REQUEST['search']; ?>">
<div class="archive-legacy">
  <div class="archive-legacy__wrapper">
    <div class="archive-legacy__header">
      <?php if ( is_category('118')) { ?>
      <h1 class="archive-legacy__title">All media</h1>
      
      <?php } else { ?>
      <h1 class="archive-legacy__title"><?php echo single_cat_title(); ?></h1>
      <?php } ?> 
    </div>
    <div class="archive-legacy__content">
      <div class="row">
        <div class="col-sm-6">
          <?php if(is_category('133')) { ?>
          <div class="archive-legacy__switcher switcher">
            <span class="switcher__title">About metropolitan Anthony</span>
            <div class="switcher__box">
              <a href="<?php echo get_category_link('383');?>"><div class="switcher__link switcher__link-left"></div></a>
              <a href="<?php echo get_category_link('133');?>"><div class="switcher__link switcher__link-right switcher__link-active"></div></a>
            </div>
            <span class="switcher__title switcher__title-active">With metropolitan Anthony</span>
          </div>
          <?php } ?>
          <?php if(is_category('129')) { ?>
          <input type="hidden" name="cat[]" value="129">
          <input type="hidden" name="idx" value="texts">
          <?php } ?>
          <?php if(is_category('131')) { ?>
          <input type="hidden" name="cat[]" value="131">
          <input type="hidden" name="idx" value="audio">
          <?php } ?>
          <?php if(is_category('133')) { ?>
          <input type="hidden" name="cat[]" value="133">
          <input type="hidden" name="idx" value="video">
          <?php } ?>
          <div class="archive-legacy__description">
            <div class="archive-legacy__description">To refine your search by subject, period, place or genre tick boxes in relevant tabs.<span class="archive-legacy__instruction-box">
              <div class="archive-legacy__instruction-question" id="question1">?</div>
              <div class="archive-legacy__instruction" id="instruction1">By default all archival material is listed by the date of its entry into the Archive. To restrict your search items to a certain theme, period, place or genre tick the box relevant to your search parameter. To combine search parameters tick several boxes, e.g. if you choose the theme “Healing”, place “London parish” and genre “Sermon”, the results will contain only sermons on healing, delivered by metropolitan Anthony for the London parish.
                <div class="archive-legacy__instruction-close" id="close1">&times;</div>
                <div class="archive-legacy__instruction-circle"></div>
            </div></span></div>
            <?php if ( is_category('118')) { ?>
            <div class="archive-legacy__form-type">
              <label>Search in</label>
              <input type="checkbox" name="cat[]" value="129" checked><span>Texts,</span>
              <input type="checkbox" name="cat[]" value="131" checked><span>Audio,</span>
              <input type="checkbox" name="cat[]" value="133" checked><span>Video</span>
              <span class="archive-legacy__instruction-box">
                <div class="archive-legacy__instruction-question" id="question2">?</div>
                <div class="archive-legacy__instruction" id="instruction2">By default Search results will contain all material types. To narrow your search results to certain material type remove ticks from the boxes next to material types you want to exclude, e.g. to search for texts and audio (but no video) , remove  the tick next to “Video”.
                  <div class="archive-legacy__instruction-close" id="close2">&times;</div>
                  <div class="archive-legacy__instruction-circle"></div>
              </div></span>
            </div>
            <?php } else { ?>
            <p>To run simultaneous search for all material types go to&nbsp;<span><a href="https://antsur.ru/ru/nasledie/">&#171;All media&#187;</a></span></p>
            <?php } ?>             
            <div class="text-center">
              <div class="archive-legacy-en__button" id="filter-en-open"></div>
            </div>
            <div class="archive-legacy__filter filter">
              <div id="button-theme" class="filter__button filter__button-active">Subjects</div>
              <div id="button-place" class="filter__button ">Places</div>
              <div id="button-period" class="filter__button">Period</div>
              <div id="button-genre" class="filter__button">Genre</div>
              <div class="filter__content">
                <div id="filter-theme">
                  <div class="filter__border">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="filter__border_border_right">
                          <div class="filter__box">
                            <div class="filter__title">Subjects</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="holy-trinity"></span><span class="filter__label">The Holy Trinity</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="christ"></span><span class="filter__label">Christ</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="incarnation"></span><span class="filter__label">The Incarnation</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="holy-spirit"></span><span class="filter__label">The Holy Spirit</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mother-of-god"></span><span class="filter__label">The Mother of God</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="gospel"></span><span class="filter__label">The Gospel</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="epistles"></span><span class="filter__label">Epistles</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="gospel-parables"></span><span class="filter__label">Gospel parables</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="old-testament"></span><span class="filter__label">The Old Testament</span></div>
                          </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                            <div class="filter__title">Man and God</div>
                            <div class="filter__subtitle">Man and God - Tradition</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="worship"></span><span class="filter__label">Worship</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="liturgy"></span><span class="filter__label">Liturgy</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="sacraments"></span><span class="filter__label">Sacraments</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="creed"></span><span class="filter__label">The Creed</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tradition"></span><span class="filter__label">Tradition</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="orthodoxy"></span><span class="filter__label">Orthodoxy</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="great-lent"></span><span class="filter__label">Great Lent</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="feasts-church"></span><span class="filter__label">The feasts of the Church</span></div>
                            <div class="filter__subtitle">Man and God - Christian life</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="faith"></span><span class="filter__label">Faith</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="prayer"></span><span class="filter__label">Prayer</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="doubt"></span><span class="filter__label">Doubt</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="confession"></span><span class="filter__label">Confession</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="intercession"></span><span class="filter__label">Intercession</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="spiritual-life"></span><span class="filter__label">Spiritual life</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="sin"></span><span class="filter__label">Sin</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="love"></span><span class="filter__label">Love</span></div>
                            </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                          <div class="filter__title">The Church</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="church"></span><span class="filter__label">The Church</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="saints-holiness"></span><span class="filter__label">Saints and Holiness</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="role-laity"></span><span class="filter__label">Role of Laity</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="church-world"></span><span class="filter__label">The Church and the world</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="pastoral-care"></span><span class="filter__label">Pastoral care</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="church-building"></span><span class="filter__label">Church building</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="confessions-religions"></span><span class="filter__label">Other confessions and religions</span></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="filter__border_border_left">
                          <div class="filter__box">
                            <div class="filter__title">Human being</div>
                            <div class="filter__subtitle">Human being - The spirit, the soul and the body</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="body"></span><span class="filter__label">The body</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="suffering-pain"></span><span class="filter__label">Suffering and pain</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="healing"></span><span class="filter__label">Healing</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="death"></span><span class="filter__label">Death</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="ageing"></span><span class="filter__label">Ageing</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="mental-disease"></span><span class="filter__label">Mental disease</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="medical-ethics"></span><span class="filter__label">Medical ethics</span></div>
                            <div class="filter__subtitle">Human being - Human values</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="value-man"></span><span class="filter__label">The value of man</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="solidarity"></span><span class="filter__label">Solidarity</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="human-values"></span><span class="filter__label">Human values</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="discipline"></span><span class="filter__label">Discipline</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="freedom"></span><span class="filter__label">Freedom</span></div>
                            <div class="filter__subtitle">Human being – The vocation of man</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="vocation-man"></span><span class="filter__label">The vocation of man</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="challenge-modern-world"></span><span class="filter__label">The challenge of the modern world</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="dialogues-atheists"></span><span class="filter__label">Dialogues with atheists</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="family-marriage"></span><span class="filter__label">Family and marriage</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="children-parents"></span><span class="filter__label">Children and parents</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="man-woman"></span><span class="filter__label">Man and woman</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="adolescents"></span><span class="filter__label">Young people, adolescents</span></div>
                          </div>
                          <div class="filter__border_border_bottom"></div>
                          <div class="filter__box">
                            <div class="filter__title">The world</div>
                            <div class="filter__subtitle">The world – Creation</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="creation-world"></span><span class="filter__label">Creation of the world</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="fall"></span><span class="filter__label">The fall</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="tree-life-knowledge"></span><span class="filter__label">The tree of life and the tree of knowledge</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="created-world"></span><span class="filter__label">Created world, matter</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="miracles"></span><span class="filter__label">Miracles</span></div>
                            <div class="filter__subtitle">The world - Сategories of being</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="chaos"></span><span class="filter__label">Chaos, law</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="beauty"></span><span class="filter__label">Beauty</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="people-time"></span><span class="filter__label">People and time</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="experience"></span><span class="filter__label">Experience</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="knowledge"></span><span class="filter__label">Knowledge</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="psychology-religion"></span><span class="filter__label">Psychology and religion</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="science"></span><span class="filter__label">Science</span></div>
                            <div class="filter__subtitle">The world - History</div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="autobiography"></span><span class="filter__label">Autobiography</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="russian-emigration"></span><span class="filter__label">Russian emigration of the XX century</span></div>
                            <div class="filter__one"><span class="filter__input">
                                <input type="checkbox" name="theme[]" value="current-events"></span><span class="filter__label">Current events</span></div>
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
                              <input type="checkbox" name="place[]" value="london-parish"></span><span class="filter__label">London Parish</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="diocesan-conferences"></span><span class="filter__label">Diocesan Conferences</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="alban-serguis"></span><span class="filter__label">The Fellowship of St. Alban and St. Serguis</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="churches-religious-bodies"></span><span class="filter__label">Churches, religious bodies</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="week-prayer"></span><span class="filter__label">Week of prayer</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="conferences"></span><span class="filter__label">Conferences</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="universities-colleges"></span><span class="filter__label">Universities, colleges</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="schools"></span><span class="filter__label">Schools</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="medical-institutions"></span><span class="filter__label">Medical institutions</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="london-medical-group"></span><span class="filter__label">London Medical Group</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="military-institutions"></span><span class="filter__label">Military institutions</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="media"></span><span class="filter__label">Media</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="ussr"></span><span class="filter__label">USSR</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="broadcasting-ussr"></span><span class="filter__label">Broadcasting to the USSR</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="interviews-russian-audience"></span><span class="filter__label">Interviews for Russian audience</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="european-countries"></span><span class="filter__label">France, Belgium, Finland and other European countries</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="usa"></span><span class="filter__label">USA</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="place[]" value="state-institutions"></span><span class="filter__label">State institutions, International organisations, etc</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="filter-period" class="filter__hidden">
                  <div class="filter__border_border_none">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="filter__box">
                          <p>Enter date</p>
                          <div class="filter__one">
                              <input value="01.01.1941" id="datepicker-en" class="filter__input-date" type="text">
                              <input id="actual-date" type="hidden" name="date">
                          </div>
                          <p>or select time period</p>
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
                              <input type="checkbox" name="genre[]" value="sermon"></span><span class="filter__label">Sermon</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="talk"></span><span class="filter__label">Talk</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="interview"></span><span class="filter__label">Interview</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="letter"></span><span class="filter__label">Letter</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="paper"></span><span class="filter__label">Paper</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="service"></span><span class="filter__label">Service</span></div>
                          <div class="filter__one"><span class="filter__input">
                              <input type="checkbox" name="genre[]" value="announcement"></span><span class="filter__label">Announcement, book preface, etc.</span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6" id="result-en">
          <div class="archive-legacy__search-parameter">
          <?php
          $parameter;
            if($_REQUEST['search']){
              $parameter = 'Search parameters:';
              $s = $_REQUEST['search'];
              $parameter = $parameter . '<span class="archive-legacy__search-label">&nbsp;Keyword:&nbsp;</span><span class="archive-legacy__search-name">' . $s . '</span>';
              $parameter = $parameter . '<button class="archive-legacy__input-reset" type="button" name="reset" onclick="javascript:document.location = document.location.pathname;">Clear search parameters</button>';
            }
            else{
              $parameter = 'Search parameters not given';
            }
            echo $parameter;
          ?> 
          </div>
          <div class="archive-legacy__sorting">
            <div>
              <label>Sort by </label>
              <select name="select" >
                <option value="newest">date (newest)</option>
                <option value="lastest">date (oldest)</option>
                <option value="title">A-Z</option>
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
              <span id="sum" sum="<?php echo ceil($count/10); ?>">Pages:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Prev</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Next</span>
            </div>
            <?php endif; ?>
          </div>
          <div class="archive-legacy__result">
          <?php
               if($count > 0){
                echo wpautop( $count . ' results found');
              }
              else {
	             echo wpautop( 'No results found' );
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
                <?php if ( in_category('129')) { ?>
                  <i class="fa fa-file-text-o" aria-hidden="true"></i>
                  <p>Text</p>
                <?php } ?>
                <?php if ( in_category('131')) { ?>
                  <i class="fa fa-file-audio-o" aria-hidden="true"></i>
                  <p>Audio</p>
                <?php } ?>
                <?php if ( in_category('133')) { ?>
                  <i class="fa fa-file-video-o" aria-hidden="true"></i>
                  <p>Video</p>
                <?php } ?>
                </a></div>
              </div>
              <div class="col-sm-9 col-lg-10"><a class="archive-legacy__name" href="<?php echo get_permalink(); ?>"><?php echo get_field('tit'); ?>. </a><a class="archive-legacy__date" href="<?php echo get_permalink(); ?>"><?php echo get_field('date'); ?></a>
                <?php if ( in_category('129')) { ?>
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
                    $parameter = $parameter . '<span>Theme:&nbsp;';
                    foreach ($choicestheme as $valuetheme => $labeltheme) {
                      $valuetheme = $theme['choices'][$labeltheme];
                      $parametertheme[] = '<a href="https://antsur.ru/ru/nasledie/?theme%5B%5D=' . $labeltheme . '">' . $valuetheme . '</a>';
                    }
                    $parametertheme = implode('<span>, </span>',$parametertheme);
                    $parameter = $parameter . $parametertheme . '</span>';
                  }
                  if(is_array($choicesplace)){
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Place:&nbsp;';
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
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Period:&nbsp;<a href="https://antsur.ru/ru/nasledie/?period%5B%5D=' . $valueperiod . '">' . $labelperiod . '</a></span>';
                  }                
                  if(get_field('genre')){
                    $valuegenre = $genre['value'];
                    $labelgenre = $genre['choices'][ $valuegenre ];
                    $parameter = $parameter . '<span> &nbsp;&nbsp;Genre:&nbsp;<a href="https://antsur.ru/ru/nasledie/?genre%5B%5D=' . $valuegenre . '">' . $labelgenre . '</a></span>';
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
              <span>Pages:</span>
              <span class="prev page-numbers archive-legacy__page-numbers" page="prev" link="0">Prev</span>
              <?php
                $x=0;
                $y=ceil($count/10);
                while ($x++<$y) echo '<span class="page-numbers archive-legacy__page-numbers" page="' . $x . '">' . $x . '</span><span class="page-numbers dots archive-legacy__dots" dots="' . $x . '">…</span>';
              ?>
              <span class="next page-numbers archive-legacy__page-numbers" link="2" page="next">Next</span>
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>