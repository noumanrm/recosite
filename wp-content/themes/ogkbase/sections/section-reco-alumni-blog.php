<section class="reco-alumni-blog-section">
    <div class="our-property-filters-section">
        <div class="our-property-filters-innerwrap">
            <div class="tab-container">
                <div class="tab-menu">
                <?php
                $i = 2; 
                $args = array(
                    
                    'post_type'  => 'posts',
                    'taxonomy'   => 'category',
                    'orderby' => 'ID',
                    'order'   => 'ASC'
                ); ?>
                    <ul>
                        <li><a href="#" class="tab-a active-a" data-id="tab1">All Categories</a></li>
                        <?php 
                            $blogs = get_categories($args);
                            foreach($blogs as $blog){
                                if($blog->count > 0){
                        ?>
                        <li><a href="#<?php echo $blog->slug ?>" class="tab-a" data-id="tab<?php echo $i; ?>">
                        <?php echo $blog->cat_name;  ?></a></li>
                        <?php 
                        $i++;
                                }
                            }    
                        ?>
                        <li><a href="#clear" class="tab-a" data-id="tab7">Clear All
                                <div class="binwrap">
                                    <img src="<?php bloginfo('template_url'); ?>/images/lid.svg" alt="">
                                    <img src="<?php bloginfo('template_url'); ?>/images/bin.svg" alt="">
                                </div>
                            </a></li>
                    </ul>
                    <select id="mySelect" class="form-control nav-tabs-selector">

                        <option value="tab1">All Categories</option>
                        <?php
                            $i = 1; 
                            $args = array(
                                
                                'post_type'  => 'posts',
                                'taxonomy'   => 'category',
                                'orderby' => 'ID',
                                'order'   => 'ASC'
                            ); 
                        ?>
                        <?php
                            $i = 1;
                            $blogs = get_categories($args);
                            foreach($blogs as $blog){
                                if($blog->count > 0){
                        ?>
                        <option value="tab2"><?php echo $blog->cat_name;  ?></option>
                        <?php 
                            $i++;
                                }
                            }
                        ?>
                        
                        <option value="tab7">Clear All</option>
                    </select>
                </div>
                <!--end of tab-menu-->

                <div class="tab tab-active" data-id="tab1">
                    <div class="reco-alumni-outerwrap"> 
                        <div class="our-property-alumni-blog-section">
                            <div class="our-property-alumni-blog-bottom">
                            <?php 
                            $post_type = 'post';
                            $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) ); 
                            foreach( $taxonomies as $taxonomy ) :
                                $terms = get_terms( $taxonomy );
                                foreach( $terms as $term ) :
                            ?>
                             <?php
                                $args = array(
                                        'post_type' => $post_type,
                                        'posts_per_page' => -1,  //show all posts
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => $taxonomy,
                                                'field' => 'slug',
                                                'terms' => $term->slug,
                                            )
                                        )
                        
                                    );
                                $posts = new WP_Query($args);
                                if( $posts->have_posts() ): ?> 
                                <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="our-property-alumni-blog-bottom-innerwrap">
                                        <span><?php echo $term->name; ?></span>
                                        <div class="our-property-alumni-blog-bottom-img">
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                                            <img src="<?php echo $url; ?>" alt="">
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <span class="date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </a>
                                <?php wp_reset_postdata(); endwhile; endif; ?>
                                <?php 
                                endforeach;
                            endforeach;
                                ?>
                            </div>
                        </div>

                    </div>

                </div>

                <?php 
                $j = 2;
                $args = new WP_Query(array(
                    
                    'post_type'  => 'post',
                    //'taxonomy'   => 'category',
                    'orderby' => 'ID',
                    'order'   => 'DESC',
                    'posts_per_page' => -1
                ));
                $blogs = get_categories($args);
                foreach($blogs as $blog){
                    
                     ?>
                <div class="tab " data-id="tab<?php echo $j; ?>">
                    <div class="reco-alumni-outerwrap">
                        <div class="our-property-alumni-blog-section">
                            <div class="our-property-alumni-blog-bottom">
                            <?php
                                // $loop = new WP_Query(array(
                                //     'post_type' => 'post',
                                //     'taxonomy'   => 'category',
                                //     'order'   => 'ASC',
                                //     'posts_per_page' => -1
                                // ));
                                while( $args->have_posts() ) : $args->the_post();
                                ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="our-property-alumni-blog-bottom-innerwrap">
                                        <span><?php echo $blog->cat_name; ?></span>
                                        <div class="our-property-alumni-blog-bottom-img">
                                        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($loop->ID) ); ?>
                                            <img src="<?php echo $url; ?>" alt="">
                                        </div>
                                        <h3><?php the_title(); ?></h3>
                                        <span class="date"><?php echo get_the_date(); ?></span>
                                    </div>
                                </a>
                                <?php   
                                    wp_reset_postdata();
                                    endwhile;
                                ?>
                            </div>
                        </div>

                    </div>

                </div>
                <?php 
                $j++; 
                    }
                ?>
               
            </div>
        </div>

    </div>
</section>