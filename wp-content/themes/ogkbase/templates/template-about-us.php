<?php
/* Template Name: About Us */

get_header(); ?>
<?php

if( have_rows('reusable_sections') ):

    while( have_rows('reusable_sections') ): the_row();

        ogk_get_reusable_sections();

    endwhile;

endif;
 get_footer(); ?>
