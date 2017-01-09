<?php
    $title = 'Home - jQuery.smoothState.js';
    $slug   = 'index';
    include('head.php');
?>
  <body>
    <div class="<?php echo $slug; ?> m-scene" id="main">
      <div class="m-landing-layout">
        <div class="m-header scene_element scene_element--fadein">
          <h1 class="m-type-display-1">Page jank demo</h1>
          <p class="m-type-sub-heading-1 header_intro">To run this demo locally, start a server in the root of this repository. If you have python installed, you can simply run <code>python -m SimpleHTTPServer</code> after you <code>cd</code> into the repo.</p>
        </div>
        <div class="m-page scene_element scene_element--fadeinup">
            <?php dirToOptions(); ?>

          <div class="m-highlight m-segment">
            <div class="segment_content">
              Developed by <a href="https://twitter.com/tayokoart">Miguel Ángel Pérez</a> and maintained by <a href="https://github.com/miguel-perez/jquery.smoothState.js/graphs/contributors">contributors</a> under the <a href="https://github.com/miguel-perez/jquery.smoothState.js/blob/master/LICENSE.md">MIT License</a>.
            </div>
          </div>
        </div>
      </div>
    </div>

<?php
include('footer.php');
