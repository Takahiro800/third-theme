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