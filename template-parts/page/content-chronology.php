<div class="page page-hronologiya">
          <div class="page__wrapper">
            <div class="page__cell">
              <div class="page__header">
                <h1 class="page__title"><?php the_title(); ?></h1>
                <div class="page-hronologiya__description"><?php echo get_field('instruction'); ?></div>
              </div>
              <div class="page__cell">
                <div class="page-hronologiya__content">
                  <div class="row">
                    <div class="col-sm-3"><?php the_post_thumbnail( array() ); ?></div>
                    <div class="col-sm-9">
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1940-1920-е</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1914-1929-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1914-1929-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1930-1939</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1930-1939-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1930-1939-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1939-1945</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1939-1945-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1939-1945-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1945-1949</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1945-1949-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1945-1949-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1949-1951</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1949-1951-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1949-1951-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1952-1955</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1952-1955-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1952-1955-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1956-1958</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1956-1958-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1956-1958-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1959-1961</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1959-1961-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1959-1961-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1962-1965</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1962-1965-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1962-1965-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1966-1970</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1966-1970-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1966-1970-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1971-1973</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1971-1973-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1971-1973-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1974-1976</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1974-1976-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1974-1976-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1977-1981</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1977-1981-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1977-1981-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1982-1987</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1982-1987-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1982-1987-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1988-1990</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1988-1990-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1988-1990-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1991-1996</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1991-1996-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1991-1996-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">1997-2002</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('1997-2002-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('1997-2002-entirely'); ?></div>
                        </div>
                      </div>
                      <div class="page-hronologiya__one">
                        <div class="page-hronologiya__period">2003</div>
                        <div class="page-hronologiya__extract"><?php
                          $text = get_field('2003-extract'); $text = str_replace("<p>", "", $text); $text = str_replace("</p>", "", $text); echo $text; ?>
                          <span class="page-hronologiya__instruction-box"><i class="fa fa-arrow-down page-hronologiya__arrow" aria-hidden="true"></i>
                          <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>   
                          <div class="page-hronologiya__instruction instruction_en"></div>  
                          <?php else: ?>
                          <div class="page-hronologiya__instruction instruction_ru"></div>
                          <?php endif; ?> 
                          </span>
                          <div class="page-hronologiya__entirely"><?php echo get_field('2003-entirely'); ?></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="page__footer">
                  <?php get_template_part( 'template-parts/single/share' );?>
                </div>
              </div>
            </div>
          </div>
        </div>