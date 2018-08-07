<?php
get_header();
?>
<main class="main">
	<div class="wrap">


		<?php
			echo "<h1>";
			single_term_title();
			echo "</h1><br>";
			the_archive_description( '<div>', '</div><br>' );

			while ( have_posts() ) : the_post();
				the_title( '<h1><a href="'.get_permalink().'">', '</a></h1>' );
				the_post_thumbnail( 'thumbnail' );
				the_excerpt();
			endwhile;
		?>


	</div>
</main>
<?php
get_footer();
