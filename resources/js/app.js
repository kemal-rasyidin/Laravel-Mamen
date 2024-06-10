// import './bootstrap';

// Navbar Fixed
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
    fungsiscroll();
};

// Hamburger
const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});

document.addEventListener("click", function (event) {
    const targetElement = event.target;

    if (
        !navMenu.contains(targetElement) &&
        !hamburger.contains(targetElement)
    ) {
        navMenu.classList.add("hidden");
        hamburger.classList.remove("hamburger-active");
    }
});

// User Photo
const userPhoto = document.querySelector("#user-photo");
const navUser = document.querySelector("#nav-user");

userPhoto.addEventListener("click", function () {
    navUser.classList.toggle("hidden");
});

document.addEventListener("click", function (event) {
    const targetElement = event.target;

    if (
        !navUser.contains(targetElement) &&
        !userPhoto.contains(targetElement)
    ) {
        navUser.classList.add("hidden");
    }
});
