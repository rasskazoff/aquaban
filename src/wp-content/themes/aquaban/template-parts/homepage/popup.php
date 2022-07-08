<div id="popup">
    <div class="popup_container">
        <div class="close"></div>

        <!-- video  -->
        <div class="popup_content about_video">
            <div class="popup_content-header">
            <?php if (get_field('zagolovok_video')) : ?>
                <h3><?= get_field('zagolovok_video') ?></h3>
            <?php endif; ?>
            </div>
            <div class="popup_content-wrap">
                <div class="line"></div>
                <div class="video_wrap row">
                    <?php while (have_rows('video_items')) : the_row(); ?>
                    <?php if (get_sub_field('video_item')) : ?>
                    <div class="col">
                        <div class="video" loading="lazy">
                            <?= get_sub_field('video_item') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
        <!-- video  -->

        <!-- пакет 1  -->
        <?php while (have_rows('pakety')) : the_row(); ?>
        <div class="popup_content tariff1">
        <?php while (have_rows('paket_1')) : the_row(); ?>
            <div class="popup_content-header">
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket1">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            </div>
            <div class="popup_content-wrap">
                <div class="line"></div>
                <div class="sub_tittle">При предоплате 10 моек по программе «ЭКОНОМ»</div>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
        <!-- пакет 1  -->

        <!-- пакет 2  -->
        <div class="popup_content tariff2">
        <?php while (have_rows('paket_2')) : the_row(); ?>
            <div class="popup_content-header">
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket2">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            </div>
            <div class="popup_content-wrap">
                <div class="line"></div>
                <div class="sub_tittle">При предоплате 10 моек по программе «ЭКОНОМ»</div>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
        <!-- пакет 2  -->

        <!-- пакет 3  -->
        <div class="popup_content tariff3">
        <?php while (have_rows('paket_3')) : the_row(); ?>
            <div class="popup_content-header">
            <?php if (get_sub_field('nazvanie')) : ?>
                <h3 class="paket3">Пакет - <?= get_sub_field('nazvanie') ?></h3>
            <?php endif; ?>
            </div>
            <div class="popup_content-wrap">
                <div class="line"></div>
                <div class="sub_tittle">При предоплате 10 моек по программе «ЭКОНОМ»</div>
            <?php if (get_sub_field('podrobnee')) : ?>
            <div class="descript"><?= get_sub_field('podrobnee') ?></div>
            <?php endif; ?>
            </div>
        <?php endwhile; ?>
        </div>
        <?php endwhile; ?>
        <!-- пакет 3  -->

        <!-- Доп услуги  -->
        <div class="popup_content price">
            <div class="popup_content-header">
                <h3 class="dop">Дополнительные "услуги “Аквабан”</h3>
            </div>
            <div class="popup_content-wrap">
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
        </div>
        <!-- Доп услуги  -->

    </div>
</div>