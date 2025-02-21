const passwordField = document.getElementById("password");
const passwordIcon = document.querySelector(".password-icon i");

passwordIcon.addEventListener("click", function () {
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordIcon.classList.remove("fa-eye-slash");
        passwordIcon.classList.add("fa-eye");
        passwordIcon.style.color = "#2563EB";
    } else {
        passwordField.type = "password";
        passwordIcon.classList.remove("fa-eye");
        passwordIcon.classList.add("fa-eye-slash");
        passwordIcon.style.color = "#6b7280";
    }
});

const passwordConfirmField = document.getElementById("password_confirmation");
const passwordConfirmIcon = document.querySelector(".password-icon-c i");

passwordConfirmIcon.addEventListener("click", function () {
    if (passwordConfirmField.type === "password") {
        passwordConfirmField.type = "text";
        passwordConfirmIcon.classList.remove("fa-eye-slash");
        passwordConfirmIcon.classList.add("fa-eye");
        passwordConfirmIcon.style.color = "#2563EB";
    } else {
        passwordConfirmField.type = "password";
        passwordConfirmIcon.classList.remove("fa-eye");
        passwordConfirmIcon.classList.add("fa-eye-slash");
        passwordConfirmIcon.style.color = "#6b7280";
    }
});
