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
$id = 'home-now-open-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'home-now-open';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text1 = get_field('text1') ?: 'Text 1';
$text2 = get_field('text2') ?: 'Text 2';
$image = get_field('image') ?: 'Image';
//$image = get_field('image') ?: 295;

?>

<div class="top-right-header <?php echo esc_attr($className); ?>" style="background-image:url('<?php echo $image ?>')">
    <div id="<?php echo esc_attr($id); ?>" class="home-now-open-inner">
        <h3><a href="#"><?php echo $text1; ?></a></h3>
        <h4><?php echo $text2; ?></h4>
    </div>
</div>