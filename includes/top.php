<?php
ini_set("display_errors", 0);
include('includes/define.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php 
    $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    $server_name = $_SERVER['SERVER_NAME'];

    // var_dump($query);
    $segments = explode('/', $urlArray);
    // $numSegments = count($segments); 
    // $currentSegment = $segments[$numSegments - 2];
    $cuurentpage = $segments[1];
    
  ?>


    <title>OG Healthcare</title>
    <meta property="og:title" name="title" id="seo_title" content="OG Healthcare" />
    <meta property="og:description" id="seo_description" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" type="image/x-icon" href="<?= BASEURL ?>assets/images/favicon.png">
    <meta property="og:image" content="<?= BASEURL ?>assets/images/favicon.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height"  content="1024">
    <meta http-equiv="Cache-control" content="public">

    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/main.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/fonts/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/animate.min.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/swiper-bundle.min.css">
</head>

</html>