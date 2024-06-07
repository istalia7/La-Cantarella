// hamburger menu
let navbuton = document.querySelector(".displayMenu");
// nav list
let menu = document.querySelector("#menuItems");
navbuton.addEventListener("click", () => {
  // add the displayMenuItems class to the menu (ul list)
  menu.classList.toggle("displayMenuItems");
});

