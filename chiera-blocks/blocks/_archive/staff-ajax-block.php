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
$id = 'staff-ajax-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'staff-ajax-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$text = get_field('text') ?: 'Text 1';
//$image = get_field('image') ?: 295;

?>

<div class="staff-ajax-block <?php echo esc_attr($className); ?>">
    <?php echo $text; ?>
</div>






<script>

jQuery(document).ready(function() {
    dataArr = [];
      let servicesPageURL = '/wp-json/wp/v2/staff-category';
      jQuery.ajax({
          type: 'GET',
          url: servicesPageURL,
          async: false,
          beforeSend: function(xhr) {
              if (xhr && xhr.overrideMimeType) {
                  xhr.overrideMimeType('application/json;charset=utf-8');
              }
          },
          dataType: 'json',
          success: function(data) {
//            let tabs_main = '<ul class="tabs-nav">'

//let featuredContent = '';

console.log(data)



            for (i = 0; i < data.length; i++) {
        
let id=data[i].id;
let name=data[i].name;
//console.log(id)

        //     let title = data[i].title.rendered;
        //     let icon = data[i].acf.icon;
        //     let slug = data[i].slug;
        //     let link = data[i].link;
        //     let services_content = data[i].acf.services_content;
        //     let thumbnail = data[i]._embedded['wp:featuredmedia'][0].source_url;
            
            dataArr.push({
            name: name,
            id:id
            });
             };
        // 
        }
    }).done(
        console.log(dataArr)
        );

});
</script>