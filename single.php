
<?php get_header(); ?>
  <section id="content">

<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
      ?>
     <!-- <h2> <?php the_title(); ?></h2> -->
    <div> <?php the_content(); ?></div>
   <?php 
        //
    } // end while
} // end if
?>
</section>
<?php get_footer(); ?>
