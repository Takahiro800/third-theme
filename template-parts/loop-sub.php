<nav>
  <h2>情報一覧</h2>
  <ul class="submenu">
    <?php
    $args = array(
      'title_li' => '',
      'exclude' => '6',
    );
    wp_list_categories( $args );
    ?>
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