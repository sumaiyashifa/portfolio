// script.js
document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('#menu .menuitem a');
    const sections = document.querySelectorAll('.sections');

    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function (event) {
            event.preventDefault();
            const sectionId = this.getAttribute('data-section');

            // Hide all sections
            sections.forEach(function (section) {
                section.classList.remove('active');
            });

            // Show the corresponding section
            document.querySelector('.' + sectionId).classList.add('active');
        });
    });
});
