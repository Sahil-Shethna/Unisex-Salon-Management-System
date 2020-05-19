/*$(function() {
  $("#datepicker").datepicker({
    firstDay: 1
  });

});*/

$(function() {

  var side = $('.side');
  $("#datepicker").datepicker({
    firstDay: 1,
    onSelect: function( date) {
      side.animate({
        width: 'toggle'
      }, 2000);
    }
  });

});