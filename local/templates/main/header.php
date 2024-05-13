<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html>

<head>

	<title><? $APPLICATION->ShowTitle(); ?></title>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/img/favicon.png">

	<?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.carousel.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate-text.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific-popup.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/et-line.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/pe-icon-7-stroke.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/shortcode/shortcodes.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/meanmenu.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/font-awesome.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/style.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/modernizr-2.8.3.min.js');

	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/jquery-1.12.0.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.carousel.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.counterup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/waypoints.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.magnific-popup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.mixitup.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.meanmenu.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.nav.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.parallax-1.1.3.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/animate-text.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/plugins.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');


	Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">');
	?>

	<? $APPLICATION->ShowHead(); ?>
</head>

<body>
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?>
	</div>


	<!--[if lt IE 8]>
<p class="browserupgrade">Вы используете <strong>устаревший</strong> браузер. Пожалуйста
    <a href="http://browsehappy.com/">обновите его</a>
</p>
<![endif]-->
	<? if ($APPLICATION->GetCurDir() !== '/') : ?>
		<!-- Линия с контактами -->
		<div class="header-top-area bg-color ptb-10 hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="welcome">
							<span>
								<? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
									"AREA_FILE_SHOW" => "file",
									"PATH"           => SITE_TEMPLATE_PATH . "/includes/header_email.php",
								]); ?>
							</span>
							<span>
								<? $APPLICATION->IncludeComponent("bitrix:main.include", "", [
									"AREA_FILE_SHOW" => "file",
									"PATH"           => SITE_TEMPLATE_PATH . "/includes/header_phone.php",
								]); ?>
							</span>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="social-icon-header text-right">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
							<a href="#"><i class="fa fa-youtube"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? endif ?>
	<!-- Шапка сайта (меню) -->
	<header id="sticky-header" class="header-area header-wrapper <?= ($APPLICATION->GetCurDir() === '/') ? 'transparent-header' : 'white-bg' ?>">
		<!-- Меню (для десктопа) -->
		<div class="header-middle-area full-width">
			<div class="container">
				<div class="full-width-mega-dropdown">
					<div class="row">
						<!-- Логотип -->
						<div class="col-md-2 col-sm-3 col-xs-8">
							<div class="logo ptb-22">
								<a href="/">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/logo/logo.png" alt="main logo">
								</a>
							</div>
						</div>

						<!-- Меню (основное) -->
						<div class="col-md-10 col-sm-9 col-xs-4 text-right dark-menu">
							<? $APPLICATION->IncludeComponent(
								"bitrix:menu",
								"top_menu",
								[
									"ALLOW_MULTI_SELECT" => "N",
									"CHILD_MENU_TYPE" => "left",
									"COMPOSITE_FRAME_MODE" => "A",
									"COMPOSITE_FRAME_TYPE" => "AUTO",
									"DELAY" => "N",
									"MAX_LEVEL" => "2",
									"MENU_CACHE_GET_VARS" => [""],
									"MENU_CACHE_TIME" => "3600",
									"MENU_CACHE_TYPE" => "N",
									"MENU_CACHE_USE_GROUPS" => "N",
									"ROOT_MENU_TYPE" => "top",
									"USE_EXT" => "N",
									"COMPOSITE_TEMPLATE" => "top_menu",
								],
								false
							); ?>

							<!-- Поиск -->
							<div class="header-right">
								<div class="header-search">
									<div class="search-wrapper">
										<a href="javascript:void(0);" class="search-open">
											<i class="pe-7s-search"></i>
										</a>
										<div class="search-inside animated bounceInUp">
											<i class="icon-close search-close fa fa-times"></i>
											<div class="search-overlay"></div>
											<div class="position-center-center">
												<div class="search">
													<form>
														<input type="search" placeholder="Поиск по сайту">
														<button type="submit"><i class="fa fa-search"></i></button>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Меню (для мобилки) -->
		<div class="mobile-menu-area visible-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mobile-menu">
							<nav id="dropdown">
								<ul>
									<li>
										<a href="index.html">Главная</a>
									</li>
									<li>
										<a href="about_us.html">О нас</a>
									</li>
									<li>
										<a href="services.html">Услуги</a>
										<ul>
											<li>
												<a href="services_landing.html">Лендинг</a>
											</li>
											<li>
												<a href="services_online_shop.html">Интернет-магазин</a>
											</li>
										</ul>
									</li>
									<li> <a href="portfolio.html">Портфолио</a> </li>

									<li>
										<a href="blog.html">Блог</a>
									</li>
									<li>
										<a href="contacts.html">Контакты</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Хлебные крошки (навигация) -->
	<? if ($APPLICATION->GetCurDir() !== '/') : ?>
		<div class="breadcrumb-area brand-bg ptb-10">
			<div class="container width-100">
				<div class="row z-index">
					<div class="col-md-7 col-sm-6">
						<div class="breadcrumb-title">
							<h2 class="white-text"><? $APPLICATION->ShowTitle(false); ?></h2>
						</div>
					</div>
					<div class="col-md-5 col-sm-6">
						<div class="breadcrumb-menu">
							<ol class="breadcrumb text-right">
								<li>
									<a href="/">Главная</a>
								</li>
								<li>
									<a href="#">О нас</a>
								</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	<? endif ?>