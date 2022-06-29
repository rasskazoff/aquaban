<div id="contacts">
    <div class="container">
        <h2 class="h2">Наши контакты</h2>
        <div class="row">
            <?php while (have_rows('kontakty')) : the_row(); ?>
            <div class="col content">
                <div class="contact">
                <?php if (get_sub_field('telefon')) : ?>
                    <div class="phone">
                        <a href="tel:"><?= get_sub_field('telefon') ?></a>
                    </div>
                <?php endif; ?>
                <?php if (get_sub_field('pochta')) : ?>
                    <div class="mail">
                        <a href="mailto:<?= get_sub_field('pochta') ?>"><?= get_sub_field('pochta') ?></a>
                    </div>
                <?php endif; ?>
                </div>
                <div class="address">
                    <h3>Адрес:</h3>
                    <?php if (get_sub_field('adres_1')) : ?>
                        <div class="address_item"><?= get_sub_field('adres_1') ?></div>
					<?php endif; ?>
                    <?php if (get_sub_field('adres_2')) : ?>
                        <div class="address_item"><?= get_sub_field('adres_2') ?></div>
					<?php endif; ?>
                </div>
                <div class="time">
                    <h3>Время работы:</h3>
                    <?php if (get_sub_field('vremya_raboty')) : ?>
                        <div class="time_item"><?= get_sub_field('vremya_raboty') ?></div>
					<?php endif; ?>
                    <?php if (get_sub_field('primechanie')) : ?>
                        <div class="time_descript"><?= get_sub_field('primechanie') ?></div>
					<?php endif; ?>
                </div>
            </div>
            
            <div class="col">
                <div class="social">
                    <?php if (get_sub_field('vk')) : ?>
                        <a class="vk" href="<?= get_sub_field('vk') ?>"></a>
					<?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>

            <div class="col">
                <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad01f83a0b2b09d9401c104d28b1ece0b7c641f176d86f9e64a1867999aa7b9bc&amp;width=auto&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
<!--footer-->