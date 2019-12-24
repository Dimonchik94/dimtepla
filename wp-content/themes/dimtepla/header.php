<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dimtepla
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
        <a name="top"></a>
        <div class="row">
            <div class="col-4">
                <a id="logo" href="/">
                    <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="col-6">
                <ul>
                    <li><a href="/">Головна</a><hr class="menu-hr"></li>
                    <li><a href="#">Каталог</a><hr class="menu-hr"></li>
                    <li><a href="#">Відгуки</a><hr class="menu-hr"></li>
                    <li><a href="#">Контакти</a><hr class="menu-hr"></li>
                </ul>
            </div>
            <div class="col-2">
                <div id="call">
                    <hr id="top-hr">
                    <a href="#callback">Зворотний дзвінок</a>
                    <hr id="bot-hr">
                </div>
            </div>
        </div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
