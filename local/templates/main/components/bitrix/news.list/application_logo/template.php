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
<div class="services-block__container">
	<h2 class="services-block__title">Способы нанесения</h2>
	<div class="services-block__grid">


		<? foreach ($arResult["ITEMS"] as $arItem) : ?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="card-more">
				<div class="card-more__image-ibg card-more__image-ibg_contain">
					<picture>
						<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
					</picture>
				</div>
				<div class="card-more__content">
					<div class="card-more__title"><?= $arItem["NAME"] ?></div>
					<div class="card-more__text"><?= $arItem["PREVIEW_TEXT"] ?></div>
					<div class="card-more__more">
						<span>Подробнее</span>
						<svg>
							<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
						</svg>
					</div>
				</div>
				<a href="<?= $arItem["DETAIL_PAGE_URL"] ?>" class="card-more__link"></a>
			</div>

		<? endforeach; ?>
	</div>
</div>