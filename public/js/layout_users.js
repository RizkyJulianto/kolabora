// nav-links active menu
document.querySelectorAll(".nav-link").forEach((link) => {
    if (link.href === window.location.href) {
        link.classList.add("active-menu");
    }
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

    // Gunakan event beforeunload agar loading muncul saat pindah halaman
    window.addEventListener("beforeunload", startLoading);
    window.addEventListener("load", completeLoading);

    // Mulai loading saat klik link
    document.querySelectorAll("a").forEach((link) => {
        link.addEventListener("click", function (e) {
            if (
                link.target !== "_blank" &&
                link.href.startsWith(window.location.origin)
            ) {
                startLoading();
            }
        });
    });
});

// image profile change
document
    .getElementById("profile_img")
    .addEventListener("change", function (event) {
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById("profile-img-preview").src =
                    e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
