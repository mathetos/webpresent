<?php
/*
 *  The main Header file
 */

//PHP Caching Rules Start
//$url = $_SERVER["SCRIPT_NAME"];
//$break = Explode('/', $url);
//$file = $break[count($break) - 1];
//$cachefile = 'cached-'.substr_replace($file ,"",-4).'.html';
//$cachetime = 18000;

// Serve from the cache if it is younger than $cachetime
//if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
//    echo "<!-- Cached copy, generated ".date('H:i', filemtime($cachefile))." -->\n";
//    include($cachefile);
//    exit;
//}
//ob_start(); // Start the output buffer

require_once('functions.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,800">
    <link rel="stylesheet" href="<?php print_r( HOME_URL );?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?php print_r( HOME_URL );?>/assets/css/keyframes.css">
    <link rel="stylesheet" href="<?php print_r( HOME_URL );?>/assets/css/layout.css">
    <link rel="stylesheet" href="<?php print_r( HOME_URL );?>/assets/css/pageTransitions.css">
    <link rel="stylesheet" href="<?php print_r( HOME_URL );?>/assets/css/jquery.fullpage.min.css">
</head>

<?php
