const mobileMenuBtn = document.getElementById('mobileMenuBtn');
const mobileMenuCloseBtn = document.getElementById('mobileMenuCloseBtn');
const navbar = document.getElementById('navbar');
mobileMenuBtn.onclick = () => {

    navbar.classList.replace('sm:hidden', 'block');

    mobileMenuCloseBtn.classList.replace('hidden', 'block');

    mobileMenuBtn.classList.replace('sm:block', 'sm:hidden');
}

function closeMenu () {
    navbar.classList.replace('block', 'sm:hidden')

    mobileMenuCloseBtn.classList.replace('block', 'hidden');

    mobileMenuBtn.classList.replace('sm:hidden', 'sm:block');
}

mobileMenuCloseBtn.onclick = () => {
    closeMenu();
}

const popupDialogMainLayout = document.getElementById('popupDialogMainLayout');
popupDialogMainLayout.style.height = window.innerHeight + "px";
window.onclick = (event) => {
    if (event.target == popupDialogMainLayout) {
        popupDialogMainLayout.classList.replace('flex', 'hidden');
    }
}

const dialogCloseBtn = document.getElementById('dialogCloseBtn');
dialogCloseBtn.onclick = () => {
    popupDialogMainLayout.classList.replace('flex', 'hidden');
}

const aboutLayout = document.getElementById('aboutLayout');
const contactFormLayout = document.getElementById('contactFormLayout');

const aboutMenuBtn = document.getElementById('aboutMenuBtn');
const readMoreBtn = document.getElementById('readMoreBtn');

const aboutDialog = () => {
    closeMenu();
    aboutLayout.style.display = "flex";
    contactFormLayout.style.display = "none";
    popupDialogMainLayout.classList.replace('hidden', 'flex');
}
aboutMenuBtn.onclick = aboutDialog;
readMoreBtn.onclick = aboutDialog;

const contactBtn = document.getElementById('contactBtn');
contactBtn.onclick = () => {
    closeMenu();
    aboutLayout.style.display = "none";
    contactFormLayout.style.display = "block";
    popupDialogMainLayout.classList.replace('hidden', 'flex');
}