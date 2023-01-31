<section class="orphan-images-section">
    <div class="admissions-process-section">
        <div class="admission-process-outerwrap">
            <div class="admission-process-innerwrap">
            <?php
            if( have_rows('orphan_images_wrap') ):
                while( have_rows('orphan_images_wrap') ) : the_row();
                ?>
                <div class="admission-process-img">
                <?php 
                $image = get_sub_field('orphan_images_image');
                ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                
                </div>
                <?php 
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>