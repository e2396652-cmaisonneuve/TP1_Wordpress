// Seleciona os elementos do carrossel
const carouselTrack = document.querySelector(".carousel-track");
const testimonials = document.querySelectorAll(".testimonial"); // Corrigido o seletor
const prevButton = document.querySelector(".carousel-button.prev");
const nextButton = document.querySelector(".carousel-button.next");

let currentIndex = 0;

// Função para mover o carrossel
function moveCarousel() {
  const offset = -currentIndex * (testimonials[0].offsetWidth + 20); // 20 é a margem entre os depoimentos
  carouselTrack.style.transform = `translateX(${offset}px)`;
}

// Evento para o botão "Anterior"
prevButton.addEventListener("click", () => {
  if (currentIndex > 0) {
    currentIndex--;
  } else {
    currentIndex = testimonials.length - 1;
  }
  moveCarousel();
});

// Evento para o botão "Próximo"
nextButton.addEventListener("click", () => {
  if (currentIndex < testimonials.length - 1) {
    currentIndex++;
  } else {
    currentIndex = 0;
  }
  moveCarousel();
});

// Inicializa o carrossel
moveCarousel();
