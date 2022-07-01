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

    //Фикс меню
    let mainH = document.querySelector('#main').offsetHeight
    let header = document.querySelector('#masthead')

    window.addEventListener('scroll', function(e) {
    if(window.scrollY>mainH){
        header.classList.add('fixed')
    }
        else{
            header.classList.remove('fixed')
        }
    })

//Анимация при скролле
    const observer = new IntersectionObserver(entries => {
        // перебор записей
        entries.forEach(entry => {
        // если элемент появился
            if (entry.isIntersecting) {
                // добавить ему CSS-класс
                entry.target.classList.add('anim');
            }
        });
    });

    h2 = document.querySelectorAll('.h2')
    
    for(i=0; i<h2.length; i++){
        observer.observe(h2[i]);
        }

})