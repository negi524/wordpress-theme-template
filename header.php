<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/normalize.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/style.css">
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/dist/main.bundle.js"></script>
  <title>タイトル</title>
  <?php wp_head(); ?>
</head>
<body>
  <header id="header" class="header">
    <h1><?php bloginfo('name'); ?></h1>
    <p>ヘッダーです</p>
    <nav class="header__nav">
      <ul>
        <?php wp_list_pages('title_li='); ?>
      </ul>
    </nav>
  </header>
