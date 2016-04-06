<?php /* Template Name: guruPage */ ?>
<?php

 
global $post;
if(is_front_page()){
	$post_id = get_option('page_on_front');
}else{
	$post_id = $post->ID;
}
$post_class = get_post_meta( $post_id, 'accesspress_ray_sidebar_layout', true );
?>

<div class="ak-container">

<div class="inner-pages-wrapper clearfix">

<?php 
	if ($post_class=='both-sidebar') { ?>
		<div id="primary-wrap" class="clearfix"> 
	<?php }
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<div id="paraGuru">
				<?php
				$catquery = new WP_Query( 'cat=6&posts_per_page=10' );
					while($catquery->have_posts()) : $catquery->the_post();
					?>
						<div class="guru">
						<div class="identitasGuru">
							<?php the_post_thumbnail(); ?>
							</br>
							<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						</div>
						<div class="detailGuru">
							<?php the_content(); ?>
						</div>
					</div>	
														

			<?php endwhile; // end of the loop. ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_sidebar('left'); 

	if ($post_class=='both-sidebar') { ?>
		</div> 
	<?php }

get_sidebar('right'); ?>
</div>
</div>
<?php get_footer(); ?>