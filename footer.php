   <?php wp_footer(); ?>
      <div class="wrapper-footer">

         <footer class="container px-0">

            <div class="custom-row">

               <div id="footer-sidebars-cnt" class="col-12">

                  <div id="footer" class="col-12 col-md-4 right-md-separator">
                  <?php
                     if(is_active_sidebar('footer-sidebar-left')){
                        dynamic_sidebar('footer-sidebar-left');
                     }
                  ?>
                  </div>

                  <div id="footer-sidebar2" class="col-12 col-md-4 right-md-separator">
                  <?php
                     if(is_active_sidebar('footer-sidebar-center')){
                        dynamic_sidebar('footer-sidebar-center');
                     }
                  ?>
                  </div>

                  <div id="footer-sidebar3" class="col-12 col-md-4">
                     <?php
                        if(is_active_sidebar('footer-sidebar-right')){
                           dynamic_sidebar('footer-sidebar-right');
                        }
                     ?>
                  </div>

               </div>

            </div>

         </footer>
      </div>

   </body>
</html>
