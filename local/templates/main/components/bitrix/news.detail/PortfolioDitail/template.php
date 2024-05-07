<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>


<!-- Контент для детальной страниыцы портфолио -->
<div class="single-portfolio-area pt-90 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="portfolio-details">
					<h3>Интернет-магазин Dress & Jeans</h3>
					<span class="text-colort-blue">Дизайн</span>
					<p>При разработке проекта был отрисован индивидуальный дизайн по виденью заказчика с детальной проработкой UI/UX.</p>
					<span class="text-colort-blue">Интеграции</span>
					<p>На данном проекте реализовали интеграцию с множеством сервисов: AmoCRM (CRM-система),
						Яндекс касса и PayPal (онлайн оплата), Ggoogle analytics, 1C и многими другими</p>
					<span class="text-colort-blue">SEO-оптимизация</span>
					<p>При программировании были учтены все требования для успешного продвижения в поисковых системах и
						была настроена система аналитики для того, чтобы можно было замерять все основные показатели сайта.</p>
				</div>
			</div>
			<div class="col-md-5">
				<div class="portfolio-meta">
					<ul>
						<li><span><b>Заказчик:</b> </span> DJ Shops</li>
						<li><span><b>Сделано за:</b> </span> 25 дней</li>
						<li><span><b>Технологии:</b> </span> PHP / Laravel / HTML5 / CSS3</li>
					</ul>
					<a href="#" class="btn mt-30">Посмотреть сайт</a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Фотогалерея -->
<div class="img-gallery-area pt-30 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-4">
				<div class="img-gallery hover-bg-opacity mb-30">
					<a class="image-link" href="img/portfolio/dj2.jpg">
						<img src="img/portfolio/dj2.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-md-6 col-sm-4">
				<div class="img-gallery hover-bg-opacity mb-30">
					<a class="image-link" href="img/portfolio/dj3.jpg">
						<img src="img/portfolio/dj3.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-md-6 col-sm-4">
				<div class="img-gallery hover-bg-opacity mb-30">
					<a class="image-link" href="img/portfolio/dj5.jpg">
						<img src="img/portfolio/dj5.jpg" alt="" /></a>
				</div>
			</div>
			<div class="col-md-6 col-sm-4">
				<div class="img-gallery hover-bg-opacity mb-30">
					<a class="image-link" href="img/portfolio/dj4.jpg">
						<img src="img/portfolio/dj4.jpg" alt="" /></a>
				</div>
			</div>
		</div>
	</div>
</div>