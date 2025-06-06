document.addEventListener('DOMContentLoaded', function () {
    const Code = [38, 38, 40, 40, 37, 39, 37, 39];
    let CodePosition = 0;

    document.addEventListener('keydown', function (event) {
        if (event.keyCode === Code[CodePosition]) {
            CodePosition++;
            if (CodePosition === Code.length) {
                activateEasterEgg();
                CodePosition = 0;
            }
        } else {
            CodePosition = 0;
        }
    });

    function activateEasterEgg() {
        const confetti = document.createElement('div');
        confetti.style.position = 'fixed';
        confetti.style.top = '0';
        confetti.style.left = '0';
        confetti.style.width = '100%';
        confetti.style.height = '100%';
        confetti.style.backgroundImage = 'url(/storage/img/cd.gif)';
        confetti.style.backgroundSize = 'contain';
        confetti.style.zIndex = '1000';
        document.body.appendChild(confetti);

        setTimeout(() => {
            document.body.removeChild(confetti);
        }, 5000);
    }
});
