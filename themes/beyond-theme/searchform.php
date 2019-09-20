<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="fieldset">
		<label id="s-toggle" class="search-toggle" onblur="classBlur()">
			<!-- <span class="toggle"><input type="search" class="the-search-form" placeholder="Search ..." value="<?php /* echo esc_attr( get_search_query() ); */ ?>" name="s" title="Search for:" required/></span> -->
			<a class="icon-search-home"><i class="fa fa-search"></i></a>
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>