function wow_js() {
  wow = new WOW({
    mobile: false,
    offset: 5,
  });
  wow.init();
}

function cardSlider() {
  const swiper = new Swiper('.card-slider', {
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".custom-next",
      prevEl: ".custom-prev",
    },
  });
}



(function ($) {
  "use strict";

  wow_js();
  cardSlider();
})(jQuery); // Invoke the function and pass jQuery as an argument


$(document).ready(function () {
  var headerHeight = $('#header').outerHeight(); // Get full height including padding
  $('.header-height').css('margin-top', headerHeight + 'px');
});

$('.clear-icon').on('click', function () {
  $(this).closest('.search-box-wrapper').find('.search-input').val('').focus();
});


function copySpacingFromContainer() {
  const container = document.querySelector('.container');
  const rightBox = document.querySelector('.rightBox');

  if (!container || !rightBox) return;

  // Check for desktop view (e.g., width > 768px)
  if (window.innerWidth <= 1024) {
    // If mobile or tablet, clear any inline styles to avoid conflicts
    rightBox.style.marginRight = '';
    rightBox.style.paddingRight = '';
    return;
  }

  const styles = window.getComputedStyle(container);

  const marginRight = styles.marginRight;
  const paddingRight = styles.paddingRight;

  // Apply same margin & padding to rightBox
  rightBox.style.marginRight = marginRight;
  rightBox.style.paddingRight = paddingRight;
}

// Run on load and resize
window.addEventListener('load', copySpacingFromContainer);
window.addEventListener('resize', copySpacingFromContainer);



function checkAndAddClass() {
  const element = document.querySelector('.custom-container');
  if (element && window.innerWidth <= 1023) {
    element.classList.add('container');
  } else if (element) {
    // If you want to remove the class on bigger screens:
    element.classList.remove('container');
  }
}

// Run on page load
checkAndAddClass();

// Also run on window resize
window.addEventListener('resize', checkAndAddClass);


window.addEventListener('load', function () {
  const preloader = document.getElementById('preloader');
  preloader.style.opacity = '0';
  preloader.style.pointerEvents = 'none';
  setTimeout(() => preloader.style.display = 'none', 500);
});