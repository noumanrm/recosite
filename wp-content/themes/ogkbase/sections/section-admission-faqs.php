<section class="admission-faqs-section">
    <div class="admissions-faqs-outerwrap">

        <?php
        if( have_rows('admission_faqs_accordions') ):
        while( have_rows('admission_faqs_accordions') ) : the_row();
        ?>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <?php the_sub_field('admission_faqs_accordions_header'); ?>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <?php the_sub_field('admission_faqs_accordions_body'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php  
        endwhile;
        endif;
        ?>

        <div class="addmission-faqs-btn">
            <a href="<?php the_sub_field('admission_faqs_btn_url'); ?>"
                class="btn-blue"><?php the_sub_field('admission_faqs_btn'); ?></a>
        </div>
    </div>
</section>