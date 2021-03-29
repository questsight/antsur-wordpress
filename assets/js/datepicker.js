jQuery( document ).ready(function() {
    jQuery('#datepicker').datepicker({dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'], monthNamesShort: ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'],dateFormat: 'dd.mm.yy',changeMonth: true,changeYear: true,yearRange:'1941:2003',altField: "#actual-date",altFormat: "yy-mm-dd",firstDay: 1,});
    jQuery('#datepicker-en').datepicker({dateFormat: 'dd.mm.yy',changeMonth: true,changeYear: true,yearRange:'1941:2003',altField: "#actual-date",altFormat: "yy-mm-dd"}); 
});