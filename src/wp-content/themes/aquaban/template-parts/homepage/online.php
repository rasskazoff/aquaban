<div id="online">
    <div class="glow"></div>
    <div class="glow"></div>
    <div class="container">
    <?php while (have_rows('onlajn')) : the_row(); ?>
        <?php if (get_sub_field('zagolovok')) : ?>
            <h2 class="h2"><?= get_sub_field('zagolovok') ?></h2>
        <?php endif; ?>
        <?php if (get_sub_field('opisanie')) : ?>
            <div class="description">
                <?= get_sub_field('opisanie') ?>
            </div>
        <?php endif; ?>
        <?php if (get_sub_field('podzagolovok')) : ?>
            <div class="tittle"><?= get_sub_field('podzagolovok') ?></div>
        <?php endif; ?>

        <div class="tabs">

            <input type="radio" name="tab-btn" id="tab-btn-1" value="" checked>
            <input type="radio" name="tab-btn" id="tab-btn-2" value="">
            <div class="row">
                <?php if (get_sub_field('nazvanie_vkladki_1')) : ?>
                    <label for="tab-btn-1" class="marker active"><?= get_sub_field('nazvanie_vkladki_1') ?></label> 
                <?php endif; ?>
                <?php if (get_sub_field('nazvanie_vkladki_1')) : ?>
                    <label for="tab-btn-2" class="marker"><?= get_sub_field('nazvanie_vkladki_1') ?></label>
                <?php endif; ?>
            </div>

            <div id="content-1" class="tab">
            <?php while (have_rows('video')) : the_row(); ?>
                <div class="col">
                    <?php if (get_sub_field('video_1')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_1') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_1')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_1') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if (get_sub_field('video_2')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_2') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_2')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_2') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if (get_sub_field('video_3')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_3') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_3')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_3') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>
            <div id="content-2" class="tab">
            <?php while (have_rows('video_2')) : the_row(); ?>
                <div class="col">
                    <?php if (get_sub_field('video_2_1')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_2_1') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_2_1')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_2_1') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if (get_sub_field('video_2_2')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_2_2') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_2_2')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_2_2') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                    <?php if (get_sub_field('video_2_3')) : ?>
                    <div class="content_video">
                        <?= get_sub_field('video_2_3') ?>
                    </div>
                    <?php endif; ?>
                    <?php if (get_sub_field('opisanie_k_video_2_3')) : ?>
                    <div class="content_video">
                        <div class="content_name">
                            <?= get_sub_field('opisanie_k_video_2_3') ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
            </div>

        </div>
    <?php endwhile; ?>
    </div>
</div>