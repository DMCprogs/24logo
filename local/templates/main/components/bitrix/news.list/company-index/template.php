<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
<div class="about-block__container">
<div class="about-block__main">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
		
						<h2 class="about-block__title">О компании</h2>
						<div class="about-block__text">
						<?=$arItem["PREVIEW_TEXT"]?>
						</div>
						<a href="/company/" class="about-block__link link-more">
							<span>Подробнее</span>
							<svg>
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-more"></use>
							</svg>
						</a>
					
	

	
<?endforeach;?>

</div>
<div class="about-block__image-ibg"><picture><source srcset="<?=$arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"]?>" type="image/webp"><img src="<?=$arResult["ITEMS"][0]["PREVIEW_PICTURE"]["SRC"]?>" alt=""></picture></div>
</div>