<?php get_header();?>


    <section class="heading-text">
<h1><?php single_cat_title();?></h1>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<h3><?php the_title();?></h3>
<p><?php the_excerpt();?></p>
<a href="<?php the_permalink();?>">Read More...</a>

<?php endwhile; else : ?>
    <p>
      <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
    </p>
  <?php endif; ?>

</section>


<?php get_footer();?>
