



// Display Main Menu Button Scripts

// Select DOM elements
const mainMenu = document.querySelector('.main-menu__container');
const menuBtn = document.querySelector('.header-menu__btn');

// Add event listener to menuBtn

menuBtn.addEventListener('click', toggleMenu);

// Initial Menu State
let menuDisplay = false;

function toggleMenu() {
    if (!menuDisplay) {
        menuBtn.classList.add('close');
        mainMenu.classList.add('show');
        menuDisplay = true;
    } else {
        menuBtn.classList.remove('close');
        mainMenu.classList.remove('show');
        menuDisplay = false;
    }
}