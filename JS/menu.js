document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.menu-list li');
    const menuContent = document.getElementById('menuContent');

    menuItems.forEach(item => {
        item.addEventListener('mouseover', function () {
            this.style.backgroundColor = '#00ffff';
        });

        item.addEventListener('mouseout', function () {
            this.style.backgroundColor = '';
        });

        item.addEventListener('click', function () {
            menuItems.forEach(item => {
                item.classList.remove('selected');
            });
            this.classList.add('selected');
            const menuItemText = this.querySelector('a').textContent;
            menuContent.innerHTML = `<p>${menuItemText}</p>`;
        });
    });
});
