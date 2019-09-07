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
		
	<h2 class="cfs-title"><?php echo CFS()->get( 'title' ); ?></h2>
	<p class="cfs-description"><?php echo CFS()->get( 'description' ); ?></p>
	
		<?php $loop = CFS()->get( 'member' ); ?>
				<?php foreach ( $loop as $row ) { ?> 
					<?php echo '<img class="cfs-photo" src="'.$row["photo"].'"/>'; ?>
					<p class="cfs-name"><?php echo $row['name']; ?></p>
					<p class="cfs-role"><?php echo $row['role']; ?></p>
					<p class="cfs-quote"><?php echo $row['quote']; ?></p>
				<?php }	?>  
	
		<?php the_content(); ?>
		
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
