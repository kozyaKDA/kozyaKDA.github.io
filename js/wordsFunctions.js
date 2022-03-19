const formObject = document.querySelector('#formObject');

const objectInput = document.querySelector('#objectInput');

const mainGreetings = document.querySelector('.main__greetings');

formObject.addEventListener('submit', formListener);

function formListener(e){
    e.preventDefault();

    const inputText = objectInput.value;

    if(objectInput.value != ""){
        objectInput.classList.remove('right-border');
        const object = `<div class="main__object">
                        <div class="object__inner">
                            <h2 class="object__title">${inputText}</h2>
                            <form id="formItem">
                                <input class="object__input inpt" id="word" type="text" placeholder="слово">
                                <input class="object__input inpt" id="translate" type="text" placeholder="перевод">
                                <button class="object__btn btn">Добавить</button>
                            </form>
                            <div class="object__container">

                            </div>
                        </div>
                    </div>`;

        mainGreetings.insertAdjacentHTML('afterend', object);

        formItem = document.querySelector('#formItem');

        objectInput.value = '';
    } else{
        objectInput.classList.add('right-border');
    }
    

    if (document.querySelector('#formItem')){
        const wordInput = document.querySelector('#word');
        const translateInput = document.querySelector('#translate');
        const container = document.querySelector('.object__container');
        const formItem = document.querySelector('#formItem');

        formItem.addEventListener('submit', formHandler);

        function formHandler(e){
            e.preventDefault();
        
            const firstText = wordInput.value;
            const secondText = translateInput.value;
        
            const item = `<div class="object__item">
                            <div class="item__back">${secondText}</div>
                            <div class="item__face">${firstText}</div>
                          </div>`;
            
            container.insertAdjacentHTML('afterBegin', item);
        
            wordInput.value = '';
            translateInput.value = '';
        
            wordInput.focus();
        }
    }
    
}