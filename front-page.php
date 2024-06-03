<?php get_header(); ?>

<?php
// Get the ACF fields
$hero_bg_image = get_field('hero_bg_image');
$hero_heading = get_field('hero_heading');
$hero_text = get_field('hero_text');
?>

<div class="hero-section relative"
    style="background-image: url('<?php echo esc_url($hero_bg_image); ?>'); background-size: cover; background-position: center; height: 400px; display: flex; align-items: center; justify-content: center; text-align: center;">
    <div class="absolute inset-0 bg-[#484AA7] opacity-50"></div> <!-- Overlay -->
    <div class="relative flex flex-col gap-2 w-[80%] md:w-[60%]">
        <h1 class="text-white hero-heading font-bold"><?php echo esc_html($hero_heading); ?></h1>
        <p class="text-white hero-text"><?php echo esc_html($hero_text); ?></p>
    </div>
</div>

<?php get_footer(); ?>