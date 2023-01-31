<section class="our-property-filters-section">
    <div class="our-property-filters-innerwrap">
        <div class="tab-container">
            <div class="tab-menu">
                <?php
                
                $i = 1; 
                $args = array(
                    
                    'post_type'  => 'ourproperties',
                    'taxonomy'   => 'properties_category',
                    'orderby' => 'ID',
                    'order'   => 'DESC'
                ); ?>
                <ul>
                    <li>Sort By:</li>
                    <?php 
                    $departments = get_categories($args);
                    foreach($departments as $department){
                        if($department->count > 0){
                    ?>
                    <li><a href="#<?php echo $department->slug ?>" class="tab-a <?php //if($i == 1) echo 'active-a'; ?>"
                            data-id="tab<?php echo $i; ?>"><?php echo $department->cat_name;  ?></a></li>
                    <?php 
                        $i++;
                    }  
                }
                  ?>
                    <li>
                        <a href="#clear" class="tab-a" data-id="tab-c">Clear All
                            <div class="binwrap">
                                <img src="<?php bloginfo('template_url'); ?>/images/lid.svg" alt="">
                                <img src="<?php bloginfo('template_url'); ?>/images/bin.svg" alt="">
                            </div>
                        </a>
                    </li>
                </ul>
                <select id="mySelect" class="form-control nav-tabs-selector">
                    <?php
                $i = 1; 
                $args = array(
                    
                    'post_type'  => 'ourproperties',
                    'taxonomy'   => 'properties_category',
                    'order'      => 'ASC'
                );  
                    $departments = get_categories($args);
                    foreach($departments as $department){
                        if($department->count > 0){
                    ?>
                    <option value="tab<?php echo $i; ?>"><?php echo $department->cat_name;  ?></option>
                    <?php 
                        $i++;
                        }
                    }
                ?>
                    <option value="tab5">Clear All</option>
                </select>
            </div>
            <!--end of tab-menu-->

            <!-- by default -->
            <div class="tab tab-active" data-id="tab-c">

                <div class="our-property-filters-tabs-innerwrap">
                    <?php 
                    $loop = new WP_Query(array(
                        'post_type' => 'ourproperties',
                        //'orderby' => 'title',
                        'order'   => 'ASC',
                        'posts_per_page' => -1
                    ));
                    while( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="our-property-filters-outerwrap">
                            <?php $coming_soon = get_field('coming_soon'); ?>
                            <div class="our-property-filters-img <?php echo $coming_soon; ?>">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                                <img src="<?php echo $url; ?>" alt="">
                            </div>
                            <div class="our-property-filters-content-wrap">
                                <h2><?php the_title(); ?></h2>
                                <div class="our-property-filters-content-btn">
                                    <a href="<?php the_permalink(); ?>" class="pink-btn">View Property</a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php   
                wp_reset_postdata(); 
                endwhile;
                    ?>
                </div>
            </div>

            <?php 
                $j = 1;
                $coming_soon = get_field('coming_soon');
                $departments = get_categories($args);
                foreach($departments as $department){
                     ?>
            <div class="tab <?php //if($j == 1) echo 'tab-active'; ?>" data-id="tab<?php echo $j; ?>">

                <div class="our-property-filters-tabs-innerwrap">
                    <?php 
                    $loop = new WP_Query(array(
                        'post_type' => 'ourproperties',
                        //'orderby' => 'title',
                        'order'   => 'DESC',
                        'properties_category'  => $department->slug
                    ));
                    while( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="our-property-filters-outerwrap">
                            <?php $coming_soon = get_field('coming_soon'); ?>
                            <div class="our-property-filters-img <?php echo $coming_soon; ?>">
                                <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                                <img src="<?php echo $url; ?>" alt="">
                            </div>
                            <div class="our-property-filters-content-wrap">
                                <h2><?php the_title(); ?></h2>
                                <div class="our-property-filters-content-btn">
                                    <a href="<?php the_permalink(); ?>" class="pink-btn">View Property</a>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php   
                     wp_reset_postdata(); 
                    endwhile;
                       
                        ?>
                </div>

            </div>
            <?php 
                $j++; 
                    }
                ?>
        </div>
    </div>

</section>