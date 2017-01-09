<?php
/*
 *  The main Footer file
 */
?>
        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

        <!-- Main SmoothState JS -->
        <script src="<?php print_r( HOME_URL );?>/assets/js/jquery.smoothState.min.js"></script>

        <!-- Fullpage with Scrolloverflow Extension -->
        <script type="text/javascript" src="<?php print_r( HOME_URL );?>/assets/js/scrolloverflow.min.js"></script>
        <script src="<?php print_r( HOME_URL );?>/assets/js/jquery.fullpage.extensions.min.js"></script>

        <!-- Individual JS Overrides -->
        <script src="<?php print_r( HOME_URL );?>/assets/js/main.js"></script>

        <script>
//        $(window).load(function() {
//            $('#fullpage').fullpage({
//                verticalCentered: false,
//                scrollOverflow: true,
//                scrollOverflowReset: true
//            });
//        });
        </script>

    </body>

</html>

<?php

// Cache the contents to a file
//$cached = fopen($cachefile, 'w');
//fwrite($cached, ob_get_contents());
//fclose($cached);
//ob_end_flush(); // Send the output to the browser