jQuery( document ).ready( function () {
  var w = jQuery( document ).width();
  if( w > 768 ){
     var wInfo = jQuery( '.archive__info' ).innerWidth()*0.9;
      
      jQuery( '.archive__info' ).innerHeight(wInfo); 
     }
});
jQuery( window ).resize( function() {
  jQuery( '.archive__info' ).css({'height':'100%'});
  var w = jQuery( document ).width();
  if( w > 768 ){
     var wInfo = jQuery( '.archive__info' ).innerWidth()*0.9;
      jQuery( '.archive__info' ).innerHeight(wInfo); 
     }
});

jQuery( document ).ready( function() {
	jQuery( '.archive__button' ).click( function () {
        jQuery( '.archive__single-past' ).toggleClass( 'archive__hidden' );
        jQuery( '.archive__button' ).toggleClass( 'archive__button-open' );
	});
  
  jQuery('.archive-memory').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).after('<div class="clearfix"></div>'); 
    }
  });
  
});
jQuery( document ).ready( function() {

  jQuery( '#button-authors' ).click( function() {
    jQuery("#button-authors").hide();
    jQuery("#box-authors").show();
  });
  jQuery( '#exit-authors' ).click( function() {
    jQuery("#button-authors").show();
    jQuery("#box-authors").hide();
  });
  jQuery( '#button-tags' ).click( function() {
    jQuery("#button-tags").hide();
    jQuery("#box-tags").show();
  });
  jQuery( '#exit-tags' ).click( function() {
    jQuery("#button-tags").show();
    jQuery("#box-tags").hide();
  });

});

jQuery( document ).ready( function() {
  jQuery('.archive-annotatsii__cell_width_50').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).css("border-left", "none");
      jQuery(this).after('<div class="clearfix"></div>');
    }
    if ((i+1) != 1 && (i+1) != 2){
      jQuery(this).css("border-top", "none"); 
    }
  });
});
jQuery(document).ready(function () {
  jQuery('#close1').click(function () {
    jQuery( '#instruction1' ).hide();
  });
  jQuery('#close2').click(function () {
    jQuery( '#instruction2' ).hide();
  });
  jQuery('#question1').click(function () {
    jQuery( '#instruction1' ).show();
  });
  jQuery('#question2').click(function () {
    jQuery( '#instruction2' ).show();
  });
  jQuery('.archive-legacy__one').eq(0).addClass('archive-legacy__one-initial');
});

jQuery( document ).ready( function() {
  jQuery( '#callback' ).click( function() {
    jQuery( '#modal' ).fadeIn( 600 );
  });
  jQuery( '#modal__button, #modal__shut' ).click( function() {
    jQuery( '#modal' ).fadeOut( 600 );
  });
});
jQuery(document).ready(function () {
  jQuery('#filter-open').click(function () {
    jQuery( '.filter' ).fadeToggle(600);
    jQuery( '.archive-legacy__search-parameter' ).fadeToggle(600);
    jQuery('#filter-open').toggleClass('archive-legacy__button_content_open');
  });
  jQuery('#filter-en-open').click(function () {
    jQuery( '.filter' ).fadeToggle(600);
    jQuery( '.archive-legacy__search-parameter' ).fadeToggle(600);
    jQuery('#filter-en-open').toggleClass('archive-legacy__button-en_content_open')
  });
  jQuery("#form-en input, #form-en select").change(function(e) {
    var str = jQuery("#form-en").serialize();
    history.pushState({}, '', '?'+str);
    jQuery("#result-en").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-en.php',
        data: str,
        method: 'GET',
        success: function(data){
          jQuery("#result-en").html(data);
        }
    });
  })
  jQuery("#form-ru input, #form-ru select").change(function(e) {
    var str = jQuery("#form-ru").serialize();
    history.pushState({}, '', '?'+str);
    jQuery("#result-ru").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-ru.php',
        data: str,
        method: 'GET',
        success: function(data){
          jQuery("#result-ru").html(data);
        }
    });
  })
  jQuery('#button-theme').click(function () {
    jQuery( '#filter-theme' ).removeClass('filter__hidden');
    jQuery( '#button-theme' ).addClass('filter__button-active');
    jQuery( '#filter-place' ).addClass('filter__hidden');
    jQuery( '#button-place' ).removeClass('filter__button-active');
    jQuery( '#filter-period' ).addClass('filter__hidden');
    jQuery( '#button-period' ).removeClass('filter__button-active');
    jQuery( '#filter-genre' ).addClass('filter__hidden');
    jQuery( '#button-genre' ).removeClass('filter__button-active');
  });
  jQuery('#button-place').click(function () {
    jQuery( '#filter-theme' ).addClass('filter__hidden');
    jQuery( '#button-theme' ).removeClass('filter__button-active');
    jQuery( '#filter-place' ).removeClass('filter__hidden');
    jQuery( '#button-place' ).addClass('filter__button-active');
    jQuery( '#filter-period' ).addClass('filter__hidden');
    jQuery( '#button-period' ).removeClass('filter__button-active');
    jQuery( '#filter-genre' ).addClass('filter__hidden');
    jQuery( '#button-genre' ).removeClass('filter__button-active');
  });
  jQuery('#button-period').click(function () {
    jQuery( '#filter-theme' ).addClass('filter__hidden');
    jQuery( '#button-theme' ).removeClass('filter__button-active');
    jQuery( '#filter-place' ).addClass('filter__hidden');
    jQuery( '#button-place' ).removeClass('filter__button-active');
    jQuery( '#filter-period' ).removeClass('filter__hidden');
    jQuery( '#button-period' ).addClass('filter__button-active');
    jQuery( '#filter-genre' ).addClass('filter__hidden');
    jQuery( '#button-genre' ).removeClass('filter__button-active');
  });
  jQuery('#button-genre').click(function () {
    jQuery( '#filter-theme' ).addClass('filter__hidden');
    jQuery( '#button-theme' ).removeClass('filter__button-active');
    jQuery( '#filter-place' ).addClass('filter__hidden');
    jQuery( '#button-place' ).removeClass('filter__button-active');
    jQuery( '#filter-period' ).addClass('filter__hidden');
    jQuery( '#button-period' ).removeClass('filter__button-active');
    jQuery( '#filter-genre' ).removeClass('filter__hidden');
    jQuery( '#button-genre' ).addClass('filter__button-active');
  });
  
//Постраничная новигация
  var page1 = 0;
  var page2 = 10;
  var a1 = 0;
  var a2 = 1;
  var a3 = 2;
  var sum = jQuery("#sum").attr('sum');
  jQuery( '.archive__one' ).slice(page1, page2).show();
  jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").addClass("archive-legacy__page-numbers-activa");
  jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").show();
  jQuery(".archive-legacy__page-numbers[page=" + a3 + "]").show();
  jQuery(".archive-legacy__page-numbers[page=" + sum + "]").show();
  jQuery(".dots[dots=" + a3 + "]").show();
  jQuery(".archive-legacy__page-numbers[page='next']").show();
  
  jQuery('.archive-legacy__page-numbers').click(function () {
    jQuery('.archive-legacy__page-numbers').removeClass("archive-legacy__page-numbers-activa");
    var a = jQuery(this).attr('page');
    if(a == "prev"){
      page1 = page1 - 10;
      page2 = page2 - 10;
      a1 = parseInt(jQuery(this).attr('link')) - 1;
      a2 = parseInt(jQuery(this).attr('link'));
      a3 = parseInt(jQuery(this).attr('link')) + 1;
    } else if (a == "next"){
      page1 = page1 + 10;
      page2 = page2 + 10;
      a1 = parseInt(jQuery(this).attr('link')) - 1;
      a2 = parseInt(jQuery(this).attr('link'));
      a3 = parseInt(jQuery(this).attr('link')) + 1;
    } else {
      page1 = (a - 1) * 10;
      page2 = a * 10;
      a1 = parseInt(a) - 1;
      a2 = parseInt(a);
      a3 = parseInt(a) + 1;
    }
      
    jQuery(".archive-legacy__page-numbers").hide();
    jQuery(".archive-legacy__page-numbers[page=" + a1 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + a3 + "]").show();
    jQuery(".archive-legacy__page-numbers[page=" + sum + "]").show();
    if(a2 != 1){
      jQuery(".archive-legacy__page-numbers[page='prev']").show(); 
    }
    if(a2 != sum){
      jQuery(".archive-legacy__page-numbers[page='next']").show(); 
    }
    jQuery(".dots").hide();
    if(a3 < (sum-1)){
      jQuery(".dots[dots=" + a3 + "]").show();
    }
    if(a1 > 2){
      jQuery(".dots[dots='1']").show();
    }
    jQuery(".archive-legacy__page-numbers[page='1']").show();
    jQuery(".archive-legacy__page-numbers[page=" + a2 + "]").addClass("archive-legacy__page-numbers-activa");
    jQuery( '.archive__one' ).hide();
    jQuery( '.archive__one' ).slice(page1, page2).show();
    setTimeout(function() {
      jQuery(".archive-legacy__page-numbers[page='prev']").attr('link',a1);
      jQuery(".archive-legacy__page-numbers[page='next']").attr('link',a3);
    }, 0);
  });
  
  
});

/*jQuery( document ).ready(function() {
  if(jQuery('#datepicker').length){
    jQuery('#datepicker').datepicker({dayNamesMin: ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'], monthNamesShort: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],dateFormat: 'dd.mm.yy',changeMonth: true,changeYear: true,yearRange:'1941:2003',altField: "#actual-date",altFormat: "yy-mm-dd"});
  }
  if(jQuery('#datepicker-en').length){
   jQuery('#datepicker-en').datepicker({dateFormat: 'dd.mm.yy',changeMonth: true,changeYear: true,yearRange:'1941:2003',altField: "#actual-date",altFormat: "yy-mm-dd"}); 
  }
});*/

jQuery( document ).ready( function() {
	jQuery( '#hamburger' ).click( function () {
		jQuery( '.hamburger__item' ).toggleClass( 'hamburger__item_open' );
	}); 
});
jQuery( document ).ready( function() {
  if ( window.matchMedia( '(min-width: 991px)' ).matches ) {
    jQuery( '#navigation__list' ).removeClass( 'navigation__hidden' );
  }
  jQuery( '.navigation__hidden .menu-item-has-children a').attr("onclick", "return false");
  jQuery( '.navigation__hidden .menu-item-has-children ul li a').removeAttr("onclick");
  jQuery( '#hamburger' ).click( function() {
      jQuery( '#navigation' ).fadeToggle(600);
  });
  jQuery( '.navigation__hidden .menu-item-has-children' ).click( function() {
    if ( jQuery(this).hasClass(".menu-item-has-children-active") ) {
      jQuery('.navigation__hidden .menu-item-has-children').removeClass('.menu-item-has-children-active');
      jQuery(".navigation__hidden .menu-item-has-children ul").hide(600);
    } else {
      jQuery('.navigation__hidden .menu-item-has-children').removeClass('.menu-item-has-children-active');
      jQuery(this).addClass('.menu-item-has-children-active');
      jQuery(".navigation__hidden .menu-item-has-children ul").hide(600);
      jQuery("> ul", this).show(600); 
    }
  });
  jQuery('#navigation__list .menu-item-type-custom > a', this).on('click', function(){
    if ( window.matchMedia( '(min-width: 991px)' ).matches ) {
      return false;
    }
  }); 
});

jQuery( document ).ready( function () {
  var w = jQuery( window ).width();
  if( w > 1170 ) {
    var h = jQuery( '.main__one' ).innerWidth();
    jQuery( '.main__one' ).innerHeight(h); 
  }
  else {
    var hLeft = jQuery( '.main-left' ).innerHeight();
    var hCenter= jQuery( '.main-center' ).innerHeight(); 
    var hRight = jQuery( '.main-right' ).innerHeight();
    if( hLeft >= hCenter && hLeft >= hRight) {
      jQuery( '.main__one' ).innerHeight(hLeft); 
    }
    else if( hCenter >= hLeft && hCenter >= hRight){
      jQuery( '.main__one' ).innerHeight(hCenter); 
    }
    else {
      jQuery( '.main__one' ).innerHeight(hRight);
    }
  }
  var hCenter = jQuery( '.main-center' ).height();
  var wCenter = jQuery( '.main-center' ).width();
  var hImg = jQuery( '.main-center img' ).height();
  var wImg = jQuery( '.main-center img' ).width();
  var hwImg = hImg / wImg;
  var hwCenter = hCenter / wCenter;
  
  if( hwImg >= hwCenter) {
    jQuery( '.main-center img' ).css({'width': wCenter, 'height':'auto'});
  }
  else {
    jQuery( '.main-center img' ).css({'width':'auto', 'height': hCenter});
  } 
});
jQuery( window ).resize( function() {
  jQuery( '.main__one' ).css({'height':'100%'}); 
  var w = jQuery( window ).width();
  if( w > 1170 ) {
    var h = jQuery( '.main__one' ).innerWidth();
    jQuery( '.main__one' ).innerHeight(h); 
  }
  else {
    var hLeft = jQuery( '.main-left' ).innerHeight();
    var hCenter= jQuery( '.main-center' ).innerHeight(); 
    var hRight = jQuery( '.main-right' ).innerHeight();
    if( hLeft >= hCenter && hLeft >= hRight) {
      jQuery( '.main__one' ).innerHeight(hLeft); 
    }
    else if( hCenter >= hLeft && hCenter >= hRight){
      jQuery( '.main__one' ).innerHeight(hCenter); 
    }
    else {
      jQuery( '.main__one' ).innerHeight(hRight);
    }
  }
  jQuery( '.main-center img' ).css({'width':'auto', 'height':'auto'});
    var hCenter = jQuery( '.main-center' ).height();
  var wCenter = jQuery( '.main-center' ).width();
  var hImg = jQuery( '.main-center img' ).height();
  var wImg = jQuery( '.main-center img' ).width();
  var hwImg = hImg / wImg;
  var hwCenter = hCenter / wCenter;
  
  if( hwImg >= hwCenter) {
    jQuery( '.main-center img' ).css({'width': wCenter, 'height':'auto'});
  }
  else {
    jQuery( '.main-center img' ).css({'width':'auto', 'height': hCenter});
  } 

});
jQuery( document ).ready( function() {
  jQuery( '#button__modal_section_main' ).click( function() {
    jQuery( '#modal' ).fadeIn( 600 );
  });
  jQuery( '#modal__button, #modal__shut' ).click( function() {
    jQuery( '#modal' ).fadeOut( 600 );
  });
});

jQuery('.features_01__clear .col-sm-4').each(function(i,e){
  if (((i+1) % 3) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});
jQuery('.features_02__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 4) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
  else if (((i+1) % 2) == 0)
     jQuery(this).after('<div class="clearfix visible-sm"></div>');
});
jQuery('.features_03__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 2) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});
jQuery('.features_04__clear .col-sm-6').each(function(i,e){
  if (((i+1) % 2) == 0)
    jQuery(this).after('<div class="clearfix"></div>');
});
jQuery(document).ready(function () {
  jQuery('#certificate-title').click(function () {
    jQuery('#articles').hide();
    jQuery('#certificate').show();
    jQuery('#articles-title').removeClass('page__subtitle-active');
    jQuery('#certificate-title').addClass('page__subtitle-active');
  });
  jQuery('#articles-title').click(function () {
    jQuery('#articles').show();
    jQuery('#certificate').hide();
    jQuery('#articles-title').addClass('page__subtitle-active');
    jQuery('#certificate-title').removeClass('page__subtitle-active');
  });
  jQuery(".page__envira .envira-gallery-item").each(function(){
    var name = jQuery(this).find(".envira-gallery-image").attr("title");
    jQuery(this).children(".envira-gallery-wrap .envira-gallery-public .envira-gallery-item-inner").after('<div class="envira-name">' + name + '</div>');
    jQuery(this).find(".envira-gallery-image").after('<div class="envira-magnifier"><i class="fa fa-search-plus" aria-hidden="true"></i></div>');
  });
});
jQuery( '.envira-gallery-item' ).click( function () { 
  jQuery(".envira-share").show();
}); 

jQuery("body").on("click", '#envirabox-close', function () { 
    jQuery(".envira-share").hide();
});
jQuery( document ).ready( function() {
  jQuery( '.page-hronologiya__arrow' ).click( function() {
      jQuery(this).parent().parent().children('.page-hronologiya__entirely').toggle();
      jQuery(this).toggleClass("page-hronologiya__arrow_transform_190");
      jQuery(this).parent().children('.page-hronologiya__instruction').toggleClass("open");
  });
  jQuery( '.page-hronologiya__entirely' ).click( function() {
      jQuery(this).hide();
      jQuery(this).parent().children('.page-hronologiya__instruction-box').children('.page-hronologiya__arrow').removeClass("page-hronologiya__arrow_transform_190");
      jQuery(this).parent().children('.page-hronologiya__instruction-box').children('.page-hronologiya__instruction').removeClass("open");
  });  
  jQuery('.page-hronologiya__instruction-box').hover(
    function(){
      var pos = jQuery(window).width() - jQuery(this).offset().left;
      if(pos < 200){
        pos = 40 - pos;
        jQuery(this).children('.page-hronologiya__instruction').css("right", pos);
      }
      jQuery(this).children('.page-hronologiya__instruction').show();
    },
    function(){
      jQuery(this).children('.page-hronologiya__instruction').hide();
    });
});

jQuery( document ).ready( function() {
  jQuery('.page-sovet__cell_width_50').each(function(i,e){
    if (((i+1) % 2) == 0){
      jQuery(this).after('<div class="clearfix"></div>'); 
    }
  });
});


jQuery( document ).ready( function() {
  jQuery( '.popup-img' ).click( function() {
    jQuery(this).attr("hidden","true")
  });
  jQuery( '.popup-open' ).click( function() {
    var popupimg = jQuery(this).attr('src');
    jQuery( '.popup-img img' ).attr('src',popupimg);
    jQuery( '.popup-img' ).removeAttr("hidden");
  });
});

jQuery( document ).ready( function() {
	jQuery( '.single__review-title' ).click( function () {
		jQuery( '.single__review-title' ).hide();
        jQuery( '.single__review' ).show();
	});
	jQuery( '.single__review' ).click( function () {
		jQuery( '.single__review-title' ).show();
        jQuery( '.single__review' ).hide();
	});
  if(jQuery('.single__review-text').is(':empty') == true){
      jQuery( '.single__review-title' ).hide();
      jQuery( '.single__review' ).hide();
    }
jQuery( '.single__button' ).click( function () {
  jQuery( '.single__form-box' ).show();
  var t = jQuery(".single__form-box").offset()
  window.scrollTo(0, t.top);
});
jQuery( '.single__form-close' ).click( function () {
  jQuery( '.single__form-box' ).hide();
});
});
jQuery( document ).ready( function() {
	jQuery( '.switcher__box' ).click( function () {
		jQuery( '.switcher__title' ).toggleClass( 'switcher__title-active' );
    jQuery( '.page__title_font_italic' ).toggleClass( 'page__title-active_font_italic' );
    jQuery( '.switcher__link' ).toggleClass( 'switcher__link-active' );
	}); 
});

jQuery( document ).ready( function() {
	jQuery( '#program-tit' ).click( function () {
		jQuery( '#program-link' ).fadeToggle();
	});
  jQuery( '#report-tit' ).click( function () {
		jQuery( '#report-link' ).fadeToggle();
	}); 
})