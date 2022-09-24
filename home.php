<!-- フロントページ -->
<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-sm-8">
        <h2>投稿一覧</h2>
        <?php while (have_posts()) : the_post(); ?>
          <div>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>
      </main>
      <div class="col-sm-4">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
<?php get_footer(); ?>
