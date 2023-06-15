<?php
// 前ページへのリンク
$prevLink = get_previous_posts_link('&laquo; 前ページへ');
$prevLink = str_replace('<a', '<a class="page-link"', $prevLink);
// 次ページのリンク
$nextLink = get_next_posts_link('次ページへ &raquo;');
$nextLink = str_replace('<a', '<a class="page-link"', $nextLink);
?>
<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <?php if ($prevLink): ?>
      <li class="page-item"><?php echo $prevLink ?></li>
    <?php else: ?>
      <li class="page-item disabled"><span class="page-link">&laquo; 前ページへ</span></li>
    <?php endif; ?>

    <?php if ($nextLink): ?>
      <li class="page-item"><?php echo $nextLink ?></li>
    <?php else: ?>
      <li class="page-item disabled"><span class="page-link">次ページへ &raquo;</span></li>
    <?php endif; ?>
  </ul>
</nav>