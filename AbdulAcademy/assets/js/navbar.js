$(function () {
      var header = $(".top-nav");
      $(window).scroll(function () {
        var scroll = $(window).scrollTop();

        if (scroll >= 500) {
          header.removeClass('top-nav').addClass("FireBrickRed ");
          header.addClass("transition");
        } else {
          header.removeClass("FireBrickRed ").addClass('top-nav');
          header.addClass("transition");
        }
      });
    });

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function () {
      var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("top-nav").style.top = "0";
      } else {
        document.getElementById("top-nav").style.top = "-150px";
      }
      prevScrollpos = currentScrollPos;
    }

