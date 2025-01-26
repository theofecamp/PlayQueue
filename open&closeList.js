const images = document.querySelectorAll('.destaque-column .jogo, .lançamentos-column .jogo, .bem-avaliados-column .jogo');
const listWindow = document.querySelector('.listWindowOpen');
const exitButton = document.querySelector('#exit-list');

images.forEach(image => {
    image.addEventListener('click', () => {
        listWindow.classList.add('visible');
    });
});

exitButton.addEventListener('click', () => {
    listWindow.classList.remove('visible');
});