<?php
/* Template Name: page with links*/
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
        <h2>Hej från sida med länkar</h2>
      </div>
      <div class="col-xs-12 col-md-4">
        <?php
        wp_nav_menu(
          array('theme_location' => 'sidemenu')
        );
        ?>
      </div>
    </div>

  <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
