
    
<?php

$args = array(
    'page_id' => '24'
);
$the_query = new WP_Query( $args );
if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>



        <div class="container">

            <div class="row">

                    <div class="col-sm-6 text-center topfoot">
                        <p><i class="fa fa-phone"></i> <?php the_field('telefono'); ?></p>
                        <p><i class="fa fa-fax"></i> <?php the_field('fax'); ?></p>
                    </div>
                    <div class="col-sm-6 text-center topfoot">
                    <p><i class="fa fa-map-marker"></i> <?php the_field('indirizzo'); ?></p>
                    <p><i class="fa fa-envelope"></i> <?php the_field('mail'); ?></p>
                    </div>

             </div>

      <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>