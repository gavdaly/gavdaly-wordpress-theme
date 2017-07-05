
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'twentysixteen' ); ?></span>
		<input type="search" class="search-field" aria-label="search" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'gavdaly' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	 <button type="submit" class="search-submit"><!--<span class="screen-reader-text">--><?php echo _x( 'Search', 'submit button', 'gavdaly' ); ?><!--</span>--></button> 
</form>
