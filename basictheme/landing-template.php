
<?php //Template Name: Landing Page ?>
<!--optional if on root directory<?php //get_header('landing'); ?>-->
<?php get_template_part( 'partials/header', 'landing' ); ?>
<!--site title and tagline-->

<!--//feature image hero-->
          <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div id="post" class="feature-image-landing" style="background-image: url('<?php echo $thumb['0'];?>');">
        <p class="test-class">text demo</p>
        <h2><a href="<?php the_permalink(); //returns url of current post ?>"><?php the_title(); //shows post title ?></a></h2>
        </div>
<div class="container">
  <div class="row">

    <div class="">
<!--//feature image-->
          <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div id="post" class="feature-image-landing" style="background-image: url('<?php echo $thumb['0'];?>');">
        <p class="test-class">text demo</p>
        </div>
    </div>
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!--Markup... Display post content-->
          <h2><a href="<?php the_permalink(); //returns url of current post ?>"><?php the_title(); //shows post title ?></a></h2>
          <?php the_content(); //add the post content ?>
      <?php endwhile; ?>
      <nav>
      <ul class="pager">
      <li><?php next_posts_link( '&laquo; Previous' ); ?></li>
      <li><?php previous_posts_link( 'Next &raquo;' ); ?></li>
      </ul>
      </nav>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
