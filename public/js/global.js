$(document).ready(function() {
  // Init stuff
  var init = function() {
    $(".datatables").DataTable();
  }

  init();

  // Bootstrap notify defaults
  $.notifyDefaults({
    placement:{from: 'bottom',align: 'center'},
  });
});
