<?php get_header(); ?>


<div class="container-fluid visible-md-block visible-lg-block about-us">
	<div class="row">
		<div class="our-objects">
			<h2 class="about-us-h2">Примеры некоторых наших объектов за сезон 2016г.</h2>

			<?php $query_obj_gal = new WP_Query(array (	'category_name' => 'obj_gal')); ?>			
			<?php if ($query_obj_gal->have_posts()) : while (		
				$query_obj_gal->have_posts()) : $query_obj_gal->the_post()?>
				
				<h3 class="bold"><?php the_title(); ?></h3>  
		        <?php the_content(); ?>     
				
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<div class="container-fluid visible-xs-block visible-sm-block about-us">
	<div class="row">
		<div class="our-objects-mob">
			<h3 class="h-mob">Примеры некоторых наших объектов за сезон 2016г.</h3>

			<?php $query_obj_gal_mob = new WP_Query(array (	'category_name' => 'obj_gal_mob')); ?>			
			<?php if ($query_obj_gal_mob->have_posts()) : while (		
				$query_obj_gal_mob->have_posts()) : $query_obj_gal_mob->the_post()?>
				
				<h5 class="bold"><?php the_title(); ?></h5>  
		        <?php the_content(); ?>     
				
			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>