<?php get_header();?>

<div class="container">
	
    <div class="row">
    
        <div class="span9 article-container-fix">
            
            <div class="articles">

                <?php if(have_posts()): while(have_posts()):the_post();?>

                    <?php get_template_part('content', get_post_format());?>
                   
                    

                <?php endwhile; else: ?>

                    <h1><?php _e('No posts were found','adaptive-framework');?></h1>

                <?php endif;?>    
                
                <div class="articles-nav clearfix">
                    
                    <p class="articles-nav-prev">
                        <?php next_posts_link(__('&larr; Older Posts','adaptive-framework'));?>
                    </p>

                    <p class="articles-nav-next">
                        <?php previous_posts_link(__('Newer Posts &rarr;','adaptive-framework'));?>
                    </p>
                    
                </div> <!-- end articles-nav -->
                
            </div> <!-- end articles -->
            
        </div> <!-- end span9 -->
        
        <aside class="span3 main-sidebar">
            
            <?php get_sidebar();?>

        </aside>
        
    </div> <!-- end row -->
    
</div> <!-- end container -->


<?php get_footer();?>