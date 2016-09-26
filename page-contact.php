
 <?php

 /*
Template Name: page-contact */


 get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');

?>




<div class="container-fluid">

<!--MAIN WORK  -->

	<div class="row">
			<div class="col-sm-12">
					<div class="col-xs-12 col-sm-12 main-project-box" style="background-image:url('<?php echo $image[0]; ?>');"></div>


				</div>
		</div>

</div>

<div class="container">

		 		<div class="row">






















		 <div class="container" style="margin-bottom:100px;">

        	 <div class="col-sm-12 text-center mt50">

       			<h1 class="green">CONTATTI</h1>

        	</div>

        	<div class="col-sm-4 col-xs-12 mt30">

               <div class="col-sm-12">

               		<p><i class="fa fa-envelope green"></i> <?php the_field('mail'); ?></p>
                    <p><i class="fa fa-phone green"></i> <?php the_field('telefono'); ?></p>
                    <p><i class="fa fa-fax green"></i> <?php the_field('fax'); ?></p>


               </div>

        	</div>



            <div class="col-sm-8 col-xs-12 mt30">
        <?php echo do_shortcode('[ninja_form id=1]'); ?>



        	</div>
    </div>

    <div class="container-fluid">

    		<div class="row">
            	<div id="map" class="container">



          </div><!-- end map -->
            </div>



            <script>
                  function initMap() {
                    // Styles a map in night mode.
                    var map = new google.maps.Map(document.getElementById('map'), {
                      center: {lat: 45.4746645, lng: 9.2211635},
                      zoom: 14,
                      disableDefaultUI: true,
                      styles: [{"featureType":"administrative.country","elementType":"geometry.fill","stylers":[{"weight":"5.83"}]},{"featureType":"administrative.province","elementType":"geometry.fill","stylers":[{"color":"#ff0000"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"color":"#ff0000"},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#888686"}]},{"featureType":"administrative.neighborhood","elementType":"geometry.fill","stylers":[{"color":"#ff0000"},{"visibility":"on"}]},{"featureType":"administrative.neighborhood","elementType":"labels.text.fill","stylers":[{"color":"#888686"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#e6e6e6"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"poi.business","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi.government","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#d3e6e2"}]},{"featureType":"poi.park","elementType":"geometry.stroke","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"labels.text.fill","stylers":[{"color":"#888686"}]},{"featureType":"poi.park","elementType":"labels.icon","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.text","stylers":[{"visibility":"on"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#fcfcfc"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"transit.station.airport","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#aed1ca"}]}]
                    });

                    var image = 'http://on-comunicazione.it/web/wp-content/themes/orion2/img/pin.png';
                    var beachMarker = new google.maps.Marker({
                      position: {lat: 45.4746645, lng: 9.2211635},
                      map: map,
                      icon: image
                    });
                  }
                </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAr1aYA_D95N6k_w-cVAhXoYIJs0lGM9ac&callback=initMap"
      async defer></script>

























				</div>

</div>


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

<?php get_footer(); ?>
