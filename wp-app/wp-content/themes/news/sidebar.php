<div class="widget">
  <ul>
    <li>
      <form action="search.php">
        <div>
          <label for="">Search</label>
          <input type="text"/>
          <input type="submit" value="search">
        </div>
      </form>
    </li>
  </ul>
</div>

<div class="widget">
  <h3>Sidor</h3>
  <ul>
  <?php wp_list_pages('title_li=')?>
  </ul>
</div>
<div class="widget">
  <h3>Archive</h3>
  <ul>
  <?php wp_get_archives('type=monthly')?>
  </ul>
</div>
<div class="widget">
  <h3>Categorys</h3>
  <ul>
  <?php
  wp_list_categories('title_li=');?>
  </ul>
</div>
