jQuery(document).ready(function($){
  $(".menu-photos li a").click(function(){
    var value = $(this).attr("href").replace('#', '');
    if (value == "all")
    {
      $(".photos-item").show("1000");
    }
    else
    {
      $(".photos-item").not("."+value).hide("1000");
      $(".photos-item").filter("."+value).show("1000");
    }
    $("ul .button").click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    });
  });
  $("a[href='#dienos-pietus']").click(function() {
      $('html, body').animate({
          scrollTop: $(".pietus-container").offset().top-40
      }, 1000);
  });


  $(".scroll-down1").click(function() {
      $('html, body').animate({
          scrollTop: $(".main-meniu").offset().top
      }, 1000);
  });


  $(".scroll-down2").click(function() {
      $('html, body').animate({
          scrollTop: $(".map").offset().top
      }, 1000);
  });

  $(".burger").click(function() {
    $('.top-menu li').toggleClass('hide');
  });

  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          if(target[0].className  == 'about-container') {
            $('html, body').animate({
              scrollTop: target.offset().top-250
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };

            });
          } else {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };

            });
          }

        }

      }
    });





    function myMap() {
      var mapOptions = {
          center: new google.maps.LatLng(51.5, -0.12),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
      }
  var map = new google.maps.Map(document.getElementById(".map"), mapOptions);
  };

});



// $('.menu-photos li').click(function(){
//   var classToShow = $(this).data('filter');
//   $('.photos-container .photos-item').each(function(index, element) {
//     $(element).removeClass('toggle-filter');
//     if( !$(element).hasClass(classToShow) ) {
//       $(element).addClass('toggle-filter');
//     }
//   });
//   $("ul .button").click(function(){
//     $(this).addClass('active').siblings().removeClass('active');
//   })
// });
