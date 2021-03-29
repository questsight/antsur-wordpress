<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
  </head>
  <body class="body">
    <div class="site">
      <header class="site__header header">
        <div class="container-fluid">
          <div class="header__wrapper">
            <div class="header__top">
              <div class="row">
                <div class="col-xs-10 col-sm-6 col-md-4">
                  <div class="logo header__logo">
                  <?php $currentlang = get_bloginfo('language');
                    if($currentlang=="en-US"):?>
                      <a href="https://antsur.ru/en/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/en_logo.png"></a>
                    <?php else: ?>
                      <a href="https://antsur.ru/ru/"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo/ru_logo.png"></a>
                    <?php endif; ?>
                  </div>
                  <div class="search header__search">
                    <form class="search__form" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
                    <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"):?>
                        <input class="search__input" type="search" value="<?php the_search_query(); ?>" name="s" placeholder="Search website">
                      <?php else: ?>
                        <input class="search__input" type="search" value="<?php the_search_query(); ?>" name="s" placeholder="Поиск по сайту">
                      <?php endif; ?>
                      <button class="search__button" type="submit"><img src="<?php echo get_template_directory_uri() ; ?>/assets/images/lupa.png"></button>
                    </form>
                  </div>
                  <div class="search header__search">
                   <?php $currentlang = get_bloginfo('language');
                      if($currentlang=="en-US"):?>
                    <form class="search__form" method="get" action="<?php echo esc_url(home_url('/legacy/')); ?>">
                    
                        <input class="search__input" type="search" value="<?php echo $_REQUEST['search']; ?>" name="search" placeholder="Search metropolitan Anthony’s works">
                      <button class="search__button" type="submit"><img src="<?php echo get_template_directory_uri() ; ?>/assets/images/book.png"></button>
                    </form>
                    <?php else: ?>
                      <form class="search__form" method="get" action="<?php echo esc_url(home_url('/nasledie/')); ?>">
                        <input class="search__input" type="search" value="<?php echo $_REQUEST['search']; ?>" name="search" placeholder="Поиск по произведениям митрополита">
                      <button class="search__button" type="submit"><img src="<?php echo get_template_directory_uri() ; ?>/assets/images/book.png"></button>
                    </form>
                    <?php endif; ?>
                  </div>

                </div>
                <div class="hidden-xs hidden-sm col-md-4">
                  <div class="language header__language">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'language',
                      'container'      => false,
                      'menu_class'     => 'language header__language',
                    ) );
                  ?>
                  </div>
                  <div class="header__description"><?php dynamic_sidebar('header_text'); ?></div>
                </div>
                <div class="hidden-xs col-sm-6 col-md-4"></div>
                <div class="header__photo hidden-xs"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/photo/photo.png"></div>
              </div>
            </div>
            <div class="header__hamburger">
              <div class="hamburger" id="hamburger">
                <div class="hamburger__item"></div>
                <div class="hamburger__item"></div>
                <div class="hamburger__item"></div>
              </div>
            </div>
            <div class="header__bottom">
              <div class="row">
                <div class="col-sm-12">
                  <nav class="navigation" id="navigation">
                  <?php
                    wp_nav_menu( array(
                      'theme_location' => 'header',
                      'container'      => false,
                      'menu_id'        => 'navigation__list',
                      'menu_class'     => 'navigation__list navigation__hidden',
                    ) );
                  ?>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="site__content content">
		    <div class="page__wrapper">
			    <div class="page__cell">
            <div class="breadcrumb"><?php if (function_exists('the_breadcrumbs') && !in_category('tekstyi-ru') && !in_category('texts-en') && !in_category('audiozapisi-ru') && !in_category('audio-en') && !in_category('foto') && !in_category('fotografii') && !is_single('dengami') && !in_category('knigi-online')) the_breadcrumbs(); ?>
            </div>
		      </div>
		    </div>