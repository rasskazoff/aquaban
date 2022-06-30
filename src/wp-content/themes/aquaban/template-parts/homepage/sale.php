<div id="sale">
    <div class="container">
        <?php if (get_field('zagolovok_akczii')) : ?>
            <h2 class="h2"><?= get_field('zagolovok_akczii') ?></h2>
        <?php endif; ?>
        <div class="slider">
        <div class="slider__wrapper">
            <div class="slider__items">

                <?php while (have_rows("slider")) : the_row(); ?>
                    <div class="slider__item">
                        <?php if (get_sub_field('slide')) : ?>
                                <img loading="lazy" src="<?= get_sub_field("slide") ?>" alt="">                        
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
        <a href="#" class="slider__control" data-slide="prev"></a>
        <a href="#" class="slider__control" data-slide="next"></a>
        <ol class="slider__indicators">
            <?php while (have_rows("slider")) : the_row(); ?>
                    <li data-slide-to="<?= get_row_index()-1; ?>"></li>                  
            <?php endwhile; ?>
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