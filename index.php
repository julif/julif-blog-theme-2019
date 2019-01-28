
<?php get_header(); ?>
<?php include(TEMPLATEPATH."/banner.php"); ?> 
 <section id="content">

<h2> blog:</h2>
<ul><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	 <li>  <a href="<?php the_permalink();?>"><?php the_title(); ?></a></li><?php endwhile; else : ?><p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p><?php endif; ?>
</ul>  
<?php 
    query_posts(array( 
        'post_type' => 'tutoriales',
        'showposts' => 10 
    ) );  
?>
<h2> tutoriales:</h2>
<ul><?php while (have_posts()) : the_post(); ?>
        <li>  <a href="<?php the_permalink();?>"><?php the_title(); ?></a></li>
<?php endwhile;?></ul>
</section>
<?php get_footer(); ?>
