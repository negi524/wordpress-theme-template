<!-- 投稿ページ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part('components/header'); ?>
  <div class="container">
    <div class="row">
      <main class="col-sm-9">
        <?php while(have_posts()): the_post(); ?>
          <h2><?php the_title(); ?></h2>
          <p><?php the_date(); ?></p>
          <div>
            <?php the_content(); ?>
          </div>
        <?php endwhile; ?>
      </main>
      <div class="col-sm-3">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
  <?php get_footer(); ?>
</body>
</html>