<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( $show = 'name' ) ?> | <?php bloginfo( $show = 'description' )?></title>
    <?php wp_head(); ?>
</head>
    <?php get_template_part ( 'template-parts/headers/main-header' ); ?>
<body>