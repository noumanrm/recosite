<section class="test-section">
    <div class="container">
        <h1><?= get_field('title') ?></h1>
        <div class="test-bg" style="background: url(<?= get_field('test_bg_image'); ?>) no-repeat center / cover;"></div>
        <div class="test-image-1">
            <img src="<?= get_field('image_url'); ?>">
        </div>
        <div class="test-image-2">
            <?= wp_get_attachment_image(get_field('image_id'), 'full'); ?>
        </div>

        <?php if( have_rows('repeater_test') ) : ?>
            <div class="test-repeater">
                <?php while( have_rows('repeater_test') ): the_row(); ?>
                    <?php $gallery = get_sub_field('gallery');
                          $class_name = sanitize_title(get_sub_field('class_name'));  ?>
                    <div class="test-item <?= $class_name ?>">
                        <h2><?= get_sub_field('repeater_title') ?></h2>
                        <?= wp_get_attachment_image(get_sub_field('image'), 'full') ?>
                        <?php if( $gallery ): ?>
                            <div class="image-wrapper">
                                <?php foreach( $gallery as $image ): ?>
                                    <div class="single-image">
                                        <img src="<?= esc_url($image['url']); ?>">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>


        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 3,
            'order_by'       => 'publish_date',
            'order'          => 'DESC'
        );


        $posts = new WP_Query( $args );

        if( $posts->have_posts() ): ?>
            <div class="posts">
                <?php while( $posts->have_posts() ): $posts->the_post(); ?>
                    <a href="<?= get_the_permalink() ?>" class="post">
                        <h3><?= get_the_title() ?></h3>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>



    </div>
</section>