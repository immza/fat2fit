const journeyCards = document.querySelectorAll('.journey-card');

let currentIndex = 0;
journeyCards[currentIndex].style.display = 'block';

function showNextCard() {
    journeyCards[currentIndex].style.display = 'none';
    currentIndex = (currentIndex + 1) % journeyCards.length;
    journeyCards[currentIndex].style.display = 'block';
}

document.addEventListener('click', showNextCard);
