<!-- フロントページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part( 'components/header') ?>
  <div class="container">
    <div class="row">
      <main class="col-sm-8">
        <h2>投稿一覧</h2>
        <?php while (have_posts()) : the_post(); ?>
          <div class="card">
            <a class="card-body" href="<?php the_permalink(); ?>">
              <h3 class="card-title"><?php the_title(); ?></h3>
              <p><?php the_time(get_option('date_format')); ?></p>
              <p class="card-text"><?php the_excerpt(); ?></p>
            </a>
          </div>
        <?php endwhile; ?>

        <?php
        // 前ページへのリンク
        $prevLink = get_previous_posts_link();
        $prevLink = str_replace('<a', '<a class="page-link"', $prevLink);
        // 次ページのリンク
        $nextLink = get_next_posts_link();
        $nextLink = str_replace('<a', '<a class="page-link"', $nextLink);
        ?>
        <nav aria-label="Page navigation">
          <ul class="pagination">
            <?php if ($prevLink): ?>
              <li class="page-item"><?php echo $prevLink ?></li>
            <?php endif; ?>
            <?php if ($nextLink): ?>
              <li class="page-item"><?php echo $nextLink ?></li>
            <?php endif; ?>
          </ul>
        </nav>
      </main>
      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</body>
</html>