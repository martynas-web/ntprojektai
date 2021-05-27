export default {
  init() {
    var TxtType = function(el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
  };

  TxtType.prototype.tick = function() {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
      delta = this.period;
      this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
      this.isDeleting = false;
      this.loopNum++;
      delta = 500;
      }

      setTimeout(function() {
      that.tick();
      }, delta);
  };

  window.onload = function() {
      var elements = document.getElementsByClassName('typewrite');
      for (var i=0; i<elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
            new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
      // INJECT CSS
      var css = document.createElement('style');
      css.type = 'text/css';
      css.innerHTML = '.typewrite > .wrap { border-right: 0.08em solid #fff}';
      document.body.appendChild(css);

      $(document).ready(function () {
        $('#autoWidth').lightSlider({
          item: 5,
          autoWidth: true,
          slideMove: 1, // slidemove will be 1 if loop is true
          slideMargin: 50,
          addClass: 'news-slider',
          mode: 'slide',
          cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
          easing: 'linear', //'for jquery animation',////
          speed: 800, //ms'
          auto: false,
          pauseOnHover: true,
          loop: false,
          currentPagerPosition: 'left',
          slideEndAnimation: true,
          pause: 2000,
          keyPress: false,
          controls: true,
          prevHtml: '',
          nextHtml: '',
          rtl: false,
          adaptiveHeight: false,
          vertical: false,
          verticalHeight: 500,
          vThumbWidth: 100,
          thumbItem: 10,
          pager: false,
          gallery: false,
          galleryMargin: 7,
          thumbMargin: 7,
          enableTouch: true,
          enableDrag: true,
          freeMove: false,
          swipeThreshold: 40,
  
          responsive: [
            {
                breakpoint:800,
                settings: {
                    item:2,
                    slideMove:1,
                    slideMargin:6,
                    adaptiveHeight: true,
                  },
            }, 
            {
                breakpoint:480,
                settings: {
                    item:1,
                    slideMove:1,
                    adaptiveHeight: true,
                  },
            },
        ],
        });
      });

      (() => {
        'use strict';
        const forms = document.querySelectorAll('.validation-form');
        Array.prototype.slice.call(forms).forEach((form) => {
          form.addEventListener('submit', (event) => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();

      $(document).ready(function() {
        $('.validation-form .form-button[type="submit"]').attr('disabled', 'disabled');
        $('.form-group').keyup(function() {
      
          var empty = false;   
          $('.form-control').each(function() {
              if ($(this).val().length == 0) {

                  empty = true;
              }
          });   
          if (empty) {
              $('.validation-form .form-button[type="submit"]').attr('disabled', 'disabled');
              $('.validation-form .form-button[type="submit"]').removeClass('active');
          } else {
              $('.validation-form .form-button[type="submit"]').removeAttr('disabled');
              $('.validation-form .form-button[type="submit"]').addClass('active');
          }                
        });
      });
  };
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
