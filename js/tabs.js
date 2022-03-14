document.querySelectorAll('.tabs__link').forEach((item)=>
    item.addEventListener('click', function(e){
        e.preventDefault();

        const idTab = e.target.getAttribute('href').replace('#','');

        document.querySelectorAll('.tabs__item').forEach((child) =>
            child.classList.add('none'));

        document.getElementById(idTab).classList.remove('none');
    })    
);

document.querySelector('.tabs__link').click();