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
// $content_2 = get_field('content_2') ?: 'Content';
// $button_name = get_field('button_name') ?: 'Button Name';
// $button_link = get_field('button_link') ?: 'Button Link';
//$image = get_field('image') ?: 295;

?>

<?php

        	
			// WP_Query arguments
			$args = array(
				'post_type'              => array( 'Services' ),
				'posts_per_page'         => '24',
				'orderby'                => 'date',
				'order'					 => 'DESC'
			);


	$the_query = new WP_Query($args);
?>

<div class="services-container <?php echo esc_attr($className); ?>">
<div class="services-two-column-block">
        <div>
            
            <?php echo $content; ?>
        </div>
        <div>
            <?php echo $button; ?>
    </div>
</div>

    


<div class="services-container">
<div class="services-two-column-block">
        <div>
            <h3>Let Us Help You With Your</h3>
            <h4>Dental Care Needs</h4>
        </div>
        <div>
        <p>
            <a class="view-our-services" href="#">View Our Services</a>
        </p>
    </div>
</div>



    
    <div class="services-nav-wrap">
    <div id=" <?php echo esc_attr($id); ?>" class="home-gallery">


<div class="<?php echo esc_attr($className); ?>">

<div class="owl-carousel-home1">
<div class="<?php echo esc_attr($id); ?> owl-carousel owl-theme owl-loaded owl-drag">
<div class="owl-stage-outer">
<div class="owl-stage">


    
    
    
    
    
    
    
    
    
    
    

    		<?php
			if($the_query->have_posts()):
	    		while($the_query->have_posts()): $the_query->the_post(); ?>
					<div class="owl-item owl-services-img-wrapper">
						<div class="owl-services-img" style="background-image:url('<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>')">
							
						</div>
                            
                        <div class="featured-items-text <?php global $post;echo $post->post_name; ?>">
                            


















	
			            </div>
			            
			        </div>
                    
            <?php endwhile; ?>
            <?php endif; ?>
                      <?php
  // Restore original Post Data
  wp_reset_postdata();

    ?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
 
 
</div>
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
    })
</script>








<script>

jQuery(document).ready(function() {







dataArr = [];

      let servicesPageURL = '/wp-json/wp/v2/services';
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

let featuredContent = '';
            for (i = 0; i < data.length; i++) {
                
                
              let title = data[i].title.rendered;
              let icon = data[i].acf.icon;
              let slug = data[i].slug;
              let link = data[i].link;
              let services_content = data[i].acf.services_content;

            // console.log(title + ' title')
            // console.log(icon + ' icon')
            // console.log(slug + ' slug')
            // console.log(link + ' link')
            // console.log(services_content + ' services content')
    //          tabs_main += '<li><a id="'+main_classes+'" href="'+parts+'#'+main_classes+'" title="'+main_classes+'">'+main_classes+'</a></li>'



featuredContent += `
<div class="services-block-wrapper services-block">
<h4 class="services-content"><a href="`+link+`">`+title+`</a></h4>
<p>`+services_content+`</p>
</div>`;
// //jQuery('.featured-items-text').append(featuredContent);

//console.log(featuredContent)


 dataArr.push({
                        slug: slug,
                        code: featuredContent,
                    });



            };
            

// jQuery('.featured-items-text').each(function( index ) {
//     jQuery(this).append(featuredContent)
// });

            
            
            
            
            
            
            
            
            
            
      //      tabs_main += '</ul>'
        
            // jQuery('.tabs-nav-wrap').append(tabs_main);
          //  jQuery(icon).appendTo()
        }
    });

 dataArr.forEach(function(code){
     console.log(code);
 });


//console.log(dataArr)


//   function servicesMenu1(){
//       let servicesPageURL = '/wp-json/wp/v2/services';
//       jQuery.ajax({
//           type: 'GET',
//           url: servicesPageURL,
//           async: false,
//           beforeSend: function(xhr) {
//               if (xhr && xhr.overrideMimeType) {
//                   xhr.overrideMimeType('application/json;charset=utf-8');
//               }
//           },
//           dataType: 'json',
//           success: function(data) {
//               alert(0)
// //            let tabs_main = '<ul class="tabs-nav">'
//             for (i = 0; i < data.length; i++) {
                
                
//               let icon = data[i].acf.icon;
//             console.log(icon)
//     //          tabs_main += '<li><a id="'+main_classes+'" href="'+parts+'#'+main_classes+'" title="'+main_classes+'">'+main_classes+'</a></li>'
//             };
//       //      tabs_main += '</ul>'
        
//             // jQuery('.tabs-nav-wrap').append(tabs_main);
//           //  jQuery(icon).appendTo()
//         }
//     });
//   }
});








//dataArr.forEach(myFunction);

// document.getElementById("demo").innerHTML = text;
 
// function myFunction(item, index) {

//    console.log(">>>>>>>>>>>>>>>")
//}



  </script>