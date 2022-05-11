window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("scrolled").style.background ="#EFF0F1";
  } else {
    document.getElementById("scrolled").style.background = "transparent";
  }
}

$(document).ready(function() {
    $(window).on("load", function() {
        preloaderFadeOutTime = 1400;

        function hidePreloader() {
            var preloader = $('.pre-loader');
            preloader.fadeOut(preloaderFadeOutTime);
        }
        hidePreloader();
    });
});


/*document.addEventListener("DOMContentLoaded", function() {
    var elements = document.getElementsByTagName("INPUT");
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Awit lods! Pakilagyan please.");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    }
})
*/