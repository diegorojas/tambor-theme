<?php
/*
Template Name: Parceiros
*/
?>


<?php get_header(); ?>

<div id="content">

	<div class="postgroup">
	
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="post-content">
							
							<?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
							
							<?php endif; ?>
							
							<div class="post-excerpt">
							
								<?php the_content( '' ); ?>
								
							</div><!-- End post-excerpt -->
							
						</div><!-- End post-content -->
	</div>
	
    </div>	
<?php endwhile; else: ?>
	<div class="postgroup">
	<div class="post">
		<div class="top"></div>
		<div class="mid">
		<div class="title">
			<h3 class="post-title left">Nothing Found</h3>
		</div>
		<div class="entry">
			<p>Sorry, but what you are looking for isn't here.</p>
		</div>
		</div>
		<div class="bot"></div>
	</div>
	</div>
<?php endif; ?>
	</div>
</div>
<?php get_sidebar(parceiros); ?>
<?php get_footer(); ?>