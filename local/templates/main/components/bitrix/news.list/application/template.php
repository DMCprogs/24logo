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

<div class="services services_methods">
	<div class="services__container">
		<nav class="breadcrumbs">
			<ul class="breadcrumbs__list">
				<li class="breadcrumbs__li">
					<a href="" class="breadcrumbs__link">
						Главная
					</a>
				</li>
				<li class="breadcrumbs__li">
					<a href="" class="breadcrumbs__link">
						Крошка
					</a>
				</li>
				<li class="breadcrumbs__li">
					<a href="" class="breadcrumbs__link">
						Крошка
					</a>
				</li>
				<li class="breadcrumbs__li">
					<span class="breadcrumbs__item">Последняя крошка</span>
				</li>
			</ul>
		</nav>
		<h1 class="services__title page-title">Способы нанесения</h1>
		<div class="services__main">

			<? foreach ($arResult["ITEMS"] as $arItem) : ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				


				<div class="services__item">
					<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="services__item-link"></a>
					<div class="services__image-ibg">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
						</picture>
					</div>
					<div class="services__item-content">
						<h2 class="services__item-title"><?= $arItem["NAME"] ?></h2>
						<div class="services__item-descr">
							<?= $arItem["PREVIEW_TEXT"] ?>
						</div>
					</div>
					<div class="services__links">
						<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="services__link link-more">
							<span>Подробнее</span>
							<svg>
								<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
							</svg>
						</a>
					</div>
				</div>

			<? endforeach; ?>



		</div>
	</div>
</div>