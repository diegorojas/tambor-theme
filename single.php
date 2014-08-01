<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<div id="post-unico-editar"><p><?php edit_post_link('Editar', '', ''); ?></p></div>
						
                        <span class="undertitle-f">By <b><?php the_author_posts_link(); ?></b> posted in <b><?php the_category(', ') ?></b> on <?php the_time('F j, Y') ?></span>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="post-content">
							<?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
							
							<div class="post-image">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_post_meta( $post->ID, "image_value", true ); ?>&amp;w=521&amp;h=246&amp;zc=1;q=100" alt="<?php the_title(); ?>" /></a>
							</div>
                            
                            
							<?php endif; ?>
							
							<div class="post-excerpt">
							
								<?php the_content( '' ); ?>
								
							</div><!-- End post-excerpt -->
							
						</div><!-- End post-content -->
	</div>
	
    </div>
    
    <div class="social">
                    <h2 id="socialheader">Enjoy the Post?
                        <span>Share this post!</span>
                    </h2>
                    <div class="soc-bookmarks">

                        <a rel="nofollow" title="Digg this!" href="http://www.digg.com/submit?phase=2&url=<?php the_permalink();?>" style="background:url(<?php bloginfo('template_url')?>/images/digg-64x64.png);"></a>

                        <a rel="nofollow" title="Submit to Design Float" href="http://www.designfloat.com/submit.php?url=<?php the_permalink();?>&title=<?php the_title();?>" style="background:url(<?php bloginfo('template_url')?>/images/designfloat-64x64.png);"></a>

                        <a rel="nofollow" title="Share it on StumbleUpon!" href="http://www.stumbleupon.com/submit?url=<?php the_permalink(); ?>&title=<?php the_title(); ?>" style="background:url(<?php bloginfo('template_url')?>/images/stumbleupon-64x64.png);"></a>

                        <a rel="nofollow" title="Share this on del.icio.us" href="http://delicious.com/post?url=<?php the_permalink();?>&title=<?php the_title();?>" style="background:url(<?php bloginfo('template_url')?>/images/delicious-64x64.png);"></a>

                        
                        <?php 
						$twitter_username = get_option('designora-theme_twitter_username');
						if (!empty($twitter_username)) : 
					?>
					<a rel="nofollow" title="RT @<?php echo $twitter_username; ?> <?php the_title(); ?>" href="<?php the_permalink() ?>" class="retweet" style="background:url(<?php bloginfo('template_url')?>/images/twitter-64x64.png); "></a>
					<?php 
						endif; 
					?>

                        <a rel="nofollow" title="Share this on technorati" href="http://technorati.com/faves?sub=addfavbtn&add=<?php the_permalink();?>" style="background:url(<?php bloginfo('template_url')?>/images/technorati-64x64.png);"></a>

                        <a rel="nofollow" title="Share this on Reddit" href="http://reddit.com/submit?url=<?php the_permalink();?>&title=<?php the_title();?>" style="background:url(<?php bloginfo('template_url')?>/images/reddit-64x64.png);"></a>

                        <a rel="nofollow" title="Share this on Facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" style="background:url(<?php bloginfo('template_url')?>/images/facebook-64x64.png);"></a>

                    </div>

                </div>
	
		
	<div class="comments">
		<?php comments_template(); ?>
	</div>
	
	<?php endwhile; else: ?>
	
	<div class="post singlepost">
		<div class="title">
			<h2>No Page Found</h2>
		</div>
		<div class="entry">
			<p>Sorry, but the page you are looking isn't here.</p>
		</div>
	</div>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>