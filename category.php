<?php get_header(); ?>

<div id="contents" class="inner">
	<div id="contents-in">

		<div id="main">
			<?php if (have_posts()) : ?>

				<section>

					<h2><?php the_category(); ?>の求人一覧</h2>
					<?php query_posts('posts_per_page=3'); ?>
					<?php while (have_posts()) : the_post(); ?>

						<div class="list">

							<p class="img"><img src="images/sample1.jpg" alt=""></p>

							<div class="text">

								<span class="new">new</span>
								<span class="icon color1">正社員</span>
								<span class="icon color2">アルバイト</span>

								<h4><?php the_title(); ?></h4>

							</div>
							<!--/.text-->

							<?php the_body(); ?>
							<p><a href="item.html" class="btn">詳細を見る</a></p>

						</div>
						<!--list-->
				</section>
			<?php endwhile; ?>
		<?php endif; ?>

		</div>
		<!--/#main-->

		<div id="sub">

			<nav>
				<h2>サイトメニュー</h2>
				<ul class="submenu">
					<li><a href="index.html">ホーム</a></li>
					<li><a href="info.html">掲載のご案内</a></li>
					<li><a href="faq.html">よく頂く質問</a></li>
					<li><a href="link.html">リンク</a></li>
					<li><a href="contact.html">お問い合わせ</a></li>
					<li><a href="company.html">会社概要</a></li>
				</ul>
			</nav>

			<nav>
				<h2>現在の求人</h2>
				<ul class="submenu">
					<li><a href="list.html">飲食店の求人</a></li>
					<li><a href="list.html">営業の求人</a></li>
					<li><a href="list.html">接客・販売の求人</a></li>
					<li><a href="list.html">事務の求人</a></li>
				</ul>
			</nav>

			<div class="box1">
				<h2 class="mb10">アクセス</h2>
				<p>東京都XX区XXXXビル３F<br>
					TEL：00-0000-0000<br>
					受付：00:00〜00:00<br>
					定休日：水曜日</p>
			</div>

		</div>
		<!--/#sub-->

	</div>
	<!--/#contents-in-->

	<div id="side">

		<div class="box1">

			<h2>人気業種</h2>

			<div class="list-sub">
				<a href="item.html">
					<h4>WEBデザイナー募集</h4>
					<p>■給与…月給25万円〜<br>
						■募集タイプ…正社員<br>
						■勤務地…千葉市中央区<br>
						<span class="new">new</span>
					</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="item.html">
					<h4>WEBデザイナー募集</h4>
					<p>■給与…月給25万円〜<br>
						■募集タイプ…正社員<br>
						■勤務地…千葉市中央区<br>
					</p>
				</a>
			</div>

			<div class="list-sub">
				<a href="item.html">
					<h4>WEBデザイナー募集</h4>
					<p>■給与…月給25万円〜<br>
						■募集タイプ…正社員<br>
						■勤務地…千葉市中央区<br>
					</p>
				</a>
			</div>

		</div>
		<!--.box1-->

		<nav class="box1">
			<h2>Contents</h2>
			<ul class="submenu">
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
				<li><a href="#">メニューサンプル</a></li>
			</ul>
		</nav>

		<p>
			<a href="recruit.html"><img src="images/banner1.jpg" alt="採用情報" class="pc"></a>
			<a href="recruit.html"><img src="images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
		</p>
		<p>上のバナー画像は、901px以上の端末と900px以下とで画像２種類が切り替わります。<br>
			<a href="company.html#banner">詳しい説明はこちら。</a></p>

	</div>
	<!--/#side-->

</div>
<!--/#contents-->
<?php get_footer(); ?>