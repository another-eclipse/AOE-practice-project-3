<?php
    get_header();
    // page meta
    $services = get_field('service_type');
?>

<main>

<section class="services-page">
    <div class="top-banner">
        <img src="<?php echo get_field('top_banner'); ?>" class="top-banner-image" alt="">
        <div class="overlay">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/A_black_image.jpg/640px-A_black_image.jpg" class="overlay-image" alt="">
        </div>
        <div class="services-title">
        <h2><?php echo get_field('services_title'); ?></h2>
    </div>
    </div>
    
    <div class="service-types">
        <?php foreach($services as $item): ?>
            <div class="services-container">
                <h2 class="service-group-title"><?php echo $item['service_group_title']; ?></h2>
                <?php foreach($item['service_block'] as $block): ?>
                    <div class="block">
                        <div class="service-image-container">
                            <img src="<?php echo $block['service_image']; ?>" class="service-image" alt="">
                        </div>
                        <div class="service-text">
                        <div class="service-title">
                            <h3><?php echo $block['service_subtitle']; ?></h3>
                        </div>
                        <div class="service-description">
                            <p><?php echo $block['service_description']; ?></p>
                        </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
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

<section class="image-list">
    <div class="image-list">
            <?php foreach(get_field('5_images') as $image): ?>
                <div class="images">
                    <img src="<?php echo $image; ?>" class="five-images" alt="">
                </div>
            <?php endforeach; ?>
    </div>
</section>
</main>

<?php
    get_footer();
?>
