<div id="about">
    <div class="container">
        <div class="row">
            <div class="col text_wrap">
                <?php if (get_field('zagolovok_video')) : ?>
                    <h2 class="h2"><?= get_field('zagolovok_video') ?></h2>
                <?php endif; ?>
                <?php if (get_field('opisanie_video')) : ?>
                    <div class="text"><?= get_field('opisanie_video') ?></div> 
                <?php endif; ?>
            </div>
            <div class="col video_wrap">
                <div class="video">
                    <div class="video_btn">
                        <a href="#popup:about_video"><img loading="lazy" src="<?php echo get_bloginfo('template_url');?>/assets/images/player_btn.svg" alt="" class="player"></a>
                    </div>
                </div>
            </div>
        </div>
            
    </div>
</div>