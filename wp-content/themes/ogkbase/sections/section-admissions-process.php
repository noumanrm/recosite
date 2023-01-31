<section class="admissions-process-section">
    <div class="admission-process-outerwrap">
        <div class="admission-process-innerwrap">
            <?php
        if( have_rows('admission_process_images') ):
            while( have_rows('admission_process_images') ) : the_row();
            ?>
            <div class="admission-process-img">
                <?php 
                $image = get_sub_field('admission_process_image');
                ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
        <div class="admission-process-steps-outerwrap">
            <h3><?php the_sub_field('admission_process_heading'); ?></h3>
            <?php
            if( have_rows('admission_process') ):
                while( have_rows('admission_process') ) : the_row();
            ?>

            <div class="admission-process-steps-innerwrap">
                <div class="admission-process-top">
                    <div class="admission-process-img">
                        <?php 
                    $image = get_sub_field('logo');
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h4><?php the_sub_field('steps_heading'); ?></h4>
                </div>
                <?php the_sub_field('step_content'); ?>
            </div>
            <?php
                endwhile;
                endif;
            ?>
            <div class="admission-btn">
                <a href="<?php the_sub_field('admission_process_btn_url'); ?>" class="btn-blue"><?php the_sub_field('admission_process_btn'); ?></a>
            </div>
        </div>
    </div>
</section>