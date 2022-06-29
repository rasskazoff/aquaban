<div id="reviews">
    <div class="container">
        <h2 class="h2">Отзывы клиентов</h2>
        <div class="descript">Все отзывы НАСТОЯЩИЕ. Мы не вставляем чужие записи. Любой желающий может оставить отзыв в форме ниже.</div>
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                        <!-- Контент 1 слайда -->
                        <div class="reviews_wrap">
                            <div class="reviews_user row">
                                <div class="img" style="background: center / cover no-repeat url(<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png);"></div>
                                <div class="col">
                                    <div class="name">Артем Панч</div>
                                    <div class="date">24 ноября 2021</div>
                                </div>
                            </div>
                            <div class="reviews_text">
                                Помыли действительно быстро и довольно недорого, никаких разводов и неотмытых участков не оставили. спасибо!
                            </div>
                        </div>
                    </div>

                    <div class="slider__item">
                        <!-- Контент 1 слайда -->
                        <div class="reviews_wrap">
                            <div class="reviews_user">
                                <div class="img" style="background: center / cover no-repeat url(<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png);"></div>
                                <div class="name">Артем Панч</div>
                                <div class="date">24 ноября 2021</div>
                            </div>
                            <div class="reviews_text">
                                Помыли действительно быстро и довольно недорого, никаких разводов и неотмытых участков не оставили. спасибо!
                            </div>
                        </div>
                    </div>
                    
                    <div class="slider__item">
                        <!-- Контент 1 слайда -->
                        <div class="reviews_wrap">
                            <div class="reviews_user">
                                <div class="img" style="background: center / cover no-repeat url(<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png);"></div>
                                <div class="name">Артем Панч</div>
                                <div class="date">24 ноября 2021</div>
                            </div>
                            <div class="reviews_text">
                                Помыли действительно быстро и довольно недорого, никаких разводов и неотмытых участков не оставили. спасибо!
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <a href="#" class="slider__control" data-slide="prev"></a>
            <a href="#" class="slider__control" data-slide="next"></a>
            <ol class="slider__indicators">
                <li data-slide-to="0"></li>
                <li data-slide-to="1"></li>
                <li data-slide-to="2"></li>
            </ol>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
        const slider = new ChiefSlider('#reviews .slider', {
            loop: true,
            autoplay: false,
            swipe: true,
        });
        });
        </script>
  
    </div>
</div>