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
$id = 'patient-education-right-sidebar-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'patient-education-right-sidebar';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}
?>

<div class="social-widgets-block <?php echo esc_attr($className); ?>">
    <?php //echo $text1 ?>
</div>
<?php
			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'Patient-Education' ),
				'posts_per_page'         => '5',
				'orderby'                => 'rand',
				'order'					 => 'DESC'
			);

global $post;

	$the_query = new WP_Query($args);
?>
<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="patient-education-sidebar patient-education-sidebar-rp-grid">
    <div>
    <a href="<?php echo get_the_permalink(); ?>"><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>"></a>
    </div>
    <div>
    <h4><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
    <?php the_excerpt(); ?>
    <a class="read-more" href="<?php echo get_the_permalink(); ?>">Read more ></a>
    </div>
    </div>
  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>


<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>
<a class="view-all-button" href="/patient-education/">View all</a>