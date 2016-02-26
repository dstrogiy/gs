<?php
/**
 * Author: VCUarts
 * URL: http://arts.vcu.edu
 *
 * @package VCUarts_Bones_WP
 */

?>

<!doctype html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php wp_title( '' ); ?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.png' ); ?>">
    <!--[if IE]>
      <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() . '/favicon.ico' ); ?>">
    <![endif]-->

    <script src="https://use.typekit.net/jjd0xxn.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="container">
