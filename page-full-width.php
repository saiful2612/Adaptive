<?php

/*
   Template Name: Full Width Page  
 */


?>

<?php get_header();?>

<div class="container">
	
		<div class="row">
		
			<div class="span12 article-container-fix">
				
				<div class="articles">

                    <?php if(have_posts()): while(have_posts()):the_post();?>
				
					<article class="clearfix">
						
						<header>
                    
                            <h1><?php the_title();?></h1>
                            <?php if(current_user_can('edit_post', $post->ID)){
                                edit_post_link(__('Edit this', 'adaptive-framework'),'<p class="article-meta-extra">','</p>');   
                            }?>
							
						</header>

                        <hr class="image-replacement"/> 
						
						
                        <?php the_content();?>
							
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
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer();?>