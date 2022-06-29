//Открытие popup
document.addEventListener('DOMContentLoaded', function(){
    //console.log('popup_load')
    const popup_link = document.querySelectorAll('a[href*="#popup:"]')

    let popup_open = function(){
        //console.log('popup_open')
        let popup_content = this.href.split('#popup:').reverse()[0]
        document.querySelector('#popup .'+popup_content).classList.add('show')
        document.querySelector('body').classList.add('show_popup')
    }

    for(i=0; i<popup_link.length; i++){
    popup_link[i].addEventListener("click", popup_open);
    }

    //Закрытие popup
    const close = document.querySelector('.close')

    let popup_close = function(){
        //console.log('popup_close')
        document.querySelector('body').classList.remove('show_popup')
        close.closest('#popup').querySelector('.popup_content.show').classList.remove('show')
    }

    close.addEventListener("click", popup_close)

        //по клику вне элемента
        const popup = document.querySelector('#popup')
        const popup_container = popup.querySelector( '.popup_container');
    
        popup.addEventListener( 'click', (e) => {
            
            const popup_bg = e.composedPath().includes(popup_container);
        
            if ( ! popup_bg ) {
                popup_close()
            }
        })
})