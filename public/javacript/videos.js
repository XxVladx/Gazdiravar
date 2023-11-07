
// JavaScript to trigger the animation when the page loads
document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".card");
    cards.forEach((card, index) => {
        setTimeout(() => {
            card.classList.add("slide-in");
        }, 500 * index); // Delay each card's animation by 500 milliseconds
    });
});
