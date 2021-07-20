<?php

/*
   Template Name: Archive Page  
 */


?>


<?php get_header();?>

<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
				<div class="articles">
				
					<article class="clearfix">
						
						<header>
                    
                            <h1><?php the_title();?></h1>
                            <?php if(current_user_can('edit_post', $post->ID)){
                                edit_post_link(__('Edit this', 'adaptive-framework'),'<p class="article-meta-extra">','</p>');   
                            }?>
							
						</header>

                        <hr class="image-replacement"/> 

                        <h4><?php _e('Archives by Month','adaptive-framework');?></h4>

                        <ul>
                            <?php wp_get_archives('type=monthly');?>
                        </ul>

                        <hr/>

                        <h4><?php _e('Archives by Subject','adaptive-framework');?></h4>

                        <ul>
                            <?php wp_list_categories('title_li='); ?>
                        </ul>
					</article>
					
				</div> <!-- end articles -->
				
			</div> <!-- end span9 -->
			
			<aside class="span3 main-sidebar">
				
                <?php get_sidebar();?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer();?>