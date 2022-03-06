<!--投稿ページ-->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>マーキュリーの館</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mystyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

    <body>
	<?php get_header(); ?>
 			<p class="text-center">
 				底辺YouTuber、「ゆずはらマーキュリー」のWebサイトです。
 				<br>
				みんなで楽しめる、楽しませるやばい吟遊詩人で〜す！
 			</p>
	
    <section id="content">
        <div id="content-wrap" class="container">
        <div id="main" class="col-md-9">
			<section id="tubetube">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>
    
            <article class="content">
			    <div class="newsbodytitle">
				    <?php the_title(); ?>
			    </div>  
            <?php the_content(); ?> 
            </article>
			</section>
        </div>
         <?php
        endwhile;
        endif;
        ?>
        <?php get_sidebar(); ?>
        </div> 
       
    </section>
      
    </body>



<?php get_footer(); ?>
