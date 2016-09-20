<?php get_header(); ?>
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


				<?php the_content(); ?>
			

				</div>

</div>	


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

<?php get_footer(); ?>
