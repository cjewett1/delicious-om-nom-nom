<?php

// contains the closing of the #content div and all the content after.

//@link https://developer.wordpress.org/themes/basics/template-files/#template-partials

// @package Delicious-oh-nom-nom

?>

        <footer>

            <div class="footer-flex">
                <div class="footer-widget">
                    <?php dynamic_sidebar('footer_widget'); ?>
                </div>
                <div class="legal">
                    <p>Copyright © 2022 Delicious om nom nom.</p>
                    <p>All Rights Reserved.For Educational Purposes only </p>
                </div>

            </div>

        </footer>
    </div>
    <!-- Closing tag for site-content in the header -->
    <?php wp_footer(); ?>
</body>
</html>