<?php
    get_header();
    // page meta
    $contact = get_field('Contact');
    $working_hours = get_field('working_hours');
?>

<main>
<section class="form-section">
    <div class="form">
    <h2><?php echo get_field('contact_title'); ?></h2>
    <h4><?php echo get_field('contact_subtitle'); ?></h4>
        <div id="contact-form" class="site-content" role="main">
        <?php echo do_shortcode('[contact-form-7 id="d956212" title="Contact form"]'); ?>
        </div>
    </div>

    <div class="contact-details">
    <div>
        <h3>Address</h3>
        <div class="footer-content">
        <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/physical_location.svg" />
        <span><?php echo get_field('physical_address', 'option'); ?></span>
        </div>
    </div>
    <div>
        <div>
            <h3>Let's talk</h3>
            <div class="footer-content">
                <div>
                    <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/telephone.svg" />
                    <span><?php echo get_field('phone_number', 'option'); ?></span>
                </div>
            <div>
                <img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/email.svg" /><span><?php echo get_field('company_email', 'option'); ?></span>
            </div>
        </div>
    </div>
    </div>
    <div class="socials">
        <a href="<?php echo get_field('facebook_page', 'option'); ?>"><i><img class="thumbnail" size="icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/facebook_icon.png" /></i></a>
        <a href="<?php echo get_field('instagram_page', 'option'); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/instagram_icon.png" /></a>
        <a href="<?php echo get_field('twitter_page', 'option'); ?>"> <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/twitter_icon.png" /></a>
        <a href="<?php echo get_field('pinterest_page', 'option'); ?>"><img class="thumbnail" src="<?php echo get_template_directory_uri(); ?> /assets/images/pinterest_icon.svg" /></a>
        </div>
    <div>
        <h3><?php echo get_field('working_hours_title'); ?></h3>
        <div class="working-time">
            <?php if($working_hours): ?>
                <?php foreach($working_hours as $item): ?>
                    <span class="working-days"><?php echo $item['days'];?></span>
                    <span class="working-hours"><?php echo $item['hours'];?></span>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="banner-with-text">
            <div class="banner-overlay">
        <img src="<?php echo get_field('banner'); ?>" class="banner-with-text__banner" alt="">
        <div class="overlay">
            <img src="https://wallpaperaccess.com/full/1152525.jpg" class="overlay-image" alt="">
        </div>
        </div>
        
    <div class="banner-text">
        <h3><?php echo get_field('banner_text'); ?></h3>
    
    <div class="banner-button">
        <?php if(get_field('banner_button')): ?>
            <button href="<?php echo get_sub_field('url'); ?>" class="banner-with-text__links">Request a quote</button>
        <?php endif; ?>
    </div>
    </div>
</section>

</main>

<?php
    get_footer();
?>
