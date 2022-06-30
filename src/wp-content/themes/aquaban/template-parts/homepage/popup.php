<div id="popup">
    <div class="popup_container">
        <div class="close"></div>

        <!-- video  -->
        <div class="popup_content about_video">
            <?php if (get_field('zagolovok_video')) : ?>
                <h2><?= get_field('zagolovok_video') ?></h2>
            <?php endif; ?>
            <div class="video_wrap row">
                <?php while (have_rows('video_items')) : the_row(); ?>
                <?php if (get_sub_field('video_item')) : ?>
                <div class="col">
                    <div class="video">
                        <?= get_sub_field('video_item') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
        <!-- video  -->

        <!-- пакет 1  -->
        <?php while (have_rows('pakety')) : the_row(); ?>
        <div class="popup_content tariff1">
        <?php while (have_rows('paket_1')) : the_row(); ?>
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket1">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
        <?php endwhile; ?>
        </div>
        <!-- пакет 1  -->

        <!-- пакет 3  -->
        <div class="popup_content tariff2">
        <?php while (have_rows('paket_2')) : the_row(); ?>
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket2">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
        <?php endwhile; ?>
        </div>
        <!-- пакет 3  -->

        <!-- пакет 3  -->
        <div class="popup_content tariff3">
        <?php while (have_rows('paket_3')) : the_row(); ?>
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket3">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
        <?php endwhile; ?>
        </div>
        <?php endwhile; ?>
        <!-- пакет 3  -->

        <!-- Доп услуги  -->
        <div class="popup_content price">
            <h3 class="dop">Доп услуги</h3>
            <div class="row">
                <li>Удаление битума</li>
                <li>Кондиционер кожи</li>
                <li>Чернение колес</li>
            </div>
            <div class="row">
                <li>Удаление трудновыводимых пятен</li>
                <li>Кондиционер кожи</li>
            </div>
        </div>
        <!-- Доп услуги  -->

    </div>
</div>