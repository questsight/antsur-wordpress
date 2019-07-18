<?php get_header();

  if(is_page('main') || is_page('glavnaya')){
    get_template_part( 'template-parts/page/content-main');
  }
  else if(is_page('contacts') || is_page('kontaktyi') ){
    get_template_part( 'template-parts/page/content-contacts');
  }
  else if(is_page('sovet-fonda') || is_page('foundation-council')){
    get_template_part( 'template-parts/page/content-council');
  }
  else if(is_page('information') || is_page('informatsiya')){
    get_template_part( 'template-parts/page/content-information');
  }
  else if(is_page('documents') || is_page('uchreditelnyie-dokumentyi')){
    get_template_part( 'template-parts/page/content-documents');
  }
  else if(is_page('bank-details') || is_page('rekvizityi')){
    get_template_part( 'template-parts/page/content-details');
  }
  else if(is_page('friends-of-the-foundation') || is_page('druzya-fonda')){
    get_template_part( 'template-parts/page/content-friends');
  }
  else if(is_page('how-to-help') || is_page('kak-pomoch')){
    get_template_part( 'template-parts/page/content-voluntary');
  }
  else if(is_page('life-in-pictures') || is_page('sudba-v-fotografiyah')){
    get_template_part( 'template-parts/page/content-pictures');
  }
  else if(is_page('books-where-to-buy') || is_page('knigi-gde-kupit')){
    get_template_part( 'template-parts/page/content-buy');
  }
  else if(is_page('chronology') || is_page('hronologiya')){
    get_template_part( 'template-parts/page/content-chronology');
  }
  else if(is_page('activities') || is_page('prosvetitelskaya-deyatelnost')){
    get_template_part( 'template-parts/page/content-activities');
  }
  else if(($post->post_parent == '653') || ($post->post_parent == '31')){
    get_template_part( 'template-parts/page/content-pictures-one');
  }
  else if(($post->post_parent == '655') || ($post->post_parent == '25')){
    get_template_part( 'template-parts/page/content-chronology-one');
  }
  else{
    get_template_part( 'template-parts/page/content-page');
  }

get_footer(); ?>