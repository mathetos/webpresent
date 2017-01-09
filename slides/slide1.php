<?php
    $title      =   'Slide 1';
    $slug       =   'detail';
    $excerpt    =   'This is a short description of this slide.';
    include('../head.php');
?>

    <body>
<div class="<?php echo $slug; ?> m-scene" id="main">
    <div class="m-detail-layout">
        <div class="m-aside scene_element scene_element--fadein">
            <h3 class="aside_title">
                <a href="<?php print_r( HOME_URL ); ?>" class="m-button">
                    <span class="txt">← Home</span>
                </a>
            </h3>
        </div>
        <div class="m-right-panel m-page scene_element scene_element--fadeinup scene_element--fadeinright-wide">

            <div id="fullpage">
            <div class="m-segment section active b-green">
                <h2 class="m-type-heading-1">Slide 1</h2>
                <div class="segment_content">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <ul>
                        <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
                        <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
                        <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
                        <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
                    </ul>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
            <div class="m-segment section b-blue">
                <h2 class="m-type-heading-1">Slide 1-a</h2>
                <div class="segment_content">
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                    <dl>
                        <dt>Definition list</dt>
                        <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </dd>
                        <dt>Lorem ipsum dolor sit amet</dt>
                        <dd>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                        </dd>
                    </dl>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                </div>
            </div>
                <div class="section b-orange">
                    <div class="slide"><h2 class="m-type-heading-1"> Slide 1 </h2></div>
                    <div class="slide"><h2 class="m-type-heading-1"> Slide 2 </h2></div>
                    <div class="slide"><h2 class="m-type-heading-1"> Slide 3 </h2></div>
                    <div class="slide"><h2 class="m-type-heading-1"> Slide 4 </h2></div>
                </div>
            </div>

            <div class="m-highlight m-segment">
                <div id="footer" class="segment_content">
                    Developed by <a href="https://twitter.com/tayokoart">Miguel Ángel Pérez</a> and maintained by <a href="https://github.com/miguel-perez/jquery.smoothState.js/graphs/contributors">contributors</a> under the <a href="https://github.com/miguel-perez/jquery.smoothState.js/blob/master/LICENSE.md">MIT License</a>.
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('../footer.php');
