<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package    WordPress
 * @subpackage Shams_One
 * @since      Shams One 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Boch | A Solution to your Portfolio">
    <meta name="author" content="">
    <meta name="robots" content="index,follow">

    <title><?php bloginfo( 'name' ); ?></title>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<?php wp_head(); ?>
</head>
<body>
<!---->
<!--Start Preloading Effect-->
<!---->
<div id="status">
    <div id="preloader">
        <div class="uil-reload-css" style="-webkit-transform:scale(0.9)"><div></div></div>
    </div>
</div>
<!---->
<!--End Preloading Effect-->
<!---->
