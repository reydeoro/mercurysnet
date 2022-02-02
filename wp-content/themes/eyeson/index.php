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
 <section id="content">
	 <div id="content-wrap" class="container">
 		<div id="main" class="col-md-9">
 			<h1 class="text-center">自由に生きる、そんなことは無理だ☆</h1>
 			<p>
 				底辺YouTuber、「ゆずはらマーキュリー」のWebサイトです。
 				<br>
				<br>
				みんなで楽しめる、楽しませるやばい吟遊詩人で〜す！
 			</p>
 		</div>
		 <?php get_sidebar(); ?>
	</div> 
 </section>

 <!--おすすめ記事の表示、flexで表示したい-->
 <section id ="recomeflex"> 
		<div id="recomeflex-wrap" class="container">
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
 </section>

 <!--最新ニュースの表示-->
 <section id ="recomeflex"> 
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
 </section>
	
	<!--wordpressの情報を取得する-->
	<?php wp_footer(); ?>	
	<?php get_footer(); ?>

</body>
</html>
