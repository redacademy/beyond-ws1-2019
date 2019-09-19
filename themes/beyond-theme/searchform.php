<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset class="fieldset">
		<label id="s-toggle" class="search-toggle" onblur="classBlur()">
			<a class="icon-search"><i class="fa fa-search"></i></a>
		<span class="toggle"><input type="search" class="the-search-form" placeholder="TYPE AND HIT ENTER ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" required/></span>
		</label>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
	</fieldset>
</form>