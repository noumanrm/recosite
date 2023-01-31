<section class="basic-hero-section">
    <div class="banner-video">
        <video autoplay playsinline muted loop class="hero-video-bkg">
            <source src="<?= get_sub_field('basic_hero_bg') ?>">
        </video>
    </div>
    <div class="banner-img">
        <?php 
        $image = get_sub_field('basic_hero_img');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>

    </div>
    <div class="banner-mobile-bg">
    <?php 
        $image = get_sub_field('basic_hero_mobile_bg');
        if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
    </div>
    <h1 class="tc-wht"><?= get_sub_field('basic_hero_title') ?></h1>
    <?php if(is_front_page()): ?>
        <div class="banner-scroll"><a href="#footer">scroll</a></div>
    <?php endif; ?>
</section>