let slideIndex = 0;
const slides = document.querySelectorAll('input[type="radio"]');
const totalSlides = slides.length;

function changeSlide() {
    slideIndex++;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }
    slides[slideIndex].checked = true;
}

// Cambia el slide cada 3 segundos
setInterval(changeSlide,3000);