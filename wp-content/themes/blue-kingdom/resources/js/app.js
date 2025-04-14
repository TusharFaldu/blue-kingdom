import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

document.addEventListener('DOMContentLoaded', () => {
  const toggle = document.getElementById('menu-toggle');
  const menu = document.getElementById('mobile-menu');
  
  if (toggle) {
    toggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });
  }
});


import $ from 'jquery';
import 'slick-carousel';

// Ensure jQuery is globally available for plugins
window.$ = $;
window.jQuery = $;

$('.slick-slider').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  draggable: true,
  swipe: true,
  dots: true,
  arrows: true,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        dots: true,
        arrows: false,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 1,
        dots: false,
        arrows: false,
      },
    },
  ],
});

document.addEventListener('DOMContentLoaded', function () {
  const headerInner = document.getElementById('main-header-inner');

  window.addEventListener('scroll', function () {
    if (window.scrollY > 10) {
      headerInner.classList.add('bg-blue-950', 'shadow-lg');
    } else {
      headerInner.classList.remove('bg-blue-950', 'shadow-lg');
    }
  });
});



/*jQuery('.slick-slider').slick({
	slidesToShow: 4,
	slidesToScroll: 2,
	infinite: false,
	dots: true,
	//centerPadding: '0px',
	//variableWidth: true,
	focusOnSelect: false,
	arrows: false,
	autoplay: false,
	//autoplaySpeed: 6000,
	responsive: [
		{
			breakpoint: 1199,
			settings: {
				//arrows: false,
				slidesToShow: 3,
				slidesToScroll: 1,
				autoplay: false,
				variableWidth: true,
				//autoplaySpeed: 5000
			}
		},
		{
			breakpoint: 767,
			settings: {
				arrows: false,
				slidesToShow: 1,
				slidesToScroll: 1,				
				variableWidth: true,
				//autoplaySpeed: 5000
			}
		}
	]
});

*/

