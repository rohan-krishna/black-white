<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-ld-8 col-sm-12">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
			<div class="single-title">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="thumbnail-wrapper hidden-xs">
			 <?php if ( has_post_thumbnail() )  ?>
			 <figure class="post-thumbnail"><?php the_post_thumbnail('single-post', array('draggable' => 'false'))  ?></figure>
			</div>
			<div class="row">
				<div class="col-md-12 col-lg-12 hidden-xs">
					<div class="single-meta">
						<i class="fa fa-clock-o"> </i> <?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?> &nbsp;
						<i class="fa fa-user"></i> <?php echo the_author_link(); ?>
						<i class="fa fa-comments"></i> <?php comments_number( '0 comments', 'one response', '% responses' ); ?> &nbsp;
						<i class="fa fa-archive"></i> <?php the_category(' '); ?>
					</div>
				</div>
			</div>
			<div class="divider hidden-xs"></div>
			<div class="single-post-entry">
				<?php the_content(); ?>
			</div>
			<div class="divider"></div>

			<div class="single-author-card">
				<div class="col-md-2">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 64 ); ?>
				</div>
				<div class="col-md-6">
					<h3><?php the_author(); ?></h3>
					<p><?php the_author_meta('description') ;?></p>
				</div>
			</div>

			<div class="divider"></div>
			<!-- Comment Form !-->
			<?php comment_form(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
</div>
<?php get_footer(); ?>