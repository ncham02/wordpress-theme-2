<?php get_header();?>


    <section class="heading-text">
<h1><?php the_title ();?></h1>


<?php if(has_post_thumbnail()):?>

  <img src="<?php the_post_thumbnail_url('smallest')?>" alt="">

<?php endif;?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<p><?php the_content();?></p>

<?php endwhile; else : ?>
    <p>
      <?php esc_html_e('Sorry, no posts matched your criteria.'); ?>
    </p>
  <?php endif; ?>

</section>


<?php get_footer();?>
