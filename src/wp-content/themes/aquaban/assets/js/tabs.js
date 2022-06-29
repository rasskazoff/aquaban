document.addEventListener('DOMContentLoaded', function(){
    let tab = document.querySelectorAll('.tabs label')

    let tabsToggle = function(){
        document.querySelector('.tabs .active').classList.remove('active')
        this.classList.add('active')
    }

    for(i=0;i<tab.length;i++){
        tab[i].addEventListener("click", tabsToggle)
    }
})