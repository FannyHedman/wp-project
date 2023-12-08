<?php
/* Template Name: page with image*/
?>

<?php get_header(); ?>

<?php
if (have_posts()):
  while (have_posts()):
    the_post(); ?>
    <div class="container">
    <div class="col-xs-12 col-md-8">
    <h1>
      <?php the_title(); ?>
    </h1>
    <p>
      <?php the_content(); ?>
    </p>
    </div>
    <div class="col-xs-12 col-md-4">
      <img src="<?php the_post_thumbnail_url("medium");?>" alt="">
    </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
