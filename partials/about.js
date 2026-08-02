let head = document.querySelector(".bckbtn");

window.addEventListener("scroll", function () {
  console.log('jgjhfy');
  if (window.pageYOffset > 150) {
    head.style.display = "block"
  } else if (window.pageYOffset < 150) {
    head.style.display = "none"
  }
})
/**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

// loader

const loader = document.getElementById("load");
const loadFunc = () => {
  loader.style.display = "none"
}


// counter start

$(document).ready(function () {
  $('.counter').each(function () {
    $(this).prop('Counter', 0).animate({
      Counter: $(this).text()
    }, {
      duration: 8000,
      easing: 'swing',
      step: function (now) {
        $(this).text(Math.ceil(now) + '+');
      }
    });
  });
});

// counter end





$(document).ready(function () {
  $('.customer-logos').slick({
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 4
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 3
      }
    }]
  });
});
