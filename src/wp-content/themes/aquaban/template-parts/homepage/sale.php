<div id="sale">
    <div class="container">
        <h2 class="h2">Акции</h2>
        <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">
            <div class="slider__item">
                <!-- Контент 1 слайда -->
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png" alt="">
            </div>
            <div class="slider__item">
                <!-- Контент 2 слайда -->
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png" alt="">
            </div>
            <div class="slider__item">
                <!-- Контент 3 слайда -->
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png" alt="">
            </div>
            <div class="slider__item">
                <!-- Контент 4 слайда -->
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png" alt="">
            </div>
            <div class="slider__item">
                <!-- Контент 5 слайда -->
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/gallery.png" alt="">
            </div>
            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
        <ol class="slider__indicators">
            <li data-slide-to="0"></li>
            <li data-slide-to="1"></li>
            <li data-slide-to="2"></li>
            <li data-slide-to="3"></li>
            <li data-slide-to="4"></li>
        </ol>
        </div>
        <script>
        document.addEventListener('DOMContentLoaded', function () {
        const slider = new ChiefSlider('#sale .slider', {
            loop: true,
            autoplay: false,
            swipe: true,
        });
        });
        </script>
    </div>
</div>