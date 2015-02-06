<?php get_header(); ?>
<div class="container">
	<div class="row">
		<?php if ( have_posts() ) : while( have_posts() ) : the_post() ?>
		<div class="col-md-8 col-lg-8 col-sm-12">
			<div class="cat-info">
				<h3>Search Results for :  <i><?php the_search_query(); ?></i> </h3>
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
		<?php endwhile; ?>
		<?php else: ?>
			<div class="cat-info">
				<figure>
					<img src="<?php echo get_stylesheet_directory_uri() ?>/images/1a2f4cafccdf032ec46a31896aee4944.jpg" class="pull-left" draggable="false"/>
				</figure>
					
						<h1><a href="https://twitter.com/hashtag/bugsbunny">#BugsBunny</a></h1>
					<h2>Oops! Sorry doc , ain't nothing around here with that name.<br/>Better place a tag on it.<br/>
						I'll let <a href="http://en.wikipedia.org/wiki/Elmer_Fudd">Elmer</a> know that you're searching for this.<br/> You'll find it in , probably never.
					</h2>
			</div>
		<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>