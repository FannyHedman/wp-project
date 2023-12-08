<?php get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <div class="container">
      <div>
        <h1>
          <?php the_title(); ?>
        </h1>
        <img src="<?= the_post_thumbnail_url("medium")?>" alt="">
        <p>
          <?php the_content(); ?>
        </p>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
