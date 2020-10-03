"use strict"
// console.log('js veikia');


// #js-navbar seselis pa'scrollinus ==========================

window.onscroll = function() {changeNavbarClassOnScroll()};

function changeNavbarClassOnScroll() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        document.getElementById("js-navbar").className = "navbar--scrolled";
    } else {
        document.getElementById("js-navbar").className = "navbar";
    }
}



// vanila js scrollspy

// (function() {
  
//     let section = document.querySelectorAll(".page-section");
//     let sections = {};
//     let i = 0;
  
//     Array.prototype.forEach.call(page-section, function(e) {
//       sections[e.id] = e.offsetTop;
//     });
  
//     window.onscroll = function() {
//       let scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
  
//       for (i in sections) {
//         if (sections[i] <= scrollPosition) {
//           document.querySelector('.active').setAttribute('class', ' ');
//           document.querySelector('a[href*=' + i + ']').setAttribute('class', 'active');
//         }
//       }
//     };
//   })();
  