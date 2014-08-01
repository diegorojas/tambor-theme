
<?php get_header(); ?>

<div id="content">
	
	<!-- <h2 class="pagetitle"><?php echo $latcat->name; ?></h2> -->
	<?php if (have_posts()) : ?>
    
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    
	<div class="postgroup">
	
					<?php while (have_posts()) : the_post(); ?>
				
			
				<div <?php post_class(); ?>>
			
					<div class="post-meta clearfix">
				
						<h3 class="post-title left"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						
						
                        <span class="undertitle-f">By <b><?php the_author_posts_link(); ?></b> posted in <b><?php the_category(', ') ?></b> on <?php the_time('F j, Y') ?></span>
						
					</div><!-- End post-meta -->
					
					<div class="post-box">
					
						<div class="post-content">
					
							
							
							<?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
                            <div class="comment-counter">
								<?php comments_popup_link(__( '0 Comments' ), __( '1 Comment' ), __( '% Comments' )); ?>
							</div>
							
							<div class="post-image">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_post_meta( $post->ID, "image_value", true ); ?>&amp;w=521&amp;h=246&amp;zc=1;q=100" alt="<?php the_title(); ?>" /></a>
							</div>
                            
                            <?php else: ?>
                            
                            
                            <div class="comment-counter">
								<?php comments_popup_link(__( '0 Comments' ), __( '1 Comment' ), __( '% Comments' )); ?>
							</div>
							
							<div class="post-image-non">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/post-image-default.jpg" alt="<?php the_title(); ?>" /></a>
							</div>
							
							<?php endif; ?>
							
							<div class="post-excerpt">
							
								<?php the_excerpt('Read the rest of this entry &raquo;'); ?>
								
							</div><!-- End post-excerpt -->
							
						</div><!-- End post-content -->
						
						<div class="post-foot clearfix">
							<div class="tags-menu">
                            	<div class="category clearfix">
									<?php the_tags('<div class="postmetatags"><span>Tags:</span> ', ', ', '</div>'); ?>
                                    
								</div>
                            </div>
							
							<div class="read-more">
								<a href="<?php the_permalink() ?>#more-<?php the_ID(); ?>" rel="bookmark" title="Continue Reading <?php the_title_attribute(); ?>">Continue Reading</a>
							</div>
                            
													
						</div><!-- End post-foot -->
					
					</div><!-- End post-box -->
					
				</div><!-- End post -->
				
				<?php endwhile; ?>
                
                <div class="navigation">
                	<div class="navig-bg">
                    	<div class="navig-bg-btm">
                            <div class="navig-pages">
                            	<!--<?php posts_nav_link(); ?>-->
                            	<div style="float:right; padding-right:20px;"><span class="prev"><?php next_posts_link('Previous') ?></span></div>
                                
                                <div style="float:left; padding-left:10px;"><span class="next"><?php previous_posts_link('Next') ?></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <?php else : ?>

                <div class="postgroup">
                <div class="post">
                    <div class="top"></div>
                    <div class="mid">
                    <div class="title">
                        <h3 class="post-title left">Nothing Found</h3>
                    </div>
                    <div class="entry">
                        <p>Sorry, but what you are looking for isn't here. Try a new search.</p>
                    </div>
                    </div>
                    <div class="bot"></div>
                </div>
                </div>
                
                <?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
