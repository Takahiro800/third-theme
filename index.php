<?php get_header(); ?>

<div id="contents" class="inner">
	<div id="contents-in">

		<div id="main">

			<section>

				<h2>現在の求人</h2>
				<p>以下のサムネイル画像は直接imgタグで配置しています。必要に応じて入れ替えて下さい。</p>

				<ul class="list2">
					<li><a href="<?php get_category_link(2); ?>"><img src="<?php the_post_thmubnail; ?>" alt="" class="img"><?php echo get_category(2) -> name; ?>の求人<br><span><?php echo get_category(2) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(3) -> name; ?>の求人<br><span><?php echo get_category(3) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(4) -> name; ?>の求人<br><span><?php echo get_category(4) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(5) -> name; ?>の求人<br><span><?php echo get_category(5) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(6) -> name; ?>の求人<br><span><?php echo get_category(6) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(7) -> name; ?>の求人<br><span><?php echo get_category(7) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img"><?php echo get_category(8) -> name; ?>の求人<br><span><?php echo get_category(8) -> count; ?>件</span></a></li>
					<li><a href="list.html"><img src="<?php echo get_template_directory_uri(); ?>/images/00338.png" alt="" class="img">事務の求人<br><span>1,234件</span></a></li>
				</ul>

			</section>

			<section id="new">
				<h2>更新情報・お知らせ</h2>
				<dl>
					<dt>2019/02/15</dt>
					<dd>tp_job3配布開始。<span class="newicon">NEW</span></dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
					<dt>20XX/00/00</dt>
					<dd>サンプルテキスト。サンプルテキスト。サンプルテキスト。</dd>
				</dl>
				<p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
			</section>

			<section>

				<h2>テンプレートのご利用前に必ずお読み下さい</h2>

				<h3>利用規約のご案内</h3>
				<p>このテンプレートは、<a href="https://template-party.com/">Template Party</a>にて無料配布している『求人サイト向け 無料ホームページテンプレート tp_job3』です。必ずダウンロード先のサイトの<a href="https://template-party.com/read.html">利用規約</a>をご一読の上でご利用下さい。</p>
				<p><strong class="color1">■HP最下部の著作表示『Web Design:Template-Party』は無断で削除しないで下さい。</strong><br>
					わざと見えなく加工する事も禁止です。</p>
				<p><strong class="color1">■下部の著作を外したい場合は</strong><br>
					<a href="https://template-party.com/">Template-Party</a>の<a href="https://template-party.com/member.html">ライセンス契約</a>を行う事でHP下部の著作を外す事ができます。</p>

				<h3>上のスライドショー写真はダウンロードファイルには梱包されていません</h3>
				<p>配布元である「PIXTA」さんの一般利用規約範囲内で利用している為、ダウンロードファイルには梱包されておりません。PSD特典にも含まれませんので同じ写真が必要な際はPIXTAさんで直接お買い求め下さい。</p>

				<h3>当テンプレートにはお問い合わせフォーム（自動フォーム：試用版）がセットされています</h3>
				<p><a href="contact.html">contact.html</a>と同じ３項目のお問い合わせフォームを簡単に使えるようにセットしています。</p>
				<p><strong class="color1">■自動フォームを使う場合（※編集に入る前にご確認下さい）</strong><br>
					あなたのメールアドレス設定と、簡単な編集だけで使えます。<a href="https://template-party.com/file/formgen_manual_set2.html" target="_blank">詳しくはこちらのマニュアルをご覧下さい。</a></p>
				<p><strong class="color1">■自動フォームを使わない場合</strong><br>
					テンプレートに梱包されている「form.html」「confirm.html」「finish.html」の3枚のファイルを削除して下さい。</p>

				<h3>テンプレートに梱包されているjavascriptファイル（jsファイル）について</h3>
				<p>当テンプレートに梱包されているjavascriptファイルは全て<a href="https://www.crytus.info/" target="_blank">クリタス様</a>提供のものです。jsファイルは改変せずにご利用下さい。<br>
					また、当サイトのテンプレート「以外」に使いたいなど、「プログラムのみ」を使う場合は<a href="https://template-party.com/free_program/openclose_license.html">こちらの規約</a>をお守り下さい。</p>

				<h3>当テンプレートの詳しい使い方は</h3>
				<p><a href="company.html">こちらをご覧下さい。</a></p>

			</section>

			<section>
				<h2>求人向けCMS販売中<span>CMS</span></h2>
				<p>求人サイト向けプログラムを販売中です。求人一覧ページ以外に、各詳細ページや専用お問い合わせフォームも出力できます。いずれのタイプも無料で試せる『<a href="https://template-party.com/job_db/siyou.html">試用版</a>』公開中。<br>
					<a href="https://template-party.com/job_db/"><img src="<?php echo get_template_directory_uri(); ?>/https://template-party.com/job_db/images/img01.jpg" alt=""></a></p>
			</section>

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
			<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1.jpg" alt="採用情報" class="pc"></a>
			<a href="recruit.html"><img src="<?php echo get_template_directory_uri(); ?>/images/banner1_sh.jpg" alt="採用情報" class="sh"></a>
		</p>
		<p>上のバナー画像は、901px以上の端末と900px以下とで画像２種類が切り替わります。<br>
			<a href="company.html#banner">詳しい説明はこちら。</a></p>

	</div>
	<!--/#side-->

</div>
<!--/#contents-->
<?php get_footer(); ?>