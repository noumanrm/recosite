<section class="privacy-insurance-act-section">

    <?php
        if( have_rows('insurance_act_wrap') ):
        while( have_rows('insurance_act_wrap') ) : the_row();
    ?>
    <div class="privacy-insurance-act-innerwrap">
        <h2><?php the_sub_field('insurance_act_heading'); ?></h2>
        <span><?php the_sub_field('insurance_act_sub_heading'); ?></span>
        <p><?php the_sub_field('insurance_act_content'); ?></p>
    </div>
    <?php 
        endwhile;
        endif;
    ?>

</section>