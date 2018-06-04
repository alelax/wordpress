<?php get_header(); ?>

   <div class="container px-0">

      <div class="custom-row d-flex flex-wrap">

         <div class="articles-cnt col-lg-12 d-flex p-0 px-lg-5">

            <!-- Start the Loop. -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

               <div class="article col-12 px-2 px-md-0 bottom-sm-separator">
                     <!-- Display the Title as a link to the Post's permalink. -->
                     <h2 class="article-title bottom-sm-separator">
                        <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to<?php the_title_attribute(); ?>">
                           <?php the_title(); ?>
                        </a>
                     </h2>

                     <div class="article-content col-lg-8 mx-md-auto text-justify">
                        <p>
                           <?php the_content(); ?>
                        </p>
                     </div>

               </div>

            <?php endwhile; else : ?>

            <!-- The very first "if" tested to see if there were any Posts to -->
            <!-- display.  This "else" part tells what do if there weren't any. -->
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

            <!-- REALLY stop The Loop. -->
            <?php endif; ?>

         </div>
      </div>
   </div>
<?php get_footer(); ?>
