let currentIndex = 0;

function moveSlide(step) {
  const images = document.querySelectorAll('.carousel-images img');
  const total = images.length;

  currentIndex = (currentIndex + step + total) % total;
  document.querySelector('.carousel-images').style.transform = `translateX(-${currentIndex * 100}%)`;
}
