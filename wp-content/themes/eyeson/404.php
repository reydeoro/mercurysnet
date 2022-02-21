<!-- 404.php -->
<meta charset="utf-8">
	<title>マーキュリーの館</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/mystyle.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php get_header(); ?>
<div id="main">
  <h2>404 Not Found（ページが見つかりませんでした）</h2>
  <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
  <p class="error_url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
  <p>現在表示する記事がありません。よろしければ、検索ボックスにお探しのコンテンツに該当するキーワードを入力して下さい。</p>
  <?php get_search_form(); ?><!-- 検索フォームを表示 -->
  <p><a href="<?php echo home_url(); ?>">トップページへ</a></p>
  <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>