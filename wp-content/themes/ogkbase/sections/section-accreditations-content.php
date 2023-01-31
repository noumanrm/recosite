<section class="accreditations-content-section">
    <div class="accreditations-content-outerwrap">

        <?php
    if( have_rows('accreditations_content') ):
        while( have_rows('accreditations_content') ) : the_row();
    ?>
        <div class="accreditations-content-innerwrap">
            <div class="accreditations-content-img">
                <?php 
            $image = get_sub_field('accreditations_logo');
            ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <div class="accreditations-content-content">
                <h2><?php the_sub_field('accreditations_heading'); ?></h2>
                <span><?php the_sub_field('accreditations_sub_heading'); ?></span>
                <?php the_sub_field('accreditations_content'); ?>
            </div>
        </div>
        <?php
            endwhile;
            endif;
        ?>
    </div>
</section>