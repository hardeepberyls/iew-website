$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 3,
                nav: false
            },
            1000: {
                items: 3,
                nav: false,
                loop: true,
                margin: 20
            }
        }
    })
})

// let data = document.querySelector('.header_section');
// let scrollpos = window.scrollY;

// window.addEventListener("scroll", function () {
//     if (scrollpos >= 50) {
//         data.classList.add("fixed-top");
//     }
//     else {
//         data.classList.remove("fixed-top");
//     }
//     console.log(scrollpos)
// })

$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.header_section').addClass('fixed-top');
    } else {
        $('.header_section').removeClass('fixed-top');
    }
});