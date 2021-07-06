<?php
/**
 * The template for displaying the header.
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package    WordPress
 * @subpackage Shamim_Ninja
 * @since      Shamim Ninja 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="Md. Shamim Shahnewaz is a professional software engineer for the last <?php echo (date('Y') - 2008) ?> years." />
    <meta name="keywords" content="Md. Shamim Shahnewaz, Software Engineer, Software Developer, Laravel, PHP, MySQL, Angular, React, Node, Mongodb developer" />
    <meta name="author" content="Md. Shamim Shahnewaz" />
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body class="flat-demo">

<!--<div id="overlayer"></div>
<span class="loader"></span>-->
