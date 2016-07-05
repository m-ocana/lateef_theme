        <!-- Footer starts here --> 
        <footer>
            <div class="footer-wrapper">

                <p class="publisher">©Lateef Saka 2016</p>

                <p class="authors">Crafted by 
                    <a href="https://github.com/m-ocana">Oca&ntilde;a </a> &amp; 
                    <a href="http://www.sosina.me" target="_blank">Sosina</a>
                </p>
            </div>
        </footer>

        <!-- Add scripts here -->
        <!--script src="js/vendor/modernizr-2.8.3.min.js"></script-->
        <script>
            
            (function(){
                var body = document.querySelector("body");
                var hamburger = document.querySelector(".hamburger");
                var overlayMenu = document.querySelector(".overlay");
                var logo = document.querySelector(".logo");

                var toggleNavigation = function () {
                    // Toggle Hamburger class "is-active"
                    hamburger.classList.toggle("is-active");
                    // Fix background scroll issue
                    body.classList.toggle("scroll-block");
                    // Open/Close menu
                    overlayMenu.classList.toggle("is-active");
                    overlayMenu.classList.toggle("is-inactive");
                    
                    // Hiding overlay with 0.5s delay
                      setTimeout(function(){
                    
                        overlayMenu.classList.toggle("hidden");
                    }, 500);

                    // Highlight logo
                    logo.classList.toggle("is-active");            
                };

                // On click
                hamburger.addEventListener("click", toggleNavigation);
                overlayMenu.addEventListener("click", toggleNavigation);
            })();

        </script>

        <?php wp_footer(); ?>
    </body>
</html>
