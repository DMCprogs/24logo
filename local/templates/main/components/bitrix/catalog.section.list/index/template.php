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

$arViewModeList = $arResult['VIEW_MODE_LIST'];


$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>


<div class="services-block__grid">
<?
foreach ($arResult['SECTIONS'] as &$arSection) {
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

?>

	<div class="card-more">
		<div class="card-more__image-ibg card-more__image-ibg_contain">
			<picture>
				<source srcset="<?=CFile::GetPath($arSection['UF_PICTURE'])?>" type="image/webp"><img src="<?=CFile::GetPath($arSection['UF_PICTURE'])?>" alt="">
			</picture>
		</div>
		<div class="card-more__content">
			<div class="card-more__title"><?= $arSection["NAME"]; ?></div>
			<div class="card-more__text"><?= $arSection['DESCRIPTION']; ?></div>
			<div class="card-more__more">
				<span>Подробнее</span>
				<svg>
					<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
				</svg>
			</div>
		</div>
		<a href="/services/<?= $arSection["CODE"] ?>/" class="card-more__link"></a>
	</div>


<?

}

?>
</div>