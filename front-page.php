<?php get_header();?>

<div class="fill">

    <section class="main">

      <div class="main-image">
        <img class="main-image-img" src="<?php echo get_stylesheet_directory_uri();?>/images/nia-callig.jpg" alt="">
      </div>

      <div class="main-content">
        <h1 class="main-text-h1"><?php the_title();?></h1>
        <p class="main-text-p"><?php the_content();?></p>
      </div>

    </section>
  </section>

  <!-- <section class="blog">
    <div class="heading-text">
      <h1><span class="semantics"></span></h1>
      <p class="description">A blog on race, culture, and language</p>
    </div>
    <div class="recent-posts">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post">
                  <div class="imgcolor red"></div>
                  <div class="text-box">
                  <h1 class="blog-title"><h1><?php the_title();?></h1></h1>
                  <p class="shorten"><p><?php the_content();?></p></p>
                          </div>
                        </div>

      <?php endwhile; else : ?>
          <p>
            <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
          </p>
        <?php endif; ?>



      </div>
  </section> -->

</div>


<?php get_footer();?>
