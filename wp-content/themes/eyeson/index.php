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
 			<p class="text-center">
 				底辺YouTuber、「ゆずはらマーキュリー」の<span class="phonebr">Webサイトです。
 				<br>
				みんなで楽しめる、楽しませる<span class="phonebr">やばい吟遊詩人で〜す！
 			</p>
	
		<!--最新ニュースを表示します-->
		<section id="thenews">
			<div class="newstitle">
				柚原からのお知らせ！
			</div>
			<div class="topics">
				<dl>
				<?php
				// news_postsを利用して、柚原のお知らせを追加する。
				$news_posts = get_posts('post_type=yuzuhara_news&posts_per_page=3');

				foreach ( $news_posts as $post ): // ループの開始
				setup_postdata( $post ); // 記事データの取得
				?>
				<dt><?php the_time('Y/m/d') ?></dt>
				<dd>
					<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
				</dd>
				
				</dl>
				<?php
				endforeach; // ループの終了
				wp_reset_postdata(); // 直前のクエリを復元する
				?>
				
			</div>
		</section>

	 <section id="content">
	 <div id="content-wrap" class="container">
	 		<div class="newstitle">
				ピッチピチの記事！
			</div>
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
			<div class="newstitle">
				・Youtubeチャンネル
			</div>
			<div class="videoframe">
			<iframe width="570" height="315" src="https://www.youtube.com/embed/feSC-1wSngM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			</section>

			<!--最新ニュースを表示-->
			<section id="newsnews">
				<div class="newsbodytitle">
				・最新記事
				</div>
			<!--おすすめ記事の表示、4件をflexで表示したい-->
			<div class="newart">
				<div class="newartitem">
					<img src="img/movie.jpg">
					<h2>最新記事</h2>
					<p>最新記事をここに載っけます</p>
				</div>

				<div class="newartitem">
					<img src="img/movie.jpg">
					<h2>最新動画</h2>
					<p>最新動画をここに載っけます</p>
				</div>

				<div class="newartitem">
					<img src="img/movie.jpg">
					<h2>競馬予想</h2>
					<p>競馬予想をここに載っけます</p>
				</div>

				<div class="newartitem">
					<img src="img/movie.jpg">
					<h2>競馬予想</h2>
					<p>競馬予想をここに載っけます</p>
				</div>
			</div>

			<!--柚原のブログを紹介するところです。ぺージャーを追加予定-->
			<section id="yuzublog">
				<div class="newsbodytitle">
					・柚原のブログ
				</div>

				<!--柚原のブログdlタグで紹介します。ボーダーは削除します。-->
				<div class="blog">
					<?php
					// news_postsを利用して、柚原のお知らせを追加する。
					$news_posts = get_posts('post_type=yuzuhara_news&posts_per_page=5');

					foreach ( $news_posts as $post ): // ループの開始
					setup_postdata( $post ); // 記事データの取得
					?>
					<dl class="clearfix">
						<dt class ="blogimage"> 
						<div class="newblogart">
						<?php if(has_post_thumbnail()):?>
							<img src="<?php echo get_the_post_thumbnail_url(); ?>">
						<?php else: ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/nonoimage.png">
						<?php endif; ?>
							
						</div>
						</dt>
						<dd class="titlekey">
							<dt><?php the_time('Y/m/d') ?></dt>
							<dd>
								<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
							</dd>
							</dl>
							<?php
							endforeach; // ループの終了
							wp_reset_postdata(); // 直前のクエリを復元する
							?>
						</dd>
					</dl>


					<dl class="clearfix">
						<dt class ="blogimage"> 
						<div class="newblogart">
							<img src="img/movie.jpg">
						</div>
						</dt>
						<dd class="titlekey">
							<h3>タイトルホルダー</h3>
							<p>ここではタイトルを入力します。これだけ長い文字でも大丈夫でしょうか？</p>
						</dd>
					</dl>

					<dl class="clearfix">
					<dt class ="blogimage"> 
						<div class="newblogart">
							<img src="img/movie.jpg">
						</div>
						</dt>
						<dd class="titlekey">
							<h3>タイトルホルダー</h3>
							<p>タイトルだよー</p>
						</dd>
					</dl>

				</div>
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
