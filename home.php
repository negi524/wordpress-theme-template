<!-- フロントページ -->
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('components/header'); ?>
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

        <?php get_template_part('components/pagination'); ?>
      </main>
      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</body>
</html>