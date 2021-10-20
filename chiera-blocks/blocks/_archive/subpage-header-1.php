<?php

/**
 * Testimonial Block 
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'subpage-header-1-block' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'subpage-header-1-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$content = get_field('content') ?: 'Content';
$image = get_field('image') ?: 295;

?>

<div class="subpage-header-1-wrapper <?php echo esc_attr($className); ?>">
<div class="inner">
<div class="content">
    <div class="inner">
    <?php echo $content ?>
    </div>
</div>
<div class="image">
    <?php if( get_field('image') ): ?>
    <img src="<?php echo $image ?>">
<?php endif; ?>
</div>
</div>
</div>