<div id="tariffs">
    <div class="container">
        <?php if (get_field('zagolovok_pakety')) : ?>
            <h2 class="h2"><?= get_field('zagolovok_pakety') ?></h2>
        <?php endif; ?>
        <?php while (have_rows('pakety')) : the_row(); ?>
        <div class="row">
            
            <?php while (have_rows('paket_1')) : the_row(); ?>
            <div class="col">
                <div class="content">
                    <img loading="lazy" src="<?php echo get_bloginfo('template_url');?>/assets/images/tariff-1.svg" alt="">
                    <?php if (get_sub_field('nazvanie')) : ?>
                        <div class="name"><?= get_sub_field('nazvanie') ?></div>
                    <?php endif; ?>
                    <div class="btn_wrap">
                        <a href="#popup:tariff1" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            
            <?php while (have_rows('paket_2')) : the_row(); ?>
            <div class="col">
                <div class="content">
                    <img loading="lazy" src="<?php echo get_bloginfo('template_url');?>/assets/images/tariff-2.svg" alt="">
                    <?php if (get_sub_field('nazvanie')) : ?>
                        <div class="name"><?= get_sub_field('nazvanie') ?></div>
                    <?php endif; ?>
                    <div class="btn_wrap">
                        <a href="#popup:tariff2" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            
            <?php while (have_rows('paket_3')) : the_row(); ?>
            <div class="col">
                <div class="content">
                    <img loading="lazy" src="<?php echo get_bloginfo('template_url');?>/assets/images/tariff-3.svg" alt="">
                    <?php if (get_sub_field('nazvanie')) : ?>
                        <div class="name"><?= get_sub_field('nazvanie') ?></div>
                    <?php endif; ?>
                    <div class="btn_wrap">
                        <a href="#popup:tariff3" class="btn">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
        <?php endwhile; ?>
    </div>
</div>