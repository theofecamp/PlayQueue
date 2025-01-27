const images = document.querySelectorAll('.destaque-column .jogo, .lançamentos-column .jogo, .bem-avaliados-column .jogo, .acao-aventura-column .jogo');
const listWindow = document.querySelector('.listWindowOpen');
const darkOverlay = document.getElementById('dark-overlay');

images.forEach(image => {
    image.addEventListener('click', () => {
        listWindow.classList.add('visible');
        darkOverlay.style.opacity = '1';
        darkOverlay.style.visibility = 'visible';
    });
});

const closeButton = document.getElementById('exit-list');
closeButton.addEventListener('click', () => {
    listWindow.classList.remove('visible');
    darkOverlay.style.opacity = '0';
    darkOverlay.style.visibility = 'hidden';
});

