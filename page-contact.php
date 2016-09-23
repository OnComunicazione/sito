
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
              <script src="https://maps.googleapis.com/maps/api/js"
         async defer></script>
              
           
          </div><!-- end map -->
            </div>
             


			

























				</div>

</div>	


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

<?php get_footer(); ?>
