<!--ヘッダーを作成します-->
<header>
		<nav class="navbar navbar-default" style="margin-bottom:0;">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
		      <span class="sr-only">メニュー</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		  </div>
		  <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
		    <ul class="nav navbar-nav">
		      <li><a href="<?php echo home_url(); ?>">HOME</a></li>
		      <li><a href="#">プロフィール</a></li>
					<li><a href="#">開発事例</a></li>
		      <li><a href="#">競馬予想</a></li>
			  <li><a href="#">YouTube</a></li>
			  <li><a href="#">お問い合せ</a></li>
		    </ul>
		  </div>
		</nav>
		<div class="sitelogo">
		<img src="<?php echo get_template_directory_uri(); ?>/img/sitelogo.png">
		</div>
	</header>