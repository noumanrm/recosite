<section class="patient-right-section">
    <h2><?php the_sub_field('patient_right_heading'); ?></h2>
    <?php the_sub_field('patient_right_content'); ?>
    <?php if( get_sub_field('patient_right_btn') ): ?>
        <div class="patient-right-btn">
            <a href="<?php the_sub_field('patient_right_btn_url'); ?>" class="btn-blue"><?php the_sub_field('patient_right_btn'); ?></a>
        </div>
    <?php endif; ?>
    
</section>