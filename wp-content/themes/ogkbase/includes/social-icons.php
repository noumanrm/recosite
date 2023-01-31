<div class="footer-top-left-social-icons">
    <ul>
        <?php if(have_rows('social_links','options')): ?>
        <?php while(have_rows('social_links','options')): the_row(); ?>
        <li>
            <a href="<?= get_sub_field('url'); ?>" target="_blank">
                <img src="<?= get_sub_field('custom_icon') ?>" alt="<?= get_sub_field('site') ?>">
            </a>
        </li>
        <?php endwhile; ?>
        <?php endif; ?>

    </ul>
</div>