<!--TOPページ-->
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>マーキュリーの館</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>
	<?php get_header(); ?>
	<h1 class="text-center">吟遊詩人ゆずはらマーキュリーのサイトです</h1>
 			<p class="text-center">
 				底辺YouTuber、「ゆずはらマーキュリー」のWebサイトです。
 				<br>
				みんなで楽しめる、楽しませるやばい吟遊詩人で〜す！
 			</p>

	 <section id="content">
	 <div id="content-wrap" class="container">
 		<!--おすすめ記事の表示、flexで表示したい-->
		 	<div class="container">
				<div class="item">
					<img src="img/movie.jpg">
					<h2>最新記事</h2>
					<p>最新記事をここに載っけます</p>
				</div>

				<div class="item">
					<img src="img/movie.jpg">
					<h2>最新動画</h2>
					<p>最新動画をここに載っけます</p>
				</div>

				<div class="item">
					<img src="img/movie.jpg">
					<h2>競馬予想</h2>
					<p>競馬予想をここに載っけます</p>
				</div>
			</div>
	 
		<!--メイン記事をかき込みます-->
	 	<div id="main" class="col-md-9">
			<section id="tubetube">
				<h2>・YouTubeチャンネル</h2>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/feSC-1wSngM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</section>

			<section id="newsnews">
				<h2>・最新記事</h2>
			</section>
 		</div>
		 <?php get_sidebar(); ?>
	</div>
		 
</section>
	
	<!--wordpressの情報を取得する-->
	<?php wp_footer(); ?>	
	<?php get_footer(); ?>

</body>
</html>
