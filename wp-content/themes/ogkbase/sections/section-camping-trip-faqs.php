<section class="camping-trip-faqs-section">
    <div class="camping-trip-faqs-video">
        <video autoplay playsinline muted loop class="hero-video-bkg">
            <source src="<?php the_sub_field('camping_trip_faqs_video'); ?>">
        </video>
    </div>
    <div class="cloud-images">
        <?php
        if( have_rows('repeater_field_name') ):
        while( have_rows('repeater_field_name') ) : the_row();
        ?>
        <?php
        $image = get_field('image');
        ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php 
            endwhile;
            endif;
        ?>
    </div>
    <div class="admission-faqs-section">
        <h2><?php the_sub_field('camping_trip_faqs_heading');?></h2>
        <?php the_sub_field('camping_trip_faqs_content');?>
        <div class="admissions-faqs-outerwrap">

        <?php
        if( have_rows('camping_trip_faqs') ):
        while( have_rows('camping_trip_faqs') ) : the_row();
        ?>
        <div class="accordion">
            <div class="accordion-item">
                <div class="accordion-item-header">
                    <?php the_sub_field('camping_trip_faqs_header'); ?>
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        <?php the_sub_field('camping_trip_faqs_body'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        endwhile;
        endif;
        ?>
            <div class="camping-trip-btn">
                <a href="<?php the_sub_field('camping_trip_faqs_btn_url');?>" class="btn-blue"><?php the_sub_field('camping_trip_faqs_btn');?></a>
            </div>
        </div>
    </div>
</section>