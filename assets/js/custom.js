  // WOW.js Initialization (no jQuery)
  function wow_js() {
    const wow = new WOW({
      mobile: false,
      offset: 5,
    });
    wow.init();
  }

  // Swiper Initialization (no jQuery)
  function cardSlider() {
    new Swiper('.card-slider', {
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

  // DOMContentLoaded for general setup
  document.addEventListener('DOMContentLoaded', function () {
    wow_js();
    cardSlider();

    // Set margin-top of .header-height based on #header height
    const header = document.getElementById('header');
    const headerHeightEls = document.querySelectorAll('.header-height');
    if (header) {
      const headerHeight = header.offsetHeight;
      headerHeightEls.forEach(el => {
        el.style.marginTop = `${headerHeight}px`;
      });
    }

    // Clear input text when clear icon is clicked
    document.querySelectorAll('.clear-icon').forEach(icon => {
      icon.addEventListener('click', () => {
        const input = icon.closest('.search-box-wrapper')?.querySelector('.search-input');
        if (input) {
          input.value = '';
          input.focus();
        }
      });
    });

    // Dynamic height calculation for rightBox
    function setRightBoxHeight() {
      const headerHeight = document.getElementById('header')?.offsetHeight || 0;
      const barHeight = document.querySelector('.typ-main-bar')?.offsetHeight || 0;
      const totalHeight = headerHeight + barHeight;

      const rightBox = document.querySelector('.rightBox');
      if (rightBox) {
        rightBox.style.height = `calc(100dvh - ${totalHeight}px)`;
      }
    }

    setRightBoxHeight();
    window.addEventListener('resize', setRightBoxHeight);
  });

  // Copy spacing from .container to .rightBox
  function copySpacingFromContainer() {
    const container = document.querySelector('.container');
    const rightBox = document.querySelector('.rightBox');

    if (!container || !rightBox) return;

    if (window.innerWidth <= 1024) {
      rightBox.style.marginRight = '';
      rightBox.style.paddingRight = '';
      return;
    }

    const styles = window.getComputedStyle(container);
    rightBox.style.marginRight = styles.marginRight;
    rightBox.style.paddingRight = styles.paddingRight;
  }

  window.addEventListener('load', copySpacingFromContainer);
  window.addEventListener('resize', copySpacingFromContainer);

  // Toggle container class based on screen width
  function checkAndAddClass() {
    const element = document.querySelector('.custom-container');
    if (!element) return;

    if (window.innerWidth <= 1023) {
      element.classList.add('container');
    } else {
      element.classList.remove('container');
    }
  }

  window.addEventListener('load', checkAndAddClass);
  window.addEventListener('resize', checkAndAddClass);

  // Preloader fade-out
  window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    if (preloader) {
      preloader.style.opacity = '0';
      preloader.style.pointerEvents = 'none';
      setTimeout(() => preloader.style.display = 'none', 500);
    }
  });

