<?php get_header(); ?>

   <div class="container px-0">

      <div class="custom-row d-flex flex-wrap">

         <div class="articles-cnt col-lg-9 d-flex justify-content-lg-between flex-wrap p-0 px-lg-5">

            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

               <div class="article col-md-6 col-lg-5">
                     <!-- Display the Title as a link to the Post's permalink. -->
                     <h2 class="article-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to<?php the_title_attribute(); ?>">
                           <?php the_title(); ?>
                        </a>
                     </h2>


                  <div class="article-excerpt">
                     <p>
                        <?php
                           $num_of_character = 35;
                           echo excerpt($num_of_character);
                        ?>
                     </p>
                  </div>

                  <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                  <small class="article-date"><?php the_time('F jS, Y'); ?>, by <?php the_author_posts_link(); ?></small>
               </div>

<?php /*
               <!-- Display a comma separated list of the Post's Categories. -->

               <p class="postmetadata"><?php _e( 'Related tag: ' ); ?> <?php the_category( ', ' ); ?></p>

               <p>

               </p>

*/?>

            <?php endwhile; else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <!-- REALLY stop The Loop. -->
            <?php endif; ?>

         </div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>
