// add event listener to burger menu

const burger = document.querySelector('.hamburger');
const burgerList = document.querySelector('.menuwrapper');
const height = document.querySelector('.menu-bottom');

console.log(height);

burger.addEventListener('click', () => {
    burgerList.classList.toggle('hidden-class');
    height.classList.toggle('change-height');
});