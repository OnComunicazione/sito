<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post();
$categories = get_the_category();
$currentCategory = $categories[0] -> name;
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full');

?>

<div class="container-fluid">

<!--MAIN WORK  -->

	<div class="row">
			<div class="col-sm-12">
					<div class="col-xs-12 col-sm-12 main-project-box" style="background-image:url('<?php echo $image[0]; ?>');"></div>
						<a href="<?php echo get_bloginfo('template_url'); ?>/img/ip.png" data-lightbox="roadtrip" data-title="Ip - Sei Self? Sei Servito? - Campagna integrata"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo get_bloginfo('template_url'); ?>/img/ip.png');"></div></a>
						<a href="<?php echo get_bloginfo('template_url'); ?>/img/peppapig.png" data-lightbox="roadtrip" data-title="Trova Peppa! - ADVERGAME"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo get_bloginfo('template_url'); ?>/img/peppapig.png');"></div></a>
						<a href="<?php echo get_bloginfo('template_url'); ?>/img/bmw.png" data-lightbox="roadtrip"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo get_bloginfo('template_url'); ?>/img/bmw.png');"></div></a>
						<a href="<?php echo get_bloginfo('template_url'); ?>/img/ip.png" data-lightbox="roadtrip"><div class="col-xs-6 col-sm-3 project-img" style="background-image:url('<?php echo get_bloginfo('template_url'); ?>/img/ip.png');"></div></a>
				</div>
		</div>

</div>

<div class="container">

		<div class="col-sm-12 descrproject mt50">

				<h2 class="green"><?php echo $currentCategory; ?></h2>
				<h1><?php the_title(); ?></h1>
				<p>So I started from scratch. I made another, then another. And by the end of the semester, by like box number five, I had <span class="green">built</span> this thing. You should have seen it. It was insane. I mean, I built it out of Peruvian walnut with inlaid zebrawood. It was fitted with pegs, no screws, I sanded it for days, until it was smooth as glass. Then I rubbed all the wood with tung oil so it was rich and dark. It even smelled good. You know, you put nose in it and breathed in, it was... it was perfect.
What? Come on! Man, you're smart. You made poison out of beans, yo. Look, we got, we got an entire lab right here. Alright? How about you pick some of these chemicals and mix up some rocket fuel? That way you could <span class="green">just send</span> up a signal flare. Or you make some kind of robot to get us help, or a homing device, or build a new battery, or... wait. No. What if we just take some stuff off of the RV and build it into something completely different? You know, like a... Like a dune buggy. That way, we can just dune buggy or... What? Hey? What is it? What? </p>

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
