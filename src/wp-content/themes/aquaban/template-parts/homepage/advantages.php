<div id="advantages">
    <div class="glow"></div>
    <div class="glow"></div>
    <div class="container">
        <?php if (get_field('zagolovok_advantages')) : ?>
            <h2 class="h2"><?= get_field('zagolovok_advantages') ?></h2>
        <?php endif; ?>
        <?php while (have_rows('preimushhestva')) : the_row(); ?>
        <div class="row">
            <div class="col items">

                <?php while (have_rows('preimushhestvo-1')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">01</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('preimushhestvo-2')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">02</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('preimushhestvo-3')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">03</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

            </div>
            <div class="col image">
                <img loading="lazy" src="<?php echo get_bloginfo('template_url');?>/assets/images/car2.png" alt="">
            </div>
            <div class="col items">

                <?php while (have_rows('preimushhestvo-4')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">04</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('preimushhestvo-5')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">05</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

                <?php while (have_rows('preimushhestvo-6')) : the_row(); ?>
                <?php if (get_sub_field('tekst')) : ?>
                <div class="item">
                    <div class="num">06</div>
                    <div class="text">
                        <?= get_sub_field('tekst') ?>
                    </div>
                    <div class="content">
                        <?= get_sub_field('podrobnee') ?>
                    </div>
                </div>
                <?php endif; ?>
                <?php endwhile; ?>

            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>