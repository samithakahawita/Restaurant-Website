let slideIndex = 0;
const slides = document.querySelectorAll('.slideshow img');
const text = document.querySelector('.slideshow .text');

function showSlides() {
  slides.forEach((slide, index) => {
    slide.classList.remove('active');
  });

  slideIndex = (slideIndex + 1) % slides.length;
  slides[slideIndex].classList.add('active');
}

setInterval(showSlides, 3500);  // Changes every 3.5 seconds
