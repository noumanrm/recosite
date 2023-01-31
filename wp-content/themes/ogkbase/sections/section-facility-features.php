<section class="facility-features-section">
    <h2><?php the_sub_field('facility_features_heading'); ?></h2>
    <ul>
        <?php
            if( have_rows('facility_features_lists') ):
            while( have_rows('facility_features_lists') ) : the_row();
        ?>
            <li><?php the_sub_field('facility_features_list'); ?></li>
        <?php 
            endwhile;
            endif;
        ?>
    </ul>
</section>