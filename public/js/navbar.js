let navbuton = document.querySelector(".displayMenu");
let nav = document.querySelector(".navbar");
let menu = document.querySelector("#menuItems");
navbuton.addEventListener("click", () => {
  nav.classList.toggle("navbar");
  menu.classList.toggle("displayMenuItems");
});


