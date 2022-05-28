// Grab HTML Elements
const btn = document.querySelector(".burger");
const menu = document.querySelector(".mobile-menu");
const cross = document.querySelector(".cross");
const user = document.querySelector(".user");
const profile = document.querySelector(".profile");


// Add Event Listeners
btn.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

cross.addEventListener("click", () => {
    menu.classList.toggle("hidden");
});

user.addEventListener("click", () => {
    profile.classList.toggle("hidden");
});