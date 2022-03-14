const menu = document.querySelector('.menu');
const navigation = document.querySelector('.navigation');

menu.onclick = function(){
    navigation.classList.toggle('block');
    menu.classList.toggle('menu-anim');
};