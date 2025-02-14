var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1, // Default untuk layar kecil
    spaceBetween: 20,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2, // Untuk tablet
        },
        1024: {
            slidesPerView: 3, // Untuk layar besar (menampilkan 3 card per slide)
        }
    }
});



// Responsive Navbar
const navigation = document.getElementById('navigation');
const navLinks = document.querySelectorAll('.nav-links');
const hamburger = document.querySelector('#hamburger');


hamburger.addEventListener('click', function() {
    hamburger.classList.toggle('hamburger-active');
    navigation.classList.toggle('nav-active');
});

navLinks.forEach(anchor => {
    anchor.addEventListener('click', function() {
        navigation.classList.remove('nav-active');
        hamburger.classList.remove('hamburger-active');
    });
});


// Loading Bar
document.addEventListener("DOMContentLoaded", function () {
    let loadingBar = document.getElementById("loading-bar");

    function startLoading() {
        loadingBar.style.width = "0%";
        loadingBar.style.opacity = "1";
        let progress = 0;
        let interval = setInterval(() => {
            if (progress < 90) {
                progress += Math.random() * 10;
                loadingBar.style.width = progress + "%";
            } else {
                clearInterval(interval);
            }
        }, 100);
    }

    function completeLoading() {
        loadingBar.style.width = "100%";
        setTimeout(() => {
            loadingBar.style.opacity = "0";
            loadingBar.style.width = "0%";
        }, 300);
    }

    document.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function (e) {
            startLoading();
        });
    });

    window.addEventListener("load", completeLoading);
});