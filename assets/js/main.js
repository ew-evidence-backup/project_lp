$('.input-datetime').datetimepicker({
  format:'Y-m-d H:i:00',
  formatTime:'g:iA'
});

$('.input-date').datetimepicker({
  format:'M d,Y',
  timepicker:false
});

var jsp = $('.pane-scroll').jScrollPane().data('jsp');

$('.filter-links a').click(function(e){
  e.preventDefault();
  var source = $(this).attr('data-source');
  if (source == '0') {
    $('input[name="geo_sources"]').parent().parent().parent().show();
  } else {
    var class_name = '.source-' + source ;
    console.log(class_name);
    $('input[name="geo_sources"]').parent().parent().parent().hide();
    $(class_name).parent().parent().parent().show();
  }
  $('.filter-links a').css('font-weight','normal');
  $(this).css('font-weight','bold');
  jsp.reinitialise();
});

$('.select-all').click(function(e){
  e.preventDefault();
  $(this).parent().parent().find('input').prop('checked', true);
});

$('.select-none').click(function(e){
  e.preventDefault();
  $(this).parent().parent().find('input').prop('checked', false);
});

$('.ads-select-all').click(function(e){
  if ($(this).val() == 'select all') {
    $(this).parent().parent().find('input').prop('checked', true);
    $(this).val('select none');
  } else {
    $(this).parent().parent().find('input').prop('checked', false);
    $(this).val('select all');
  }
});

$('.nav-adzone ul li').hover(function(e){
  var index = $(this).index();
  var left = (index * 187) + 72;
  $('.nav-adzone .quote-up').animate({ left: left }, 100);
  $('.nav-adzone .quote .inner').stop().hide();
  $('.nav-adzone .quote .inner').eq(index).fadeIn(500);
});
