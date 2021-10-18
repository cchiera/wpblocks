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
$id = 'services-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'services-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text1 = get_field('content') ?: 'Content';
$image = get_field('icon') ?: 295;

?>

<div class="services-block-wrapper <?php echo esc_attr($className); ?>">
	<div class="icon-img" style="background-image:url('<?php echo $image; ?>')"></div>
    <h4 class="services-content"><?php echo the_title(); ?></h4>
    <p class="services-content"><?php echo $text1 ?></p>
</div>