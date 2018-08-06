<?php
/*
Template Name: Home
Template Post Type: page
*/
get_header();
?>
<main class="main">
	<div class="wrap">


		<?php
		while ( have_posts() ) : the_post();

			the_title( '<h1>', '</h1>' );
			the_post_thumbnail( 'thumbnail' );
			
			the_content();

			echo '<br><p>'.get_post_meta( get_the_ID(), 'meta-uno', true ).'</p><br>';
			echo '<p>'.get_post_meta( get_the_ID(), 'meta-dos', true ).'</p><br>';

		endwhile; // End of the loop.
		?>




	</div>
</main>
<?php
get_footer();
