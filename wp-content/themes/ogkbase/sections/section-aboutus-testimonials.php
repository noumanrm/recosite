<section class="aboutus-testimonials-section">
    <section class="meet-our-team-section">

        <div class="our-team-bottom-content">

            <div class="tab-container">
                <div class="tab-menu">
                    <?php 
                    if( have_rows('clients_testimonials') ):
                    $i = 1; 
                    ?>
                    <ul>
                    <?php 
                    while ( have_rows('clients_testimonials') ) : the_row(); 
                    $testimonials = get_sub_field('testimonial_categories');
                    ?>
                        <li><a href="#<?php echo sanitize_title($testimonials); ?>" class="tab-a <?php if($i == 1) echo 'active-a'; ?>" 
                        data-id="tab<?php echo $i; ?>"><?php echo sanitize_title($testimonials); ?></a></li>
                        <?php 
                        $i++;
                        endwhile;            
                        ?>
                    </ul>
                    <?php endif; ?>
                    <?php 
                        if( have_rows('clients_testimonials') ):
                        $i = 1; ?>
                    <select id="mySelect" class="form-control nav-tabs-selector">
                    <?php 
                    while ( have_rows('clients_testimonials') ) : the_row(); 
                    $testimonials = get_sub_field('testimonial_categories');
                    ?>
                        <option value="tab<?php echo $i; ?>"><?php echo $testimonials; ?></option>
                        <?php 
                        $i++;
                        endwhile;
                        ?>
                    </select>
                    <?php 
                endif; 
                ?>
                </div>
            </div>
            <!--end of tab-menu-->
            <?php 
                if( have_rows('clients_testimonials') ):
	            $i = 1; 
                    while ( have_rows('clients_testimonials') ) : the_row();  ?>
            <div class="tab <?php if($i == 1) echo 'tab-active'; ?>" data-id="tab<?php echo $i; ?>">
                <div class="our-team-top">
                    <div class="our-team-top-content">
                        <div class="our-team-heading">
                            <h2><?php the_sub_field('aboutus_testimonials_heading'); ?></h2>
                        </div>
                    </div>
                    <div class="our-team-top-paragraph">
                        <?php the_sub_field('aboutus_testimonials_paragraph'); ?>
                    </div>
                </div>
                <div class="aboutus-testimonials-outerwrap">
                <?php 
                if( have_rows('testimonials') ):
                    while ( have_rows('testimonials') ) : the_row();  ?>
                    <div class="aboutus-testimonials-innerwrap">
                        <div class="aboutus-testimonials-star-rating">
                            <ul>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/star.svg" alt=""></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/star.svg" alt=""></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/star.svg" alt=""></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/star.svg" alt=""></li>
                                <li><img src="<?php bloginfo('template_url'); ?>/images/star.svg" alt=""></li>
                            </ul>
                        </div>
                        <h3><?php the_sub_field('testimonial_heading'); ?></h3>
                        <?php the_sub_field('testimonial_content'); ?>
                        <div class="client-name">
                            <span><?php the_sub_field('client_name'); ?></span>
                        </div>
                    </div>
                    <?php  
                    endwhile;
                endif;
                    ?>
                    
                </div>
            </div>
            <?php 
                $i++; 
                endwhile;
            endif;
                ?>
            
        </div>
        </div>
    </section>

</section>