document.addEventListener('DOMContentLoaded', function(){
    //фиксируем страницу
    let menu = document.querySelector('[for="menu_checkbox"]')
    let body = document.querySelector('body')

    let bodyNoScroll = function(){
        body.classList.toggle('noscroll')
    }
    menu.addEventListener("click", bodyNoScroll);

    //закрытие меню при нажатии в меню
    let menu_link = document.querySelectorAll('.menu a')
    
    var hide_menu = function(){
        if(innerWidth<=960){
            document.querySelector('#menu_checkbox').checked = false
            body.classList.toggle('noscroll')
        }
    }

    for(i=0; i<menu_link.length; i++){
        menu_link[i].addEventListener("click", hide_menu);
        }
})