document.addEventListener("DOMContentLoaded", function () {
    function createFloatingPumpkin() {
        const pumpkin = document.createElement("div");
        pumpkin.classList.add("floating-pumpkin");

        const x = Math.random() * window.innerWidth;
        const y = Math.random() * window.innerHeight;

        pumpkin.style.left = `${x}px`;
        pumpkin.style.top = `${y}px`;

        document.body.appendChild(pumpkin);

        pumpkin.addEventListener("animationend", function () {
            document.body.removeChild(pumpkin);
        });
    }

    function launchFloatingPumpkins() {
        for (let i = 0; i < 5; i++) { // Adjust the number of pumpkins as needed
            createFloatingPumpkin();
        }
    }

    launchFloatingPumpkins();
});