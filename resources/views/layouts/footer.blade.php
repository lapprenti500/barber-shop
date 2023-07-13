 <div class="copyrights">
     <div class="container-fluid">
         <div class="footer-distributed">
             <div class="footer-left">
                 <p class="footer-links">
                     <a href="#">Home</a>
                     <a href="#">Blog</a>
                     <a href="#">Pricing</a>
                     <a href="#">About</a>
                     <a href="#">Faq</a>
                     <a href="#">Contact</a>
                 </p>
                 <p class="footer-company-name">All Rights Reserved. &copy; 2018 <a href="#">SMBarber</a> Design
                     By : <a href="https://html.design/">html design</a></p>
             </div>

             <div class="footer-right">
                 <form method="get" action="#">
                     <input placeholder="Subscribe our newsletter.." name="search">
                     <i class="fa fa-envelope-o"></i>
                 </form>
             </div>
         </div>
     </div><!-- end container -->
 </div><!-- end copyrights -->
 </div>
 </div><!-- end wrapper -->

 <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

 <!-- ALL JS FILES -->
 <script src="{{ asset('js/all.js') }}"></script>
 <script src="{{ asset('js/responsive-tabs.js') }}"></script>
 <!-- ALL PLUGINS -->
 <script src="{{ asset('js/custom.js') }}"></script>

 <!-- Menu Toggle Script -->
 <script>
     (function($) {
         "use strict";
         $("#menu-toggle").click(function(e) {
             e.preventDefault();
             $("#wrapper").toggleClass("toggled");
         });
         smoothScroll.init({
             selector: '[data-scroll]', // Selector for links (must be a class, ID, data attribute, or element tag)
             selectorHeader: null, // Selector for fixed headers (must be a valid CSS selector) [optional]
             speed: 500, // Integer. How fast to complete the scroll in milliseconds
             easing: 'easeInOutCubic', // Easing pattern to use
             offset: 0, // Integer. How far to offset the scrolling anchor location in pixels
             callback: function(anchor, toggle) {} // Function to run after scrolling
         });
     })(jQuery);
 </script>

 </body>

 </html>
