<section class="meet-our-team-section">
    <div class="our-team-top">
        <div class="our-team-top-content">
            <div class="our-team-img">
                <?php $our_team_image = get_sub_field('our_team_image'); ?>
                <img src="<?php echo esc_url($our_team_image['url']); ?>"
                    alt="<?php echo esc_attr($our_team_image['alt']); ?>" />
            </div>
            <div class="our-team-heading">
                <h2><?php the_sub_field('our_team_heading'); ?></h2>
            </div>
        </div>
        <div class="our-team-top-paragraph">
            <?php the_sub_field('our_team_paragraph'); ?>
        </div>
    </div>
    <div class="our-team-bottom-content">

        <div class="tab-container">
            <div class="tab-menu">
                <?php
                
                $i = 1; 
                $args = array(
                    
                    'post_type'  => 'ourteam',
                    'taxonomy'   => 'team_category',
                    // 'orderby' => 'ID',
                    //'order'   => 'DESC'
                ); ?>
                <ul>
                    <?php 
                    $departments = get_categories($args);
                    foreach($departments as $department){
                        if($department->count > 0){
                    ?>
                    <li><a href="#<?php echo $department->slug ?>"
                            class="tab-a <?php if($i == 1) echo 'active-a'; ?>"
                            data-id="tab<?php echo $i; ?>"><?php echo $department->cat_name;  ?></a></li>
                    <?php 
                        $i++;
                    }  
                }
                        ?>
                </ul>
                
                <select id='mySelect' class="form-control nav-tabs-selector">
                <?php
                $i = 1; 
                $args = array(
                    
                    'post_type'  => 'ourteam',
                    'taxonomy'   => 'team_category',
                    'order'      => 'ASC'
                );  
                    $departments = get_categories($args);
                    foreach($departments as $department){
                        if($department->count > 0){
                    ?>
                        <option value='tab<?php echo $i; ?>'><?php echo $department->cat_name;  ?></option>
                        <?php 
                        $i++;
                        }
                    }
                ?>
                </select>
            </div>
            <!--end of tab-menu-->
            <?php 
                $j = 1; 
                $departments = get_categories($args);
                foreach($departments as $department){
                     ?>
            <div class="tab <?php if($j == 1) echo 'tab-active'; ?>" data-id="tab<?php echo $j; ?>">
                <div class="team-member-outerwrap">
                    <?php 
                    $loop = new WP_Query(array(
                        'post_type' => 'ourteam',
                        //'orderby' => 'title',
                        'order'   => 'DESC',
                        'team_category'  => $department->slug
                    ));
                    while( $loop->have_posts() ) : $loop->the_post();
                    ?>
                    <div class="team-member-innerwrap">
                        <div class="team-member-img">
                            <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                <img src="<?php echo $url; ?>" alt="">
                        </div>
                        <div class="team-member-content">
                            <h2><?php the_title(); ?></h2>
                            <span><?php the_field('designation'); ?></span>
                        </div>
                        <div class="team-member-btn">
                            <a href="<?php the_permalink(); ?>" class="pink-btn">Read Bio</a>
                        </div>
                    </div>
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