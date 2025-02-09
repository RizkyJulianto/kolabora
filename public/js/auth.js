const passwordField = document.getElementById("password");
const passwordIcon = document.querySelector(".password-icon i");

passwordIcon.addEventListener("click", function () {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordIcon.classList.remove("fa-eye");
        passwordIcon.classList.add("fa-eye-slash");
        passwordIcon.style.color = "#2563EB";
    } else {
        passwordField.type = "password";
        passwordIcon.classList.remove("fa-eye-slash");
        passwordIcon.classList.add("fa-eye");
        passwordIcon.style.color = "#6b7280";
    }
});

// swiper
const swiper = new Swiper(".auth_swiper", {
    slidesPerView: 1,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    loop: true,
    pagination: {
        el: ".swiper-pagination",
    },
});
