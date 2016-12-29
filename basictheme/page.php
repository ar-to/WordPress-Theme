<?php get_header(); ?>
<!--site title and tagline-->

<div class="container">
  <div class="row">
    <div class="col-md-12 well"><h1 class="text-center">Hello World!!</h1></div>
    <div class="col-md-12 well">
      <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
    <div id="post" class="feature-image" style="background-image: url('<?php echo $thumb['0'];?>');">
    <p>text demo</p>
    </div>
    </div>

    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!--Markup... Display post content-->
          <h1 class="text-center">Post</h1>
          <?php the_post_thumbnail('medium'); ?>
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
