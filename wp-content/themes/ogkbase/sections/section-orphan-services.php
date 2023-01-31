<section class="orphan-services-section" style="background-color: <?php the_sub_field('bg_color'); ?>">
    <div class="orphan-services-outerwrap">
        <div class="orphan-services-innerwrap">
            <h2><?php the_sub_field('orphan_services_heading'); ?></h2>
            <?php the_sub_field('orphan_services_content'); ?>
            
            <ul>
                <?php
                    if( have_rows('orphan_services_lists') ):
                    while( have_rows('orphan_services_lists') ) : the_row();
                ?>
                <li><?php the_sub_field('orphan_services_list'); ?></li>
                <?php 
                    endwhile;
                endif;
                ?>
            </ul>
        </div>
    </div>
</section>