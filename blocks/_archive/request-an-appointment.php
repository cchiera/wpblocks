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
$id = 'request-an-appointment-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'request-an-appointment';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text1 = get_field('text1') ?: 'Text 1';
$text3 = get_field('text3') ?: 'Text 3';
$image = get_field('image') ?: 'Image';
$form = get_field('form') ?: 'Form';
//$image = get_field('image') ?: 295;

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">

    <div class="grid-item">
        <div class="quote-wrapper">

            <div class="quote-wrapper-inner">
                <?php echo $text1; ?>
            </div>

        </div>
    </div>
    

    <div>
        <div class="request-an-appointment-wrapper">
            <div class="form-container">
                <div class="form-container-inner">
                    <h2><?php echo $text3; ?></h2>
                    
                    <div class="form-container-inner-content">
                        <div>
                            <img src="<?php echo $image; ?>">
                        </div>
                        <div class="request-appointment-form">
<?php echo $form; ?>

<!--<form class="home-request-an-appointment"><input type="text" placeholder="Your name" />-->
                            <!--    <input type="text" placeholder="Your email address" />-->
                            <!--    <select name="preferred_location">-->
                            <!--        <option value="none" selected disabled hidden>Preferred Location</option>-->
                            <!--        <option value="Akron">Akron</option>-->
                            <!--        <option value="Canton">Canton</option>-->
                            <!--        <option value="Green">Green</option>-->
                            <!--        <option value="Doylestown">Doylestown</option>-->
                            <!--    </select>-->
                            <!--    <input id="request_an_appointment_button" type="button" value="Request an Appointment" /></form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>