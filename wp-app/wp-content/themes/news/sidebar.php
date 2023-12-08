<div class="widget">
  <form id="searchform" class="searchform" action="/">
    <div>
      <input type="text" value="<?php get_search_query(); ?>" name="s" />
      <input type="submit" value="Sök" />
    </div>
  </form>
</div>
<div class="widget">
  <h3>Sidor</h3>
  <ul>
    <?php wp_list_pages('title_li=') ?>
  </ul>
</div>
<div class="widget">
  <h3>Archive</h3>
  <ul>
    <?php wp_get_archives('type=monthly') ?>
  </ul>
</div>
<div class="widget">
  <h3>Categorys</h3>
  <ul>
    <?php
    wp_list_categories('title_li='); ?>
  </ul>
</div>
