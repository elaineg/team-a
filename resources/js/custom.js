$(document).ready(function() {
// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function(){ 
        $('.navbar-toggle:visible').click();
});
  
  $(window).scroll(function () {
      //if you hard code, then use console
      //.log to determine when you want the 
      var d = $('#jumbo');
    if ($(window).scrollTop() > d.prop("scrollHeight") ) {
      $('#nav_bar').addClass('navbar-fixed-top');
      $('#linkList').addClass('fixed-links');
      //$('body').css('margin-top','54px');
    }
    if ($(window).scrollTop() < d.prop("scrollHeight")) {
      $('#nav_bar').removeClass('navbar-fixed-top');
      $('#linkList').removeClass('fixed-links');
      //$('body').css('margin-top','0px');
    }
  });

  // Add smooth scrolling to nav links
  $(".XX").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();
      // Store hash
      var hash = this.hash;
      console.log("Hash" + hash);
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top - 50
      }, 800, function(){
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});