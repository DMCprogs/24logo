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

<?foreach($arResult["ITEMS"] as $arItem):?>


	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
<div class="price-page">

<div class="price-page__container">
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
	<h1 class="price-page__title page-title">Стоимость</h1>
	<div class="price-page__text">Цена печати зависит от многих факторов, ниже представлены таблицы, с помощью которых вы сможете оценить стоимость вашего заказа</div>
</div>

<div class="price-block">
	<div class="price-block__container">
		<h2 class="price-block__title">Стоимость печати по технологии DTF</h2>
		<div class="price-block__subtitle">В работу принимается тираж от 10 шт</div>
		<?if(!empty($arItem["PROPERTIES"]["FIRST_TABLE"]["~VALUE"]["TEXT"])):?>
		<div class="price-block__table">
			<?=$arItem["PROPERTIES"]["FIRST_TABLE"]["~VALUE"]["TEXT"]?>
		</div>
		<?endif;?>
		<div class="price-block__caption">*
			Цены указаны в рублях за лист А4 / А5</div>
	</div>
</div>

<div class="price-block">
	<div class="price-block__container">
		<h2 class="price-block__title">Стоимость печати с термопленкой</h2>
		<div class="price-block__subtitle">В работу принимается тираж от 10 шт</div>
		<?if(!empty($arItem["PROPERTIES"]["SECOND_TABLE"]["~VALUE"]["TEXT"])):?>
		<div class="price-block__table">
		<?=$arItem["PROPERTIES"]["SECOND_TABLE"]["~VALUE"]["TEXT"]?>
		</div>
		<?endif;?>
		<div class="price-block__caption">*
			Цены указаны в рублях за лист А4 / А5</div>
	</div>
</div>

<div class="price-block">
	<div class="price-block__container">
		<h2 class="price-block__title">Стоимость вышивки</h2>
		<div class="price-block__subtitle">В работу принимается тираж от 10 шт</div>
		<?if(!empty($arItem["PROPERTIES"]["THIRD_TABLE"]["~VALUE"]["TEXT"])):?>
		<div class="price-block__table">
		<?=$arItem["PROPERTIES"]["THIRD_TABLE"]["~VALUE"]["TEXT"]?>
		</div>
		<?endif;?>
		<div class="price-block__caption">*
			Цены указаны в рублях за лист А4 / А5</div>
	</div>
</div>

<div class="price-block">
	<div class="price-block__container">
		<h2 class="price-block__title">Стоимость печати  шелкографиейF</h2>
		<div class="price-block__subtitle">В работу принимается тираж от 10 шт</div>
		<?if(!empty($arItem["PROPERTIES"]["FOUR_TABLE"]["~VALUE"]["TEXT"])):?>
		<div class="price-block__table">
		<?=$arItem["PROPERTIES"]["FOUR_TABLE"]["~VALUE"]["TEXT"]?>
		</div>
		<?endif;?>
		<div class="price-block__caption">*
			Цены указаны в рублях за лист А4 / А5</div>
	</div>
</div>

<div class="services-detail-main">
<?if(!empty($arItem["PROPERTIES"]["HTML_QUESTION"]["~VALUE"]["TEXT"])):?>
	<div class="services-detail-main__container">
	<?=$arItem["PROPERTIES"]["HTML_QUESTION"]["~VALUE"]["TEXT"]?>
	</div>
	<?endif;?>
</div>

</div>

<div class="page-form">
<div class="page-form__container">
	<div class="page-form__main">
		<h2 class="page-form__title">Оставить заявку</h2>
		<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
		<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change" data-one-select>
			<input type="hidden" name="action" value="price">
			<div class="form__line">
				<label for="" class="form__label">Ваше имя*</label>
				<input required id="" type="text" name="name" class="form__input">
				<svg class="form__clear-svg">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
				</svg>
			</div>
			<div class="form__line">
				<label for="" class="form__label">Телефон*</label>
				<input required id="" type="tel" name="phone" class="form__input js_phone">
				<svg class="form__clear-svg">
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
				</svg>
			</div>
			<div class="form__line">
			<input type="hidden" name="count" id="input-edition" value="">
				<select name="" data-show-selected id="edition">
					<option value selected>Тираж</option>
					<?
					foreach ($arItem["PROPERTIES"]["EDITION"]["VALUE"] as $key => $value) {
						?>
						<option value="<?=$value?>"><?=$value?></option>
						<?
					}
					?>
					
				</select>
			</div>
			<div class="form__line">
				<input type="hidden" id="input-product" name="clothes">
				<select name="" data-show-selected>
					<option value selected>На какой продукции нанесение</option>
					<?
					foreach ($arItem["PROPERTIES"]["PRINT_PRODUCT"]["VALUE"] as $key => $value) {
						?>
						<option value="<?=$value?>"><?=$value?></option>
						<?
					}?>
				</select>
			</div>
			<div class="form__check">
				<label class="checkbox">
					<input required class="checkbox__input" type="checkbox" value="1" name="consent" checked>
					<span class="checkbox__chunk"></span>
					<span class="checkbox__text">Я даю свое <a href="">согласие на обработку персональных данных</a></span>
				</label>
			</div>
			<button type="submit" class="form__button btn-green">Заказать печать</button>
		</form>
	</div>
	<div class="page-form__image-ibg">
		<picture><source srcset="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.png" alt=""></picture>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-fig.svg" alt="" class="page-form__fig-img">
	</div>
</div>
</div>

	
<?endforeach;?>

