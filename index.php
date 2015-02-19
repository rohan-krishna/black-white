<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12 col-lg-8">
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post() ; 
	?>
	<a href="<?php the_permalink(); ?>" rel="bookmarks" title="Read <?php the_title(); ?>">
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
				<i class="fa fa-user"></i> <?php the_author(); ?> <i class="fa fa-clock-o"></i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></i> <i class="fa fa-comments"></i> <?php comments_number( '0 comments', 'one response', '% responses' ); ?> <i class="fa fa-archive"></i> <small><?php the_category(' '); ?></small>
			</p>
		</header>
		<section>
			<?php the_excerpt(); ?>
		</section>
	</article>
	</a>
	<?php endwhile; ?>
	<?php else:  ?>
	<div class="no-posts">
		<h1>Sorry!There're no posts to Display Here!Do check back after some time.</h1>
	</div>
	<?php endif; ?>
	</div>	
	<!-- Row ends !-->
	<?php get_sidebar(); ?>
	</div>
	<!-- Twitter Feed Wrapper !-->
	<div class="row">
		<div class="twitter-feed col-md-8 col-lg-8 hidden-xs">
			<figure class="twitter-logo">
				
			</figure>
		</div>
	</div>
</div>
<?php get_footer(); ?>