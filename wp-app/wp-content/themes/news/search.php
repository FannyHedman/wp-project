<?php get_header();?>
    <div class="container">
      <div class="row">
          <div class="col-xs-12" id="searchBox">
        <?php
        if(have_posts()) : while (have_posts()) : the_post();?>

            <article>
              <a href="<?= the_permalink(); ?>">
              <h1 class="title"><?= the_title();?></h1>
              </a>
              <img src="<?= the_post_thumbnail_url("large")?>" alt="">
              <ul class="meta">
                <li>
                  <i class="fa fa-calender"></i>
                  <?=the_time('j F, Y')?>
                </li>
                <li class="fa fa-user">
                  <?=the_author_posts_link();?>
                </li>
                <li>
                  <i class="fa fa-user"></i>
                  <?=the_category(", ");?>
                </li>
              </ul>
              <?=the_excerpt();?>
            </article>

        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        </div>
    </div>

<?php get_footer();?>
