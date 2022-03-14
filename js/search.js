const searchInput = document.querySelector('.faq-search');
const searchIcon = document.querySelector('.search-icon');
const searchListData = document.querySelectorAll('.main__list-item');

searchIcon.onclick = function(e){
    e.preventDefault();

    data = searchInput.value;

    let index = 0;
    for (const i of searchListData) {
        i.classList.remove('green-border');
        if (i.innerHTML.includes(data)){
           i.classList.add('green-border');
        }
        else{
            console.log("nety");
        }
        index++;
    }
}