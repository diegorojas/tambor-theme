<div id="sidebar">

	<!-- <div id="box-newsletter" class="box">
		<div class="top"></div>
		<div class="mid">
			<h2>Subscribe To RSS</h2>
			<div class="interior">
				<p>Sign up to receive latest news</p>
				<form id="subscribe" action="http://www.feedburner.com/fb/a/emailverify" method="post" target="popupwindow" onsubmit="window.open('http://www.feedburner.com', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
					<span><input type="text" value="Email address" onfocus="if (this.value == 'Email address') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Email address';}" name="email" /></span>
					<input type="hidden" value="http://feeds.feedburner.com/~e?ffid=<?php $feedburner_id = get_option('Designora-theme_feedburner_id'); echo $feedburner_id; ?>" name="url" />
					<input type="hidden" value="News Subscribe" name="title" />
				</form>
			</div>
		</div>
		<div class="bot"></div>
	</div> -->

	<!-- <div class="box box-adverts">
		<div class="top"></div>
		<div class="mid">
			<h2>Sponsors</h2>
			<div class="interior">
				<div>
					<?php
						$sqbtn_1_img = get_option('Designora-theme_sqbtn_1_img_url');
						$sqbtn_1_url = get_option('Designora-theme_sqbtn_1_web_url');
						$sqbtn_2_img = get_option('Designora-theme_sqbtn_2_img_url');
						$sqbtn_2_url = get_option('Designora-theme_sqbtn_2_web_url');
					?>
					<a class="ads1" href="<?php echo (!empty($sqbtn_1_url)) ? $sqbtn_1_url : '#'; ?>"><img alt="Advertisement" src="<?php echo (!empty($sqbtn_1_img)) ? $sqbtn_1_img : get_bloginfo('template_url') . '/images/your-ads-125x125.jpg'; ?>" /></a>
						<a class="ads2" href="<?php echo (!empty($sqbtn_2_url)) ? $sqbtn_2_url : '#'; ?>"><img alt="Advertisement" src="<?php echo (!empty($sqbtn_2_img)) ? $sqbtn_2_img : get_bloginfo('template_url') . '/images/your-ads-125x125.jpg'; ?>" /></a>
				</div>
				<div>
					<?php
						$sqbtn_3_img = get_option('Designora-theme_sqbtn_3_img_url');
						$sqbtn_3_url = get_option('Designora-theme_sqbtn_3_web_url');
						$sqbtn_4_img = get_option('Designora-theme_sqbtn_4_img_url');
						$sqbtn_4_url = get_option('Designora-theme_sqbtn_4_web_url');
					?>
					<a class="ads3" href="<?php echo (!empty($sqbtn_3_url)) ? $sqbtn_3_url : '#'; ?>"><img alt="Advertisement" src="<?php echo (!empty($sqbtn_3_img)) ? $sqbtn_3_img : get_bloginfo('template_url') . '/images/your-ads-125x125.jpg'; ?>" /></a>
					<a class="ads4" href="<?php echo (!empty($sqbtn_4_url)) ? $sqbtn_4_url : '#'; ?>"><img alt="Advertisement" src="<?php echo (!empty($sqbtn_4_img)) ? $sqbtn_4_img : get_bloginfo('template_url') . '/images/your-ads-125x125.jpg'; ?>" /></a>
				</div>
			</div>
		</div>
		<div class="bot"></div>
	</div> -->
    
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Side Bar') ) : ?>

	<?php endif; ?>
    
    <!-- <div class="box box-featured-news">
        <div class="top"></div>
            <div class="mid">  
            <h2><span>Popular Posts</span></h2>
                <div class="interior">
                    <ul>
                        
                        <?php $result = $wpdb->get_results("SELECT comment_count,ID,post_title FROM $wpdb->posts ORDER BY comment_count DESC LIMIT 0 , 5");
                                    foreach ($result as $post) {
                                    setup_postdata($post);
                                    $postid = $post->ID;
                                    $title = $post->post_title;
                                    $commentcount = $post->comment_count;
                                    if ($commentcount != 0) { ?>
                    
                        <li class="clearfix">
                            <?php if( get_post_meta( $post->ID, "image_value", true ) ) : ?>
                                        
                                <div class="sidebar-preview">
                                    
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/timthumb.php?src=<?php echo get_post_meta( $post->ID, "image_value", true ); ?>&amp;w=25&amp;h=25&amp;zc=1" alt="<?php the_title(); ?>" />
                                    
                                </div>
                             <?php else: ?>
                                <div class="sidebar-preview">
                                        <img src="<?php bloginfo( 'template_directory' ); ?>/images/post-default.jpg" alt="<?php the_title(); ?>" />
                                </div>
                                        
                            <?php endif; ?>
                            <div class="sidebar-content">
                                <a href="<?php echo get_permalink($postid); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php echo $title ?></a>
                                
                            </div>
                        </li>
                        
                        <?php } } ?>
                        
                    </ul>
                </div>
            </div>
        <div class="bot"></div>
    </div> -->
    
	<!-- <div id="box-tabs" class="box box-tabs">
		<div class="top"></div>
		<div class="mid">
			<h2>Interesting Topics</h2>
			<div class="interior">
				<ul class="tabs">
					<li class="blr"><a href="#tab-blr">Blogroll</a></li>
					<li class="arc"><a href="#tab-arc">Recent</a></li>
					<li class="cat"><a href="#tab-cat">Categories</a></li>
				</ul>
				<div class="tabcontent" id="tab-blr">
					<ul>
                    	<li><span><a href="http://designora.com">Flash Web Design</a></span></li>
						<?php themefunction_list_bookmarks(); ?>
					</ul>
				</div>
				<div class="tabcontent" id="tab-arc">
					<?php themefunction_recentpost(); ?>
				</div>
				<div class="tabcontent" id="tab-cat">
					<ul>
						<?php
							add_filter('wp_list_categories','themefunction_alterlinks');
							wp_list_categories('sort_column=name&optioncount=0&hierarchical=0&title_li=');
							remove_filter('wp_list_categories','themefunction_alterlinks');
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="bot"></div>
	</div> -->

</div>
<div class="clearer"></div>
</div>
<div id="wrapper-clearer"></div>

</div>