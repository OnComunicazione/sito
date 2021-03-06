<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();
$categories = get_the_category($post->ID);
$currentCategory = $categories[0] -> name;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');
$immagine1 = get_field('immagine1');
$immagine2 = get_field('immagine2');
$immagine3 = get_field('immagine3');
$immagine4 = get_field('immagine4');
?>


<div class="container-fluid">

<!--MAIN WORK  -->

	<div class="row">
			<div class="col-sm-12">
					<div class="col-xs-12 col-sm-12 main-project-box" style="background-image:url('<?php echo $image[0]; ?>');"></div>
						<a href="<?php echo $immagine1['url'];?>" rel="lightbox" data-lightbox="roadtrip" data-title="Ip - Sei Self? Sei Servito? - Campagna integrata"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo $immagine1['url'];?>"></div></a>
						<a href="<?php echo $immagine2['url'];?>" rel="lightbox" data-lightbox="roadtrip" data-title="Trova Peppa! - ADVERGAME"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo $immagine2['url'];?>');"></div></a>
						<a href="<?php echo $immagine3['url'];?>" rel="lightbox" data-lightbox="roadtrip"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo $immagine3['url'];?>"></div></a>
						<a href="<?php echo $immagine4['url'];?>" rel="lightbox" data-lightbox="roadtrip"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo $immagine4['url'];?>');"></div></a>
				</div>
		</div>

</div>

<div class="container">

		<div class="col-sm-12 descrproject mt50">

				<h2 class="green"><?php echo $currentCategory; ?></h2>
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?> </p>

	<div class="col-sm-12 text-center mt50">

						<div style="margin:auto; display:inline-block;">
								<div class="service" style="background-image:url('img/service/atl.png');"></div>
								<div class="service" style="background-image:url('img/service/directmarketing.png');"></div>
								<div class="service" style="background-image:url('img/service/video.png');"></div>
						</div>

				</div>

				</div>

				<div class="mt50"></div>


			<?php endwhile; else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

<?php get_footer(); ?>
