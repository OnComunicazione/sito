 
<?php 

$args = array(
	'p' => '19'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>


  <div class="container">

        <div class="row">
        	<div class="col-sm-12 text-box">
            	
    		 	<h4><?php the_content(); ?></h4>
				<h2><span class="green"><?php the_title(); ?></span></h2>

        	</div>
        </div>
  </div>      


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	