const slides = document.querySelectorAll(".slides img");
// slideIndex to keep track of the current slide
let slideIndex = 0;
// intervalID will store the ID of the interval used to cycle the slides automatically
let intervalId = null;
function initializeSlider() {
  // The function checks if there are any images and add the class displayslide to the initial slide
  if (slides.length > 0) {
    slides[slideIndex].classList.add("displaySlide");
    // every 5 second, function nextSlide is being executed
    intervalId = setInterval(nextSlide, 5000);
  }
}
// This function adjusts the slideIndex if it goes out of bounds
function showSlide(index) {
  if (index >= slides.length) {
    slideIndex = 0;
  } else if (index < 0) {
    slideIndex = slides.length - 1;
  }

  slides.forEach((slide) => {
    // remove the displaySlide class from all images to hide them
    slide.classList.remove("displaySlide");
  });
  // Add the class displaySlide to the current image to make it visible
  slides[slideIndex].classList.add("displaySlide");
}

var button1 = document.querySelector("#next");
button1.addEventListener("click", () => {
  nextSlide();
});

var button2 = document.querySelector("#prev");
button2.addEventListener("click", () => {
  prevSlide();
});

// Decreases the slideIndex to show the previous image and calls showSlide to display it
function prevSlide() {
  clearInterval(intervalId);
  slideIndex--;
  showSlide(slideIndex);
}

// Increases the slideIndex to show the previous image and calls showSlide to display it
function nextSlide() {
  slideIndex++;
  showSlide(slideIndex);
}
