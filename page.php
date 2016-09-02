<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

<section>
<h1>
	<?php the_title(); ?>
</h1>

<p>
<?php the_content(); ?>
</p>

<span class="entry-date"><?php echo get_the_date(); ?></span>
</section>


<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>

