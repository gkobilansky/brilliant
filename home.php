<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package brilliant
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
		
			<?php while ( have_posts() ) : the_post(); ?>
					<div class="featured">
					<a name="<?php the_title(); ?>"></a>
				<?php the_title( sprintf( '<h1 class="entry-title" ><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),'</a></h1>' );    ?>
				<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail(); ?>
	</a>
<div>
	<a class="arrow-wrap" href="#content">
<span class="arrow"></span>
<!--<span class="hint">scroll</span>-->
</a>
</div>

<?php endif; ?>
			</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
