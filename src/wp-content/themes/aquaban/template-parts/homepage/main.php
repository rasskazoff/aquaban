    <div class="glow"></div>
    <div class="glow"></div>
    <div class="glow"></div>
    <div class="glow"></div>
    <div id="main">
        <div  class="row container">
            <div class="col">
                <?php while (have_rows('pervyj_blok')) : the_row(); ?>
                <?php if (get_sub_field('zagolovok')) : ?>
                    <h1><?= get_sub_field('zagolovok') ?></h1>
                <?php endif; ?>
                <?php if (get_sub_field('opisanie')) : ?>
                    <div class="description"><?= get_sub_field('opisanie') ?></div>
                <?php endif; ?>
                <?php endwhile; ?>
                <div class="row">
                    <a href="#price" class="btn">Узнать стоимость</a>
                    <?php while (have_rows('kontakty')) : the_row(); ?>
                    <?php if (get_sub_field('vk')) : ?>
                        <a href="<?= get_sub_field('vk') ?>" class="btn btn_border">Аквабан ВКонтакте</a>
					<?php endif; ?>
                    <?php endwhile; ?>
                </div>
            </div>
            <div class="col">
                <img src="<?php echo get_bloginfo('template_url');?>/assets/images/main.png" alt="img">
            </div>
        </div>
    </div>
    <div class="transition">
        <a href="#"><img src="<?php echo get_bloginfo('template_url');?>/assets/images/arrow.svg" alt="arrow"></a>
    </div>
</div><!--end join-->