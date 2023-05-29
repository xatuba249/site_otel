const burger = document.querySelector('#menukochak');
const menu = document.querySelector('#menu');

burger.addEventListener('click', () => {
    menu.classList.toggle('disp');
});
