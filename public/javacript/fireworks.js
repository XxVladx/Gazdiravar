document.addEventListener("DOMContentLoaded", function () {
    function createFirework() {
        const firework = document.createElement("div");
        firework.classList.add("firework");

        const x = Math.random() * window.innerWidth;
        const y = Math.random() * window.innerHeight;

        firework.style.left = `${x}px`;
        firework.style.top = `${y}px`;

        document.body.appendChild(firework);

        firework.addEventListener("animationend", function () {
            document.body.removeChild(firework);
        });
    }

    function launchFireworks() {
        for (let i = 0; i < 30; i++) {
            createFirework();
        }
    }

    launchFireworks();
});