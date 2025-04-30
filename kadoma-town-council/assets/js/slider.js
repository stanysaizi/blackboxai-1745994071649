// Simple slider script for automatic sliding of background images

document.addEventListener('DOMContentLoaded', function () {
  const slides = document.querySelector('.slides');
  let currentIndex = 0;
  const totalSlides = slides.children.length;

  function showNextSlide() {
    currentIndex = (currentIndex + 1) % totalSlides;
    slides.style.transform = 'translateX(' + (-currentIndex * 100) + '%)';
  }

  setInterval(showNextSlide, 4000); // Change slide every 4 seconds
});
