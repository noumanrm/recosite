<?php if ( get_field( 'page_has_hero', get_the_ID() ) && get_field( 'page_has_hero', get_the_ID() ) == true ): ?>
    <?php $hero_type = get_field('hero_type');
    if($hero_type == 'static'): ?>
        <section class="hero" id="hero">
            <?php ogk_get_background_image_css(get_field('hero_image'), 'hero'); ?>
            <div class="container-large">

                <?php if ( get_field( 'hero_headline' ) ): ?>
                    <h1><?php the_field( 'hero_headline' ); ?></h1>
                <?php endif; ?>

                <p>
                    <?php if ( get_field( 'hero_subheadline' ) ): ?>
                        <?php the_field( 'hero_subheadline' ); ?>
                    <?php endif; ?>
                </p>

                <?php if (have_rows('hero_button')): ?>
                    <?php while (have_rows('hero_button')): the_row(); ?>
                        <div class="btn-wrap">
                            <a href="<?= get_sub_field('hero_btn_link'); ?>" class="btn btn-black"><?= get_sub_field('hero_btn_text'); ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php elseif($hero_type == 'video'): ?>
        <section class="hero-video">
            <div class="video-wrap">
                <video autoplay playsinline muted loop class="hero-video-bkg">
                    <source src="<?= get_field('video_background_url') ?>">
                </video>
            </div>
            <div class="container-large">

                <?php if ( get_field( 'hero_headline' ) ): ?>
                    <h1><?php the_field( 'hero_headline' ); ?></h1>
                <?php endif; ?>

                <h3>
                    <?php if ( get_field( 'hero_subheadline' ) ): ?>
                        <?php the_field( 'hero_subheadline' ); ?>
                    <?php endif; ?>
                </h3>

                <?php if (have_rows('hero_button')): ?>
                    <?php while (have_rows('hero_button')): the_row(); ?>
                        <div class="btn-wrap">
                            <a href="<?= get_sub_field('hero_btn_link'); ?>" class="btn btn-black"><?= get_sub_field('hero_btn_text'); ?></a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>