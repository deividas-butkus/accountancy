// "use strict"


// #js-navbar seselis pa'scrollinus ==========================

window.onscroll = function() {
    changeNavbarClassOnScroll();
    scrollSpy();
};

function changeNavbarClassOnScroll() {
    if (document.body.scrollTop || document.documentElement.scrollTop) {
        document.getElementById("navbar").className = "navbar--scrolled";
    } else {
        document.getElementById("navbar").className = "navbar";
    }
}
// ??? ============================
// Kaip padaryti, kad pradetu veikti tik paskrolinus X dyd5 nuo virsaus.
// Kaip sugrįžti, kai veikiaabi

// fja paskrolinus iki puslapio aktyvuoti nav puntkus

  function scrollSpy () {
  
      let section = document.querySelectorAll(".section");
      let sections = {};
      let i = 0;
    
      Array.prototype.forEach.call(section, function(e) {
        sections[e.id] = e.offsetTop;
      });
    
      window.onscroll = function() {
        let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
    
        for (i in sections) {
          if (sections[i] <= scrollPosition) {
            document.querySelector('.navbar__link--activated').setAttribute('class', ' ');
            document.querySelector('a[href="#' + i + '"').setAttribute('class', 'navbar__link--activated');
          }
        }
      };
    };

    // Initialize and add the map
function initMap() {
    // The location of Uluru
    var uluru = {lat: -25.344, lng: 131.036};
    // The map, centered at Uluru
    var map = new google.maps.Map(
        document.getElementById('map'), {zoom: 4, center: uluru});
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({position: uluru, map: map});
  }