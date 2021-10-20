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
$id = 'copywrite-widgets-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'footer-locations-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text1 = get_field('text1') ?: 'Text 1';
$text2 = get_field('text2') ?: 'Text 2';
$image = get_field('image') ?: 'Text 2';

?>

<img class="footer-logo" src="<?php echo $image; ?>">
<ul class="grid-item">
<?php

// check if the repeater field has rows of data
if( have_rows('locations') ):

// loop through the rows of data
while ( have_rows('locations') ) : the_row();
// display a sub field value
?>

<li>
    <h3><?php echo the_sub_field('text1'); ?></h3>
    <p><?php echo the_sub_field('text2'); ?></p>
</li>

<?php
    endwhile;
else :
    // no rows found
endif;

?>
</ul>