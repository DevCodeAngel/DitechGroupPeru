let currentIndex = 0;

const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

prevButton.addEventListener('click', showPrevSlide);
nextButton.addEventListener('click', showNextSlide);

function showPrevSlide() {
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
    updateSlidePosition();
}

function showNextSlide() {
    currentIndex = (currentIndex < totalSlides - 1) ? currentIndex + 1 : 0;
    updateSlidePosition();
}

function updateSlidePosition() {
    const sliderWrapper = document.querySelector('.slider-wrapper');
    sliderWrapper.style.transform = `translateX(-${currentIndex * 100}%)`;
}


/*inico de codigo js para carrusel de content-shop-more*/
let currentSet = 0;

function showSet(index) {
    const carouselContainer = document.querySelector('.carousel-container');
    const totalSets = document.querySelectorAll('.carousel-set').length;

    if (index >= totalSets) {
        currentSet = 0;
    } else if (index < 0) {
        currentSet = totalSets - 1;
    } else {
        currentSet = index;
    }

    const offset = -currentSet * 100;
    carouselContainer.style.transform = `translateX(${offset}%)`;
}

function nextSet() {
    showSet(currentSet + 1);
}

function prevSet() {
    showSet(currentSet - 1);
}

document.addEventListener('DOMContentLoaded', () => {
    showSet(0);
});
