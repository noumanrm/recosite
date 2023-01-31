<section class="find-meeting-section">
    <?php
        if( have_rows('find_meeting') ):
            while( have_rows('find_meeting') ) : the_row();
            $heading = get_sub_field('find_meeting_heading'); 
            $content = get_sub_field('find_meeting_paragraph');
            $btn_text = get_sub_field('inner_btn_text');
            $btn_url = get_sub_field('inner_btn_url');
            $image = get_sub_field('find_meeting_image'); 
            ?>
    <div class="find-meeting-innerwrap">
        <div class="find-meeting-img">
            <?php 
    
    if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
        </div>
        <div class="find-meeting-content">
            <h2><?php echo $heading; ?></h2>
            <?php echo $content; ?>
            <a href="<?php echo $btn_url; ?>" class="pink-btn"><?php echo $btn_text; ?></a>
        </div>
    </div>
    <?php 
    endwhile;
    endif;
    ?>
    <div class="find-meeting-btn">
        <a href="<?php the_sub_field('find_meetings_btn_url'); ?>"
            class="btn-blue"><?php the_sub_field('find_meetings_btn'); ?></a>
    </div>
</section>