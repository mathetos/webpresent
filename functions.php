<?php

define('HOME_URL', 'http://slides.dev/wcsd17');

function dirToOptions($path = __DIR__, $level = 0) {
    $path = __DIR__ . '/slides';

    $items = scandir($path);
    foreach($items as $item) {
        // ignore items starting with a dot (= hidden or nav)
        if (strpos($item, '.') === 0) {
            continue;
        }

        $fullPath = $path . DIRECTORY_SEPARATOR . $item;
        // add some whitespace to better mimic the file structure
        $item = str_repeat('&nbsp;', $level * 3) . $item;
        // file
        if (is_file($fullPath)) {
            ob_start();
            include('slides/' . $item);
            ob_end_clean();

            ?>
            <div class="m-segment">
                <div class="segment_content">
                    <h2><a href="<?php echo HOME_URL . '/slides/' . $item; ?>"><?php echo $title; ?></a>
                    </h2>
                    <p class="description"><?php echo $excerpt; ?></p>
                </div>
            </div>
            <?php

        }

    }

}
