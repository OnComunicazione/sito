
 <?php  get_header();?>

<?php

$args2 = array(
	'post_type' => 'post'
);

$the_query1 = new WP_Query( $args2);
if($the_query1->have_posts()) : while($the_query1->have_posts()) : $the_query1->the_post();

?>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php print_r($the_query1);?>





 <?php  get_footer();?>
