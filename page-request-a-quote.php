<?php
    get_header();
    // page meta
?>

<main>

<section class="quote-page">
    <div class="top-banner">
        <img src="<?php echo get_field('top_banner'); ?>" class="top-banner-image" alt="">
        <div class="overlay">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/A_black_image.jpg/640px-A_black_image.jpg" class="overlay-image" alt="">
        </div>
        <div class="services-title">
        <h2><?php echo get_field('quote_title'); ?></h2>
    </div>
    </div>
    
    <div class="quote-form">
        <div>
            <h3 class="h3-quote"><?php echo get_field('quote_area'); ?></h3>
        </div>
        <div class="form">
            <div>
                <h3><?php echo get_field('form_title'); ?><h3>
            </div>
            <div>
                <p><?php echo get_field('form_quote'); ?><p>
            </div>
            <div>
                <?php echo do_shortcode('[contact-form-7 id="b749e83" title="Untitled"]');?>
            </div>
        </div>
    </div>
    
</section>

<section class="any-questions">
    <div class="end-quote">
    <h2>Any questions?</h2>
    <p>Feel free to get in touch</p>
    </div>
    <div class="icons">
        <div class="icons-cont">
        <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/telephone.svg" />
        <br>
        <span><?php echo get_field('phone_number', 'option'); ?></span>
        </div>
        <div class="icons-cont">
        <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/physical_location.svg" />
        <br>
        <span><?php echo get_field('physical_address', 'option'); ?></span>
        </div>
        <div class="icons-cont">
        <img class="quote-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/email.svg" />
        <br>
        <span><?php echo get_field('company_email', 'option'); ?></span>
        </div>
    </div>
</section>

</main>

<?php
    get_footer();
?>
