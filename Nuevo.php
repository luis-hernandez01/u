<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package andreco
 */

get_header(); ?>

<section class="main">
	<?php get_template_part('breadcrumb'); ?>
	
	<div class="page-general py-3">
		<div class="container">
			<div class="row">
				<?php get_template_part('menu-lateral'); ?>
				
				<div class="col-12 col-lg-8 col-xl-9 screen-view">
					<div class="title-content mt-0 py-3 mb-4">
						<h1 class="title-page m-0 font-green fz-36"><?php the_archive_title(); ?></h1>
					</div>
					<?php if(the_archive_description()) { ?>
					<div class="general-text pl-lg-4"><?php the_archive_description(); ?></div>
					<?php }
					
					if(have_posts()) : ?>
					
					<div class="row">
						<?php while ( have_posts() ) : the_post();

						get_template_part('template-parts/content', get_post_format());

						endwhile; ?>
					</div>
					
					<?php the_posts_navigation();

					else : ?>
					<div class="general-text mb-4">No hay resultados para esta categoría.</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>	
</section>

<?php get_footer(); ?>