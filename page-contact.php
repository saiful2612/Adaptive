<?php

/*
   Template Name: Contact Page  
*/


?>

<?php

$error_name='';
$error_email='';
$error_message='';

if(isset($_POST['contact-submit'])){
    $name='';
    $email='';
    $website='';
    $message='';
    $receiver_email='';

    if(trim($_POST['contact-author'])===''){
        $error_name=true;
    } else{
        $name =trim($_POST['contact-author']);
    }

    if(trim($_POST['contact-email'])===''){
        $error_email=true;
    } else{
        $email =trim($_POST['contact-email']);
    }


    $website =trim($_POST['contact-url']);

    if(trim($_POST['contact-message'])===''){
        $error_message=true;
    } else{
        $message = stripslashes(trim($_POST['contact-message'])); 
    }

    if( !$error_name && !$error_email &&  !$error_message){
        $receiver_email='saiful.riyaz@gmail.com';

        $subject= 'You have been contacted by '.$name;
        $body= "You have been contacted by $name.Their message is :". PHP_EOL .PHP_EOL;
        $body .= $message . PHP_EOL . PHP_EOL;
        $body .= "You can contact $name via email at $email";

        if($website != ''){
            $body .= "and visit their website at $website";
        }

        $body .=  PHP_EOL . PHP_EOL ;

        $headers= "From $emmail" . PHP_EOL;
        $headers .= "Reply-to $email" . PHP_EOL;
        $headers .= "Mime-version: 1.0";
        $headers .= "Content-type: text/plain, charset=utf-8" . PHP_EOL;
        $headers .= "Content-tranfer-encoding: quoted-printibale" . PHP_EOL;
        
        if(mail($receiver_email, $subject, $body, $headers)){
            $email_sent=true;
        }else{
            $email_sent_error=true;
        }

    }

}

?>

<?php get_header();?>

<div class="container">
	
		<div class="row">
		
			<div class="span9 article-container-fix">
				
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
							
                        <hr/>
						
                        <form action="<?php the_permalink();?>" method="post" id="contact-form">
							<p>
								<input type="text" value="" name="contact-author" id="contact-author" />
								<label for="contact-author">Name *</label>
							</p>
							<p>
								<input type="email" value="" name="contact-email" id="contact-email" />
								<label for="contact-email">Email *</label>
							</p>
							<p>
								<input type="text" value="" name="contact-url" id="contact-url" />
								<label for="url">Website</label>
							</p>
							<p>
								<textarea name="contact-message" id="contact-message" cols="30" rows="10"></textarea>
							</p>

                            <input type="hidden" name="contact-submit" id="contact-submit" value="true" >
							
							<p><input type="submit" value="Send Message" /></p>

						</form>

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
			
			<aside class="span3 main-sidebar">
				
                <?php get_sidebar();?>

			</aside>
			
		</div> <!-- end row -->
		
	</div> <!-- end container -->

<?php get_footer();?>