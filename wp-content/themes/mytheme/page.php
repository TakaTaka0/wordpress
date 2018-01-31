
<?php get_header(); ?>
<div id="main" class="container">
  <div id="posts">

    <?php
    if (have_posts()) :
      while (have_posts()) :
        the_post();
        ?>
        <div class="post">
          <div class="post-header">
            <h2>
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>
          </div>
          <div class="post-content">
            <div class="post-image">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(array(100, 100)); ?>
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.png" width="100" height="100">
              <?php endif; ?>
            </div>
            <div class="post-body">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div><!-- /post -->

        <?php
      endwhile;
      else :
        ?>
        <p>ページはありません</p>

        <?php
      endif;
      ?>

    </div><!-- /posts -->
    <?php get_sidebar(); ?>
  </div><!-- /main -->
  <?php get_footer(); ?>
</body>
</html>
