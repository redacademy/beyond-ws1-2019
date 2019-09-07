<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package Beyond The Conversation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			
			// echo var_dump($loop);
			// if ($loop !== "" && $row !== "") {
				$loop = CFS()->get( 'member' );
				foreach ( $loop as $row ) {
					echo '<img src="'.$row["photo"].'"/>';
					echo $row['name'];
					echo $row['role'];
					echo $row['quote'];
				}	
			// }
			
		?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
