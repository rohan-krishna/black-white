<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-lg-8 col-sm-12">
			<div class="cat-info">
				<h2><?php single_cat_title();?></h2>
				<?php echo category_description() ?>
			</div>
			<article class="post-wrapper">
				<figure>
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
						}
					?>
				</figure>
		<header>
			<a href="<?php the_permalink(); ?>" rel="bookmark" ><h1 class="hint--right" data-hint="Read <?php echo the_title(); ?>"><?php the_title(); ?></h1></a>
			<p>
				 <i class="fa fa-comments"></i> <?php comments_number( '0 comments', 'one response', '% responses' ); ?> <i class="fa fa-archive"></i> <small><?php the_category(' '); ?></small>
			</p>
		</header>
		<section>
			<?php the_excerpt(); ?>
		</section>
		<a href="<?php echo the_permalink(); ?>" class="hint--top" data-hint="Read <?php echo the_title(); ?>">
			<button class="btn btn-success">Read More</button>
		</a>
	</article>
		</div>
	</div>
</div>
<?php get_footer(); ?>