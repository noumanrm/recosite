</main>
<footer id="footer">
    <div class="footer-top">
        <div class="footer-top-left">
            <div class="footer-logo">
                <a href="<?php echo get_home_url(); ?>">
                <img src="<?php the_field('logo','options'); ?>" alt=""></a>
            </div>
            <div class="footer-top-left-contact">
                <a href="tel:<?php the_field('phone','options'); ?>"><span>local</span><?php the_field('phone','options'); ?></a>
                <a href="tel:<?php the_field('toll_free','options'); ?>"><span>Toll Free</span><?php the_field('toll_free','options'); ?></a>
                <a href="tel:<?php the_field('fax','options'); ?>"><span>Fax</span><?php the_field('fax','options'); ?></a>
                <b style="color:#fff;"><?php the_field('email','options'); ?></b>
            </div>
            <div class="footer-top-left-address">
                <p><?php the_field('address','options'); ?> <?php the_field('city','options'); ?>, <?php the_field('state','options'); ?></p>
            </div>
           
            <?php get_template_part("includes/social-icons"); ?>
        </div>
        <div class="footer-top-right footer-navbar">
            <ul>
                <li>
                    <span>Alumni Resources</span>
                </li>
                <?php if(have_rows('alumni_resources','options')): ?>
                    <?php while(have_rows('alumni_resources','options')): the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('page_url','options'); ?>"><?php the_sub_field('page_name','options'); ?></a>
                </li>
                <?php endwhile; ?>
                     <?php endif; ?>
                
            </ul>
            <ul>
                <li>
                    <span>Quick Links</span>
                </li>
                <?php if(have_rows('quick_links','options')): ?>
                    <?php while(have_rows('quick_links','options')): the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('page_url','options'); ?>"><?php the_sub_field('page_name','options'); ?></a>
                </li>
                <?php endwhile; ?>
                     <?php endif; ?>
                
            </ul>
            <ul>
                <li>
                    <span>About Us</span>
                </li>
                <?php if(have_rows('about_us','options')): ?>
                    <?php while(have_rows('about_us','options')): the_row(); ?>
                <li>
                    <a href="<?php the_sub_field('page_url','options'); ?>"><?php the_sub_field('page_name','options'); ?></a>
                </li>
                <?php endwhile; ?>
                     <?php endif; ?>
                
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
    <div class="footer-bottom-left">
        <ul>
            <li>
                <a href="/accreditations">
                    <img src="<?php bloginfo('template_url'); ?>/images/RECO_Accreditations.png" alt="">
                </a>
                </li>
        </ul>
    </div>
    <div class="footer-bottom-right">
        <div class="footer-copyright">
            <div class="tree">
                <img src="<?php bloginfo('template_url'); ?>/images/tree.svg" alt="">
            </div>
            <p><?php the_field('copyright_text','options'); ?></p>
            <div class="tree">
                <img src="<?php bloginfo('template_url'); ?>/images/tree.svg" alt="">
            </div>
        </div>
    </div>
    </div>
</footer>

<script src="<?php bloginfo('template_url'); ?>/assets/js/lightbox/lightbox-plus-jquery.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/lightbox/lightbox.js"></script>
<?php if(is_page('camping-trip-2022-photo-album')){ ?>
<script>
    // LIGHTBOX JS START:  
    // TODO: touch events
    const divs = document.querySelectorAll('.gallery-inner');
    const body = document.querySelector('.abc');
    const prev = document.querySelector('.prev');
    const next = document.querySelector('.next');

    checkPrev = () => document.querySelector('.gallery-inner:first-child').classList.contains('show') ? prev.style.display = 'none' : prev.style.display = 'flex';

    checkNext = () => document.querySelector('.gallery-inner:last-child').classList.contains('show') ? next.style.display = 'none' : next.style.display = 'flex';

    Array.prototype.slice.call(divs).forEach(function (el) {
        el.addEventListener('click', function () {
            this.classList.toggle('show');
            body.classList.toggle('active');
            checkNext();
            checkPrev();
        });
    });

    prev.addEventListener('click', function () {
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);
        show.previousElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkNext();
    });

    next.addEventListener('click', function () {
        
        const show = document.querySelector('.show');
        const event = document.createEvent('HTMLEvents');
        event.initEvent('click', true, false);
        show.nextElementSibling.dispatchEvent(event);
        show.classList.remove('show');
        body.classList.toggle('active');
        checkPrev();
    });

</script>
<?php } ?>
<?php wp_footer(); ?>

</body>

</html>