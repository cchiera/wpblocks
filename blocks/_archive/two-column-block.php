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
$id = 'two-column-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'two-column-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text1 = get_field('text1') ?: 'Text 1';
$text2 = get_field('text2') ?: 'Text 2';
//$image = get_field('image') ?: 295;

?>

<div class="two-column-block <?php echo esc_attr($className); ?>">
    <div><?php echo $text1 ?></div>
    <div><?php echo $text2 ?></div>
</div>