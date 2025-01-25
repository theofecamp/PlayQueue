const colunasD = document.querySelectorAll('.destaque-column');

document.addEventListener('dragstart', (e) => {
    e.target.classlist.add('dragging');
});

document.addEventListener('dragend', (e) => {
    e.target.classlist.remove('dragging');
});

colunasD.forEach((item) => {
    item.addEventListener('dragover', (e) => {
        const dragging = document.querySelector('.dragging');
        const applyAfter = getNewPosition(item, e.clientY);

    });
});