document.addEventListener('DOMContentLoaded', function () {
    const table = document.querySelector('table');
    const checkboxes = table.querySelectorAll('input[type="checkbox"]');

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const isChecked = this.checked;
            const row = this.closest('tr');

            if (isChecked) {
                row.style.backgroundColor = '#FFFF00';
            } else {
                 row.style.backgroundColor = row.rowIndex % 2 === 0 ? '#00FFFF' : 'initial';
            }

            if (row.rowIndex === 1) {
                checkboxes.forEach(cb => cb.checked = isChecked);
            }
        });
    });

    table.addEventListener('click', function (event) {
        const target = event.target;

        if (target.tagName === 'TD' && target.parentNode.rowIndex !== 0) {
            const checkbox = target.parentNode.querySelector('input[type="checkbox"]');
            checkbox.checked = !checkbox.checked;
            checkbox.dispatchEvent(new Event('change'));
        }
    });
});
