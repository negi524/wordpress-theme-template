<header id="header" class="header">
  <?php
  // メニューIDを取得する
  $menu_name = 'global_nav';
  $locations = get_nav_menu_locations();
  $menu = wp_get_nav_menu_object($locations[$menu_name]);

  $menu_items = wp_get_nav_menu_items($menu->term_id);
  ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo esc_url(home_url('/'))?>"><?php bloginfo('name'); ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php foreach($menu_items as $item): ?>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page"
              href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <p><?php bloginfo('description'); ?></p>
  </div>

</header>