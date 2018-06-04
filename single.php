<?php get_header(); ?>

   <div class="container px-0">

      <div class="custom-row d-flex flex-wrap">

         <div class="article-cnt col-lg-9 d-flex justify-content-lg-between flex-wrap p-0 px-lg-5">

            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

               <div class="article col-12 px-2 px-md-0 bottom-sm-separator">
                     <!-- Display the Title as a link to the Post's permalink. -->
                     <h2 class="article-title">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to<?php the_title_attribute(); ?>">
                           <?php the_title(); ?>
                        </a>
                     </h2>

                     <!-- Display a comma separated list of the Post's Categories. -->
                     <p class="article-category postmetadata"> <span class="fixed-txt"> <?php _e( 'Category: ' ); ?> </span> <?php the_category( ', ' ); ?></p>

                     <!-- Display a comma separated list of the Post's tags. -->
                     <?php
                        $post_tags = wp_get_post_tags($post->ID);
                        if ( !empty($post_tags) ) {
                           the_tags('<p class="article-tags bottom-sm-separator"><span class="fixed-txt">Related tags: </span>', '  ', '</p>');
                        }
                     ?>

                     <div class="article-content col-lg-10 mx-md-auto text-justify">
                        <p>
                           <?php the_content(); ?>
                        </p>
                     </div>

                     <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
                     <small class="article-date"><?php the_time('F jS, Y'); ?>, by <?php the_author_posts_link(); ?></small>
               </div>

               <div class="comments col-12 px-2 px-md-0">
                  <?php comments_template(); ?>
               </div>


            <?php endwhile; else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <!-- REALLY stop The Loop. -->
            <?php endif; ?>

         </div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>
