<section class="sober-living-housing-guidelines-section">
    <div class="sober-living-housing-guidelines-outerwrap">
        <div class="sober-living-housing-guidelines-img-wraper">
            <?php   
            if( have_rows('sober_living_housing_guidelines_images') ):
            while( have_rows('sober_living_housing_guidelines_images') ) : the_row();
            ?>
            <div class="sober-living-housing-guidelines-img">
            <?php 
            $image = get_sub_field('sober_image');
            ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
            <?php 
                endwhile;
                endif;
            ?>
        </div>
        <div class="sober-living-housing-guidelines-innerwrap">
            <h2><?php the_sub_field('sober_living_housing_guidelines_heading'); ?></h2>
            <p><?php the_sub_field('sober_living_housing_guidelines_content'); ?></p>
            <ol>
                <li>Absolutely no use or possession of drugs or alcohol is allowed on or off property.</li>
                <li>All clients must submit to random drug and alcohol testing upon request by any and all staff
                    members. Failure to submit will be deemed a positive test and can result in immediate dismissal.
                </li>
                <li>All clients are strongly encouraged to have a 12-Step sponsor within their first 3 weeks at RECO
                    Institute.</li>
                
                <li>Curfew for all new clients is 10:00 PM, seven days a week, for the first three weeks. After three
                    weeks there will be a review of the client’s progress. If the client has followed all rules as
                    outlined, curfew will be as follows:
                    <ol>
                        <li>11:30 PM Monday – Thursday</li>
                        <li>1:00 AM Friday & Saturday</li>
                    </ol>
                </li>


                <li>Clients are strongly encouraged to attend a meeting a day for the first 90 days at RECO Institute in
                    the fellowship of their choice (AA, NA, CA, etc.), unless alternative plans are approved by the
                    clinical team.</li>
                <li>Meeting verification forms may be enacted and redacted at any time upon request by clinical staff.
                </li>
            </ol>
        </div>
    </div>
</section>