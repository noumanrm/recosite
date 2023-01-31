<section class="contact-admissions-specialist-section">
    <div class="contact-admissions-specialist-outerwrap">
        <h2><?php the_sub_field('contact_admissions_specialist_heading'); ?></h2>
        <?php the_sub_field('contact_admissions_specialist_content'); ?>
        <div class="admission-speciallist-content-outerwrap">
            <?php
            if( have_rows('contact_admissions_specialist_lists') ):
            while( have_rows('contact_admissions_specialist_lists') ) : the_row();
            ?>
            <div class="admission-speciallist-content-innerwrap">
                <div class="admission-speciallist-top-content">
                    <div class="admission-speciallist-content-img">
                        <?php 
                    $image = get_sub_field('contact_admissions_specialist_image');
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('contact_admissions_specialist_heading'); ?></h3>
                </div>
                <div class="admission-speciallist-bottom-content">
                    <?php if( get_sub_field('contact_admissions_specialist_info') ): ?>
                    <a href="<?php the_sub_field('contact_admissions_specialist_info_link'); ?>"><?php the_sub_field('contact_admissions_specialist_info'); ?>
                    </a>
                    <?php endif; ?>
                    <?php if( get_sub_field('contact_admissions_specialist_info2') ): ?>
                    <p><?php the_sub_field('contact_admissions_specialist_info2'); ?></p>
                    <?php endif; ?>
                    <div class="admission-speciallist-bottom-btn">
                        <a href="<?php the_sub_field('contact_admissions_specialist_btn_url'); ?>"
                            class="pink-btn"><?php the_sub_field('contact_admissions_specialist_btn'); ?></a>
                    </div>
                </div>
            </div>
            <?php 
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>