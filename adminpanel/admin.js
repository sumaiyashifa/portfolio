
document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('#menu .menuitem a');
    const sections = document.querySelectorAll('.sections');

    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function (event) {
            event.preventDefault();
            const sectionId = this.getAttribute('data-section');

            
            sections.forEach(function (section) {
                section.classList.remove('active');
            });

            
            document.querySelector('.' + sectionId).classList.add('active');
        });
    });
});
