<section class="welcome-section">
     <?php the_sub_field('welcome_content'); ?>
     <div class="welcome-btn-outerwrap">
     <?php
        if( have_rows('buttons') ):
            while( have_rows('buttons') ) : the_row();
            $btn_txt = get_sub_field('button_text'); 
            $btn_url = get_sub_field('button_url'); 
            ?>
        <a class="btn-blue"
            href="<?php echo $btn_url; ?>"><?php echo $btn_txt; ?>
        </a>
        <?php 
        endwhile;
    endif;
        ?>
    </div>
</section>