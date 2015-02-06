<?php

/*
 General Page Template
*/
 ?>

<?php get_header(); ?>
<div class="container">
	<div class="row">
	 <div class="col-md-8 col-ld-8 col-sm-12">
	 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
	 		<h1 class="text-center"><?php the_title(); ?></h1>
	 		<div class="divider"></div>
	 		<?php the_content(); ?>
	 	<?php endwhile; ?>
	 <?php else: ?>
	 	<div>
	 		<p>Sorry,  there're no posts to display.Add Page information ASAFP!!!!</p>
	 	</div>
	 <?php endif; ?>
	 </div>
	 <?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
