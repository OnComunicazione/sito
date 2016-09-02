<?php get_header(); ?>


<?php 

$args = array(
	'cat' => '1'
);

$the_query = new WP_Query( $args );
if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>

<section>
<h1>
	<a href="<?php the_permalink(); ?>">
	<?php the_title(); ?>
	</a>
</h1>

</section>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>	

<?php get_footer(); ?>