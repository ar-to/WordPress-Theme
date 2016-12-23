<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 well"><h1 class="text-center">Hello World!!</h1></div>
    <div class="col-md-12">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <!--Markup... Display post content-->
          <h1 class="text-center">Post</h1>
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
