<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="input-group">
		<input type="text" name="s" id="s" value="<?php echo get_search_query(); ?>" class="" placeholder="Search..."/>	
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
		</span>
	</div>
</form>