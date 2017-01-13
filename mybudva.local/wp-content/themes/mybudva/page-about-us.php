<?php get_header(); ?>

<div class="container-fluid visible-md-block visible-lg-block about-us">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="about-us-post">
				<h2 class="about-us-h2">О нас</h2>
				<?php $query_about_us = new WP_Query(array (
				'category_name' => 'about-us')); ?>
				<?php if ($query_about_us->have_posts()) : while (
				$query_about_us->have_posts()) : $query_about_us->the_post(); ?>
					<?php the_post_thumbnail(); ?>
			        <?php the_content(); ?>
				        <br><br>              
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
        </div>
    </div>
</div>

<div class="container-fluid visible-xs-block visible-sm-block about-us">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="about-us-post-mob">
				<h2 class="h-mob">О нас</h2>
				<?php $query_about_us = new WP_Query(array (
				'category_name' => 'about-us')); ?>
				<?php if ($query_about_us->have_posts()) : while (
				$query_about_us->have_posts()) : $query_about_us->the_post(); ?>
				    <?php the_content(); ?>
			        <br><br>              
				<?php endwhile; ?>
				<?php endif; ?>
			</div>
        </div>
    </div>
</div>

<?php get_footer(); ?>