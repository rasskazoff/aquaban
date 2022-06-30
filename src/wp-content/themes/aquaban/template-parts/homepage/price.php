<div id="price">
    <div class="container">
        <?php if (get_field('zagolovok_czeny')) : ?>
            <h2 class="h2"><?= get_field('zagolovok_czeny') ?></h2>
        <?php endif; ?>
        <?php while (have_rows('czeny')) : the_row(); ?>
        <div class="row">
            <?php while (have_rows('tarif_1')) : the_row(); ?>
            <div class="col">
                <div class="image">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/images/econom.svg" alt="">
                </div>
                <div class="tittle">
                    <?php if (get_sub_field('nazvanie_1')) : ?>
                        <?= get_sub_field('nazvanie_1') ?>
                    <?php endif; ?>
                    <?php if (get_sub_field('czena_1')) : ?>
                        <div class="price"><?= get_sub_field('czena_1') ?></div>
                    <?php endif; ?>
                </div>
                    <?php if (get_sub_field('opisanie_1')) : ?>
                        <div class="text"><?= get_sub_field('opisanie_1') ?></div>
                    <?php endif; ?>
            </div>
            <?php endwhile; ?>

            <?php while (have_rows('tarif_2')) : the_row(); ?>
            <div class="col">
                <div class="image">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/images/standart.svg" alt="">
                </div>
                <div class="tittle">
                    <?php if (get_sub_field('nazvanie_1')) : ?>
                        <?= get_sub_field('nazvanie_1') ?>
                    <?php endif; ?>
                    <?php if (get_sub_field('czena_1')) : ?>
                        <div class="price"><?= get_sub_field('czena_1') ?></div>
                    <?php endif; ?>
                </div>
                    <?php if (get_sub_field('opisanie_1')) : ?>
                        <div class="text"><?= get_sub_field('opisanie_1') ?></div>
                    <?php endif; ?>
            </div>
            <?php endwhile; ?>

            <?php while (have_rows('tarif_3')) : the_row(); ?>
            <div class="col">
                <div class="image">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/images/maximum.svg" alt="">
                </div>
                <div class="tittle">
                    <?php if (get_sub_field('nazvanie_1')) : ?>
                        <?= get_sub_field('nazvanie_1') ?>
                    <?php endif; ?>
                    <?php if (get_sub_field('czena_1')) : ?>
                        <div class="price"><?= get_sub_field('czena_1') ?></div>
                    <?php endif; ?>
                </div>
                    <?php if (get_sub_field('opisanie_1')) : ?>
                        <div class="text"><?= get_sub_field('opisanie_1') ?></div>
                    <?php endif; ?>
            </div>
            <?php endwhile; ?>

            <div class="col dop">
                <div class="image">
                    <img src="<?php echo get_bloginfo('template_url');?>/assets/images/dop.svg" alt="">
                </div>
                <div class="tittle">
                    ДОП. УСЛУГИ
                </div>
                <div class="btn_wrap">
                    <a href="#popup:price" class="btn">Подробнее</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>