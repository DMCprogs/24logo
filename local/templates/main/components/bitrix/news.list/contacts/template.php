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
     <div class="contacts">
				<div class="contacts__container">
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
					<div class="contacts__grid">
						<div class="contacts__main">
							<h1 class="contacts__title page-title">Контакты</h1>
							<div class="contacts__links">
								<a href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>" class="contacts__link">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/contact-phone.svg" alt="">
									<span><?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?></span>
								</a>
								<a href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>" class="contacts__link">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/contact-mail.svg" alt="">
									<span><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></span>
								</a>
								<div class="contacts__link">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/icons/contact-map-pin.svg" alt="">
									<span><?=$arItem["PROPERTIES"]["ADDRES"]["VALUE"]?></span>
								</div>
							</div>
						</div>
						<div class="contacts__map">
							<div id="map"></div>
							<script>
								if (document.querySelector('#map')) {
									mapAdd();

									function mapAdd() {
										let tag = document.createElement('script');
										tag.src = "https://api-maps.yandex.ru/2.1/?apikey=0aa2f6b6-353d-4a10-bb62-97763a975ef4&lang=ru_RU";
										let firstScriptTag = document.getElementsByTagName('script')[0];
										firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
									}
									setTimeout(function() {

										ymaps.ready(init);

										function init() {
											var myMap = new ymaps.Map("map", {
												center: [56.06431302077033, 92.98107201553687],
												zoom: 17,
												controls: ['zoomControl'],
											});
											let addresFirst = new ymaps.Placemark([56.06431302077033, 92.98107201553687], {}, {
												iconLayout: 'default#imageWithContent',
												iconImageHref: '<?=SITE_TEMPLATE_PATH?>/img/icons/map-marker.svg',
												iconImageSize: [68, 82],
												iconImageOffset: [-30, -80],
												iconContentOffset: [0, 0],
											});
											myMap.geoObjects.add(addresFirst);
											myMap.behaviors.disable('scrollZoom');
										}

									}, 1000);
								}
							</script>
						</div>
					</div>
				</div>
			</div>

			<div class="page-form page-form_dark">
				<div class="page-form__container">
					<div class="page-form__main">
						<h2 class="page-form__title">Оставить заявку</h2>
						<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
						<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change">
						<input type="hidden" name="action" value="contacts">
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
								<label for="" class="form__label">Ваше сообщение</label>
								<textarea id="" autocomplete="off" name="comment" class="form__input"></textarea>
								<svg class="form__clear-svg">
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#input_clear"></use>
								</svg>
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


	
	

</div>
</div>
<?endforeach;?>


