<?php

add_action('init', function () {
    add_theme_support('title-tag');

    // メニューをサポート
    register_nav_menus([
      'global_nav' => 'グローバルナビゲーション'
    ]);
});
