<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<? if (!empty($arResult)) : ?>
	<div class="header-main-menu hidden-xs">
		<nav id="primary-menu">
			<ul class="main-menu text-right">
				<?
				foreach ($arResult as $arItem) :
					if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
						continue;
				?>
					<? if ($arItem["SELECTED"]) : ?>
						<li><a href="<?= $arItem["LINK"] ?>" class="selected"><?= $arItem["TEXT"] ?></a></li>
					<? else : ?>
						<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
					<? endif ?>
				<? endforeach ?>
			</ul>
		</nav>
	</div>
<? endif ?>

<!-- <ul class="dropdown">
	<li>
		<a href="services_landing.html">Лендинг</a>
	</li>
	<li>
		<a href="services_online_shop.html">Интернет-магазин</a>
	</li>
</ul> -->