<?php
get_header();
?>
<main class="main">
	<div class="wrap">


		<?php
		while ( have_posts() ) : the_post();

			the_title( '<h1>', '</h1>' );
			the_post_thumbnail( 'thumbnail' );
			the_content();

		endwhile; // End of the loop.
		?>


	</div>
</main>
<?php
get_footer();






