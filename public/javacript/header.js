// Get the logo element
    const logo = document.querySelector('.logo');

    // Add the 'rotate' class after a delay to trigger the animations
    setTimeout(() => {
        logo.classList.add('rotate');
        logo.style.opacity = 1; // Set opacity to 1 for the fade-in effect
    }, 700);