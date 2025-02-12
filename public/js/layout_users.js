// navbar
const hamburger = document.getElementById("hamburger");
const navbarNav = document.getElementById("navbar-nav");
const navLinks = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", () => {
    navbarNav.classList.toggle("left-[0]");
    hamburger.classList.toggle("fa-x");
});

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        navbarNav.classList.toggle("left-[0]");
        hamburger.classList.toggle("fa-x");
    });
});

// nav-links active menu
// document.querySelectorAll(".nav-link").forEach((link) => {
//     if (link.href === window.location.href) {
//         link.classList.add("active-menu");
//     }
// });

// dropdown menu
function dropDownMenu() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};
