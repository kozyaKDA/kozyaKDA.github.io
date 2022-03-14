const form = document.querySelector('.main__form');
const userEmail = document.getElementById('email');
const userName = document.getElementById('name');
const userMessage = document.getElementById('text');
const modal = document.getElementById('modal');
const modalContent = document.querySelector('.modal__content');
const closeModal = document.getElementById('close');

form.addEventListener('submit', formHandler);

function formHandler(e){
    e.preventDefault();
    
    if((userEmail.value == '')&&(userMessage.value == '')){
        userEmail.classList.add('right-border');
        userMessage.classList.add('right-border');
        modalContent.innerHTML = "Пожалуйста, заполните обязательные поля, которые отмеченны *";
        modal.classList.remove('none');
    }
    else if (userEmail.value == ''){
        userEmail.classList.add('right-border');
        modalContent.innerHTML = "Пожалуйста, заполните пропущенное обязательное поле *";
        modal.classList.remove('none');
    }
    else if (userMessage.value == ''){
        userMessage.classList.add('right-border');
        modalContent.innerHTML = "Пожалуйста, заполните пропущенное обязательное поле *";
        modal.classList.remove('none');
    }
    else {
        if (userEmail.classList.contains('right-border')) userEmail.classList.remove('right-border');
        if (userMessage.classList.contains('right-border')) userMessage.classList.remove('right-border');

        console.log("user Email: " + userEmail.value);    
        console.log("user Name: " + userName.value);    
        console.log("user Text: " + userMessage.value);

        modalContent.innerHTML = "Спасибо. Данные отправлены";
        modal.classList.remove('none');
    }
}

window.onclick = function(e){
    if (e.target == modal) modal.classList.add('none'); 
}
closeModal.onclick = function(e){
    modal.classList.add('none');
}   