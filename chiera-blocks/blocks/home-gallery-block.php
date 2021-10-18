<?php

/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-gallery-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-gallery-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image = get_field('image') ?: 'Image';
$content = get_field('content') ?: 'Content';
// $content_2 = get_field('content_2') ?: 'Content';
// $button_name = get_field('button_name') ?: 'Button Name';
// $button_link = get_field('button_link') ?: 'Button Link';
//$image = get_field('image') ?: 295;

?>
<div class="home-gallery-wrap">
<div id="<?php echo esc_attr($id); ?>" class="home-gallery">


<div class="<?php echo esc_attr($className); ?>">

<div class="owl-carousel-home1">
<div class="<?php echo esc_attr($id); ?> owl-carousel owl-theme owl-loaded owl-drag">
<div class="owl-stage-outer">
<div class="owl-stage">
<?php

// check if the repeater field has rows of data
if( have_rows('slider') ):

// loop through the rows of data
while ( have_rows('slider') ) : the_row();

// display a sub field value
?>
    <div class="owl-item">
      <div class="slider-loop item <?php //echo the_sub_field('background_class'); ?>" style="background-size:cover;background-image:url(<?php echo the_sub_field('image'); ?>)" class="item">


<div class="title-header-grid">
          
          
<div class="grid-item left">
    <div class="flex-item">
        <div class="slider-content"><?php echo the_sub_field('content'); ?></div>
    </div>
</div>
          
</div>
</div>
</div>

<?php
    endwhile;
else :
    // no rows found
endif;

?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
jQuery(function() {
    jQuery('.<?php echo esc_attr($id); ?>').owlCarousel({
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        loop: true,
		nav: true,
        responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1024: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            },
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        })
    })
</script>