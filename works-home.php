 <?php get_header(); ?>

<?php 

$args1 = array(
	'page_id' => '44'
);

$the_query1 = new WP_Query( $args1 );
if($the_query1->have_posts()) : while($the_query1->have_posts()) : $the_query1->the_post(); 
$box1 = get_field('feature_box1');
$box2 = get_field('feature_box2');
$box3 = get_field('feature_box3');

$image1 = wp_get_attachment_image_src( get_post_thumbnail_id( $box1 -> ID ), 'full');
$image2 = wp_get_attachment_image_src( get_post_thumbnail_id( $box2 -> ID ), 'full');
$image3 = wp_get_attachment_image_src( get_post_thumbnail_id( $box3 -> ID), 'full');

$title1 = get_the_title($box1 -> ID);
$title2 = get_the_title($box2 -> ID);
$title3 = get_the_title($box3 -> ID);

$categories1 = get_the_category($box1 -> ID);
$category1 = $categories1[0] -> name;

$categories2 = get_the_category($box2 -> ID);
$category2 = $categories2[0] -> name;

$categories3 = get_the_category($box3 -> ID);
$category3 = $categories3[0] -> name;


endwhile;
endif;


?>




 
    <div class="container-fluid">
    
    	<div class="row">
        	<div class="col-sm-12">
            	<div class="col-xs-12 col-sm-4 project-box" style="background-image:url('<?php echo $image1[0]; ?>');">
                	<div class="labels">
                    	<div class="triangle-up"></div>
                        <svg class="power" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="377.043px" height="377.043px" viewBox="0 0 377.043 377.043" style="enable-background:new 0 0 377.043 377.043;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M337.771,103.538c-14.648-22.722-34.645-42.102-57.818-56.046c-4.334-2.607-9.736-2.682-14.141-0.191
			c-4.402,2.49-7.127,7.157-7.127,12.216v29.031c0,4.379,2.045,8.508,5.529,11.162c31.094,23.686,49.654,61.019,49.654,99.866
			c0,69.115-56.23,125.345-125.346,125.345c-69.116,0-125.346-56.229-125.346-125.345c0-38.848,18.562-76.181,49.654-99.866
			c3.483-2.654,5.529-6.783,5.529-11.162V59.517c0-5.059-2.724-9.726-7.126-12.216c-4.405-2.49-9.808-2.416-14.142,0.191
			c-23.176,13.944-43.169,33.324-57.819,56.046c-18.46,28.63-28.218,61.838-28.218,96.038c0,47.402,18.46,91.969,51.979,125.488
			c33.521,33.52,78.086,51.979,125.488,51.979c47.402,0,91.968-18.459,125.488-51.979c33.518-33.52,51.979-78.086,51.979-125.488
			C365.99,165.376,356.232,132.167,337.771,103.538z"/>
		<path d="M172.129,215.535h32.789c7.257,0,13.16-5.905,13.16-13.162V13.162c0-7.257-5.903-13.162-13.16-13.162h-32.789
			c-7.257,0-13.161,5.904-13.161,13.162v189.211C158.968,209.63,164.873,215.535,172.129,215.535z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    	<p class="green"><?php echo $category1; ?></p>
                    	<h1><?php echo $title1; ?></h1>  
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 project-box" style="background-image:url('<?php echo $image2[0]; ?>')">
                	<div class="labels">
                    <div class="triangle-up"></div>
                    <svg class="power" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="377.043px" height="377.043px" viewBox="0 0 377.043 377.043" style="enable-background:new 0 0 377.043 377.043;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M337.771,103.538c-14.648-22.722-34.645-42.102-57.818-56.046c-4.334-2.607-9.736-2.682-14.141-0.191
			c-4.402,2.49-7.127,7.157-7.127,12.216v29.031c0,4.379,2.045,8.508,5.529,11.162c31.094,23.686,49.654,61.019,49.654,99.866
			c0,69.115-56.23,125.345-125.346,125.345c-69.116,0-125.346-56.229-125.346-125.345c0-38.848,18.562-76.181,49.654-99.866
			c3.483-2.654,5.529-6.783,5.529-11.162V59.517c0-5.059-2.724-9.726-7.126-12.216c-4.405-2.49-9.808-2.416-14.142,0.191
			c-23.176,13.944-43.169,33.324-57.819,56.046c-18.46,28.63-28.218,61.838-28.218,96.038c0,47.402,18.46,91.969,51.979,125.488
			c33.521,33.52,78.086,51.979,125.488,51.979c47.402,0,91.968-18.459,125.488-51.979c33.518-33.52,51.979-78.086,51.979-125.488
			C365.99,165.376,356.232,132.167,337.771,103.538z"/>
		<path d="M172.129,215.535h32.789c7.257,0,13.16-5.905,13.16-13.162V13.162c0-7.257-5.903-13.162-13.16-13.162h-32.789
			c-7.257,0-13.161,5.904-13.161,13.162v189.211C158.968,209.63,164.873,215.535,172.129,215.535z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    	<p class="green"><?php echo $category2; ?></p>
                    	<h1><?php echo $title2; ?></h1>  
                    </div>
                </div>



                
                <div class="col-xs-12 col-sm-4 project-box" style="background-image:url('<?php echo $image3[0]; ?>');">
                	<div class="labels">
                    <div class="triangle-up"></div>
                    <svg class="power" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="377.043px" height="377.043px" viewBox="0 0 377.043 377.043" style="enable-background:new 0 0 377.043 377.043;"
	 xml:space="preserve">
<g>
	<g>
		<path d="M337.771,103.538c-14.648-22.722-34.645-42.102-57.818-56.046c-4.334-2.607-9.736-2.682-14.141-0.191
			c-4.402,2.49-7.127,7.157-7.127,12.216v29.031c0,4.379,2.045,8.508,5.529,11.162c31.094,23.686,49.654,61.019,49.654,99.866
			c0,69.115-56.23,125.345-125.346,125.345c-69.116,0-125.346-56.229-125.346-125.345c0-38.848,18.562-76.181,49.654-99.866
			c3.483-2.654,5.529-6.783,5.529-11.162V59.517c0-5.059-2.724-9.726-7.126-12.216c-4.405-2.49-9.808-2.416-14.142,0.191
			c-23.176,13.944-43.169,33.324-57.819,56.046c-18.46,28.63-28.218,61.838-28.218,96.038c0,47.402,18.46,91.969,51.979,125.488
			c33.521,33.52,78.086,51.979,125.488,51.979c47.402,0,91.968-18.459,125.488-51.979c33.518-33.52,51.979-78.086,51.979-125.488
			C365.99,165.376,356.232,132.167,337.771,103.538z"/>
		<path d="M172.129,215.535h32.789c7.257,0,13.16-5.905,13.16-13.162V13.162c0-7.257-5.903-13.162-13.16-13.162h-32.789
			c-7.257,0-13.161,5.904-13.161,13.162v189.211C158.968,209.63,164.873,215.535,172.129,215.535z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                    	<p class="green"><?php echo $category3; ?></p>
                    	<h1><?php echo $title3; ?></h1>  
                    </div>
                </div>
            </div>
        </div>
    
    </div>


			
