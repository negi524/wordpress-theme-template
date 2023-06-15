<header id="header" class="header">
  <h1><?php bloginfo('name'); ?></h1>
  <p>ヘッダーです</p>
  <nav class="header__nav">
    <ul>
      <?php wp_list_pages('title_li='); ?>
    </ul>
  </nav>
</header>