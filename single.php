<?php get_header();?>

<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="articles">

                    <?php if(have_posts()): while(have_posts()):the_post();?>
				
					<article class="clearfix">
						
						<header>
							
                            <?php
                                
                                if(comments_open() && !post_password_required()){
                                    comments_popup_link('0','1','%','article-meta-comments');
                                }
                            ?>
                    
                            <p class="article-meta-categories"><?php the_category('&nbsp;/&nbsp;');?></p>
                    
                            <h1>
                                <?php the_title();?>
                            </h1>
                    
                            <p class="article-meta-extra">
                                <?php the_date(get_option('date_format'));?> at <?php the_time(get_option('time_format'));?> by <?php the_author_posts_link();?>
                            </p>
							
						</header>
						
                        <?php if(has_post_thumbnail()) :?>
						<figure class="article-full-image">
							<?php the_post_thumbnail();?>
						</figure>

                        <?php else: ?>

                            <hr />

                        <?php endif;?>
						
                        <?php the_content();?>

                        <?php if(has_tag()):?>
						
						    <p class="tag-container"><?php the_tags();?></p>

                        <?php endif;?>
							
						<div>

                            <?php $args=array(
                                'before' => '<p class="post-navigation">',
                                'after' => '</p>',
                                'pagelink' => 'Page %'
                            ); 
                            
                            
                            ?>
							
                            <?php wp_link_pages($args);?>
							
							
						</div> <!-- end post-navigation -->
						
					</article>

					<div class="article-author">
						
						<h5>Article by <?php the_author_posts_link();?></h5>
                        <?php the_author_meta('description');?>
						
					</div> <!-- end article-author -->

                    <?php endwhile; else:?>

                    <article>
                        <h1><?php _e('No posts were found','adaptive-framework');?></h1>
                    </article>

                    <?php endif; ?>
					
				</div> <!-- end articles -->
				
				<div class="comments-area" id="comments">
					
                    <?php comments_template('',true);?>
					
				</div> <!-- end comments-area -->
				
			</div> <!-- end span9 -->
			
			<aside class="span3 main-sidebar">
				
                <?php get_sidebar();?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer();?>