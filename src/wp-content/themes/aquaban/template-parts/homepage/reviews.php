<div id="reviews">
    <div class="container">
        <?php if (get_field('zagolovok_otzyvy')) : ?>
            <h2 class="h2"><?= get_field('zagolovok_otzyvy') ?></h2>
        <?php endif; ?>
        <?php if (get_field('podzagolovok_otzyvy')) : ?>
            <div class="descript"><?= get_field('podzagolovok_otzyvy') ?></div>
        <?php endif; ?>
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__items">
                    <?php while (have_rows('otzyv_items')) : the_row(); ?>
                    <div class="slider__item">
                        <div class="reviews_wrap">
                            <?php while (have_rows('avtor')) : the_row(); ?>
                            <div class="reviews_user row">
                                <?php if (get_sub_field('foto')) : ?>
                                <div loading="lazy" class="img" style="background: center / cover no-repeat url(<?= get_sub_field('foto') ?>);"></div>
                                <?php endif; ?>
                                <div class="col">
                                    <?php if (get_sub_field('imya')) : ?>
                                    <div class="name"><?= get_sub_field('imya') ?></div>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('data')) : ?>
                                    <div class="date"><?= get_sub_field('data') ?></div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php if (get_sub_field('tekst_otzyva')) : ?>
                            <div class="reviews_text"><?= get_sub_field('tekst_otzyva') ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endwhile; ?>

                </div>
            </div>
            <a href="#" class="slider__control" data-slide="prev"></a>
            <a href="#" class="slider__control" data-slide="next"></a>
            <ol class="slider__indicators">
                <?php while (have_rows("otzyv_items")) : the_row(); ?>
                        <li data-slide-to="<?= get_row_index()-1; ?>"></li>                  
                <?php endwhile; ?>
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