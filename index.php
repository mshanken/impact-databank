<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MSSTheme2
 */

get_header();
?>

	<section class="row mt-3" aria-label="header">
		<div class="col">
		<?php
		if ( have_posts() ) :	
		?>
			<?php
			

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_content();
			endwhile;

			// the_posts_navigation();
		endif;
		?>
		</div><!-- #main -->
	</section><!-- #primary -->
	<section class="row section-footer" aria-label="footer">
        <div class="col py-3">
            <p class="text-center m-0">
            <a href="https://winespectator.wufoo.com/forms/shankens-impact-databank-2024-order-form/" target="_blank">Order Today at ImpactDatabank.com</a>
            <br>For questions, email <a href="mailto:impact@mshanken.com" target="_blank">impact@mshanken.com</a>
            </p>
        </div>
    </section>
<?php
// get_sidebar();
get_footer();
