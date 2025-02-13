// nav-links active menu
document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active-menu");
    }
});

const hamburgerBtn = document.getElementById("hamburger");
const navbarNav = document.getElementById("nav_menu");
const navLinks = document.querySelectorAll(".nav-link");

hamburgerBtn.addEventListener("click", () => {
    navbarNav.classList.toggle("left-[0]");
    hamburgerBtn.classList.toggle("fa-x");
});

navLinks.forEach((link) => {
    link.addEventListener("click", () => {
        navbarNav.classList.toggle("left-[0]");
        hamburgerBtn.classList.toggle("fa-x");
    });
});

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
