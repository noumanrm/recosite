<section class="reco-store-section">
    <h2><?php the_sub_field('reco_store_heading'); ?></h2>
    <div class="reco-store-outerwrap">
        <?php

if( have_rows('reco_products') ):

    while( have_rows('reco_products') ) : the_row();?>
        <div class="reco-store-innerwrap">
            <a href="<?php the_sub_field('reco_products_url'); ?>">
                <div class="reco-store-img">
                    <?php 
                    $image = get_sub_field('products_image');
                    ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <div class="reco-store-content">
                    <h3><?php the_sub_field('products_name'); ?></h3>
                    <span><?php the_sub_field('products_price'); ?></span>
                </div>
            </a>
        </div>
        <?php
        endwhile;
        endif;
        ?>
    </div>
    <div class="reco-store-btn">
        <a class="btn-blue"
            href="<?php the_sub_field('reco_store_url'); ?>"><?php the_sub_field('reco_store_btn');  ?></a>
    </div>
</section>