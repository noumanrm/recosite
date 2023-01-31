<section class="lightbox-section">
    <h2>View All</h2>
    <div class="abc">
    <a href="#null" class="prev">&lt;</a>
    <a href="#null" class="next">&gt;</a>
    <main class="container">
    <?php
      if( have_rows('lightbox_album') ):
          while( have_rows('lightbox_album') ) : the_row(); ?>
        <div class="<?php the_sub_field('image_directions'); ?> gallery-inner"><img src="<?php the_sub_field('lightbox_image'); ?>" alt=""></div>
        <?php 
          endwhile;
        endif;
          ?>
       
    </main>
</div>
</section>