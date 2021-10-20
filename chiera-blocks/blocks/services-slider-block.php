<?php

/**
 * Home page 'Dental Care Needs' slider: https://summitdentalohio.eks.wrlweb.com/
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'services-slider-block-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'services-slider-block';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$content = get_field('content') ?: 'Services Slider: Content';
$button = get_field('button') ?: 'Services Slider: Button';
?>

<div class="services-container <?php echo esc_attr($className); ?>">

<div class="services-container">

<div class="services-two-column-block">
        <div>
            <?php echo $content; ?>
        </div>
        <div>
        <p>
            <?php echo $button; ?>
        </p>
    </div>
</div>

<div class="services-nav-wrap">
<div id=" <?php echo esc_attr($id); ?>" class="home-gallery">
<div class="<?php echo esc_attr($className); ?>">
<div class="owl-carousel-home1 services">
</div>
</div>
</div>
</div>
</div>

<script>
jQuery(document).ready(function() {
    dataArr = [];
      let servicesPageURL = '/wp-json/wp/v2/services?_embed';
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
            let featuredContent = '';

            for (i = 0; i < data.length; i++) {
            let title = data[i].title.rendered;
            let icon = data[i].acf.icon;
            let slug = data[i].slug;
            let link = data[i].link;
            let services_content = data[i].acf.services_content;
            let thumbnail = data[i]._embedded['wp:featuredmedia'][0].source_url;
            
            dataArr.push({
            thumbnail: thumbnail,
            link:link,
            title:title,
            services_content:services_content,
            icon:icon
            });
            };
        }
    });

let carouselHTML = `
<div class="<?php echo esc_attr($id); ?> owl-carousel owl-theme owl-loaded owl-drag">
    <div class="owl-stage-outer">
        <div class="owl-stage">`;

for (i = 0; i < dataArr.length; i++) {
    //carouselHTML+='<p>test</p>'
        carouselHTML += `
            <div class="owl-item owl-services-img-wrapper">
                <div class="owl-services-img" style="background-image:url('`+dataArr[i].thumbnail+`')" onclick="window.open('`+dataArr[i].link+`', '_self')"></div>
                <div class="featured-items-text">
                    <div class="services-block-wrapper services-block">
                    
                    <div onclick="window.open('`+dataArr[i].link+`', '_self')" class="icon-img" style="background-image:url('`+dataArr[i].icon+`')"></div>
                    
                        <h4 class="services-content"><a href="`+dataArr[i].link+`">`+dataArr[i].title+`</a></h4>
                        <p>`+dataArr[i].services_content+`</p>
                    </div>
                </div>
        </div>`;
}
carouselHTML+='</div></div></div>'
//console.log(carouselHTML)

jQuery('.owl-carousel-home1.services').append(carouselHTML);
    jQuery('.<?php echo esc_attr($id); ?>').owlCarousel({
        autoplay:true,
        autoplayTimeout:93000,
        autoplayHoverPause:true,
        autoHeight:true,
        loop: true,
		nav: true,
		margin:18,
        responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                1024: {
                    items: 4
                },
                1920: {
                    items: 4
                }
            },
            navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
        })
});
</script>