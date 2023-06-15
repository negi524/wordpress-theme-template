<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_header(); ?>
</head>
<body>
  <?php get_template_part( 'components/header'); ?>
  <main>
    <?php if(is_category()): ?>
      <h2>Category</h2>
    <?php elseif(is_author()): ?>
      <h2>Author</h2>
    <?php elseif(is_date()): ?>
      <h2>Date</h2>
    <?php else: ?>
      <h2>Tag</h2>
    <?php endif; ?>

    <p><?php wp_title(''); ?></p>
    <?php while (have_posts()) : the_post(); ?>
      <p><?php the_title(); ?></p>
    <?php endwhile; ?>
    <?php get_template_part('components/pagination'); ?>
  </main>
  <?php get_footer(); ?>
</body>
</html>