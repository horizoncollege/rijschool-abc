function toggleMenu() {
    const menuItems = document.querySelector('.menu-items');
    menuItems.classList.toggle('show');
    const buttons = document.querySelector('.menu-buttons');
    buttons.style.display = buttons.style.display === 'none' ? 'flex' : 'none';
}