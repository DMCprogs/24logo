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
<div class="services">
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
		<h1 class="services__title page-title">Услуги</h1>
		<div class="services__main">
			<?
			foreach ($arResult['SECTIONS'] as &$arSection) {
				$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
				$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

			?>

				<div class="services__item">
					<a href="/services/<?= $arSection["CODE"] ?>/" class="services__item-link"></a>
					<div class="services__image-ibg">
						<picture>
							<source srcset="<?=CFile::GetPath($arSection['UF_PICTURE'])?>" type="image/webp"><img src="<?=CFile::GetPath($arSection['UF_PICTURE'])?>" alt="">
						</picture>
					</div>
					<div class="services__item-content">
						<h2 class="services__item-title"><?= $arSection["NAME"]; ?></h2>
						<div class="services__item-descr">
							<p><?= $arSection['DESCRIPTION']; ?></p>
						</div>
					</div>
					<div class="services__links">
						

 
						<? foreach ($arResult["UF_CHILD_SECTION"] as $key => $value) {
                              
							  if($value["IBLOCK_SECTION_ID"]!=$arSection['ID']){
								continue;

							  }
						?>

							<a href="/print/<?= $value["CODE"] ?>/" class="services__link link-more">
								<span><?= $value["NAME"] ?></span>
								<svg>
									<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
								</svg>
							</a>
						<?
						} ?>


					</div>
				</div>
			<?

			}
			?>


		</div>
	</div>
</div>
