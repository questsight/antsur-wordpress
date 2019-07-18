jQuery(document).ready(function () {
  jQuery('#filter-open').click(function () {
    jQuery( '.filter' ).fadeToggle(600);
    jQuery( '.archive-legacy__search-parameter' ).fadeToggle(600);
    jQuery('#filter-open').toggleClass('archive-legacy__button_content_open')
  });
  jQuery('#filter-en-open').click(function () {
    jQuery( '.filter' ).fadeToggle(600);
    jQuery( '.archive-legacy__search-parameter' ).fadeToggle(600);
    jQuery('#filter-en-open').toggleClass('archive-legacy__button-en_content_open')
  });
  jQuery("#form-en input, #form-en select").change(function(e) {
    var str = jQuery("#form-en").serialize();
    jQuery("#result-en").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-en.php',
        data: str,
        method: 'POST',
        success: function(data){
          jQuery("#result-en").html(data);
        }
    });
  })
  jQuery("#form-ru input, #form-ru select").change(function(e) {
    var str = jQuery("#form-ru").serialize();
    jQuery("#result-ru").html('<div style="text-align:center; padding:30px;"><img src="https://antsur.ru/wp-content/themes/solovki/assets/images/ajax-loader.gif"></div>');
    jQuery.ajax({
        url: 'https://antsur.ru/wp-content/themes/solovki/ajax-ru.php',
        data: str,
        method: 'POST',
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
