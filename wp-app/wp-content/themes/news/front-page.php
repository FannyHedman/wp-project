<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <div class="heroContainer">
    <img class="heroImage" src="<?= the_post_thumbnail_url("large") ?>" alt="">
    <div class="heroContent">
    <h1 id="title">
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_content(); ?>
    </p>
  </div>
  </img>
  </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
