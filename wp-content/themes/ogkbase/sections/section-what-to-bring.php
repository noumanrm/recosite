<section class="what-to-bring-section">
    <div class="what-to-bring-outerwrap">
        <h2><?php the_sub_field('what_to_bring_heading'); ?></h2>
        <?php the_sub_field('what_to_bring_content'); ?>
        
        <ul>
            <?php
            if( have_rows('what_to_bring_list') ):
            while( have_rows('what_to_bring_list') ) : the_row();
            ?>
                <li><?php the_sub_field('list'); ?></li>
            <?php
            endwhile;
            endif;
            ?>
        </ul>
    </div>
</section>