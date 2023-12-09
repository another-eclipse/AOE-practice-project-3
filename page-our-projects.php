<?php
    get_header();
    // page meta
    $projects = get_field('projects_gallery');
?>

<script>
  jQuery(window).load(function() {
    jQuery.fn.lightspeedBox();
  });
</script>  

<main>
    
    
<section class="services-page">
    <div class="top-banner">
        <img src="<?php echo get_field('top_banner'); ?>" class="top-banner-image" alt="">
        <div class="overlay">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/49/A_black_image.jpg/640px-A_black_image.jpg" class="overlay-image" alt="">
        </div>
        <div class="services-title">
        <h2><?php echo get_field('our_projects_title'); ?></h2>
    </div>
    </div>
</section>

<section class="projects-gallery">
    <div class="container">
        <div class="subcontainer">
            <div class="grid">
                <?php foreach($projects as $image): ?>
                
                    <a href="<?php echo $image; ?>" class="lsb-preview img" data-lsb-group="gallery1">
                        <img src="<?php echo $image; ?>" class="img" alt="Image Title">
                    </a> 

                
                <?php endforeach; ?>
            </div>
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
