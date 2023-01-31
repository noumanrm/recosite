<section class="reco-institute-section" id="about-us">
    <div class="reco-institute-innerwrap">
    
        <div class="reco-institute-imagewrap">
        <?php
    if( have_rows('our_staff_image') ):
    while( have_rows('our_staff_image') ) : the_row();?>
            <div class="reco-institute-img">
            <?php 
                $image = get_sub_field('our_staff_images');
                ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                
            </div>
            <?php
            endwhile;
            endif;
        ?>
        </div>
       
        <div class="reco-institute-contentwrap">
            <?php the_sub_field('our_staff_content1'); ?>
            <?php the_sub_field('our_staff_content2'); ?>
        </div>
        <div class="reco-intensive">
            <h2><?php the_sub_field('reco_intensive_heading'); ?></h2>


            <ul>
                <?php  // Check rows existexists.
                if( have_rows('reco_intensive_repeater') ):
                    // Loop through rows.
                    while( have_rows('reco_intensive_repeater') ) : the_row();
                    $sub_value = get_sub_field('reco_intensive_content');
                    ?>
                <li><?php echo $sub_value; ?></li>

                <?php endwhile;
                    
                endif;
            ?>
            </ul>


        </div>
        
        <?php 
        $btn = get_sub_field('our_staff_btn_url');
        if($btn){
        ?>
        <div class="our-staff-btn">
            <a href="<?php echo $btn; ?>"
                class="btn-blue"><?php the_sub_field('our_staff_btn'); ?></a>
        </div>
        <?php } ?>
    </div>
</section>