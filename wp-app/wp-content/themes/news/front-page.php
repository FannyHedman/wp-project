<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <img src="<?= the_post_thumbnail_url("large") ?>" alt=""/>

    <h1>
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_content(); ?>
    </p>
    <h2>Hej</h2>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
