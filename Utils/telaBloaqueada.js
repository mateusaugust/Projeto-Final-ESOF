
$(document).ready(function() {
  checkProportion();
 
  
  $(window).resize(function() {
    checkProportion();
  });

  function checkProportion() {
    var screenWidth = $(window).width();
    var screenHeight = $(window).height();

    if (screenHeight <= 554 || screenWidth <=948) {
      showOverlay();
    } else{
      hideOverlay();
    }
  }
  
  function showOverlay() {
    $('#overlay').show();
  }
  
  function hideOverlay() {
    $('#overlay').hide();
  }
});