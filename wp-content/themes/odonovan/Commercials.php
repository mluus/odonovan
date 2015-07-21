<?php
/**
 * Template Name: Commercials
 */

get_header(); ?>

	<div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                            <?php while ( have_posts() ) : the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                    
                        <a href="index.php?p=2" class="more"><h3>More archived commercials...</h3></a>
                 

                            <?php endwhile; // End of the loop. ?>
                        
                   

                    </main><!-- #main --> 
	</div><!-- #primary -->
      


<?php get_footer(); ?>
