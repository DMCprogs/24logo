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
<div class="works">
	<div class="works__container">
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
		<h1 class="works__title page-title">Наши работы</h1>
		<div class="works__text">На странице "Наши работы" вы сможете увидеть примеры нашего профессионального нанесения логотипов на специализированную одежду. Мы предлагаем разнообразные варианты декорирования, чтобы вы смогли подчеркнуть уникальность своего бренда.</div>
		<div class="works__grid">
			<? foreach ($arResult["ITEMS"] as $i => $arItem) : ?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div <?= ($i >= $arResult["ITEMS"][0]["PROPERTIES"]["ELEMENT_COUNT"]["VALUE"]) ? 'class="hidden_card"' : 'class="work-card"' ?>>
					<a href="" class="work-card__link"></a>
					<div class="work-card__image-ibg">
						<picture>
							<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
						</picture>
					</div>
					<div class="work-card__name"><?= $arItem["NAME"] ?></div>
					<div class="work-card__descr"><?= $arItem["PREVIEW_TEXT"] ?></div>
				</div>





			<? endforeach; ?>
		</div>
		<button id="show-more-btn" class="works__link-more link-more">
			<span>Показать ещё</span>
			<svg>
				<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-more"></use>
			</svg>
		</button>
	</div>
</div>
<div class="page-form page-form_dark">
	<div class="page-form__container">
		<div class="page-form__main">
			<h2 class="page-form__title">Оставить заявку</h2>
			<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
			<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change">
			<input type="hidden" name="action" value="work-callback">
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
					<label for="" class="form__label">Опишите задачу</label>
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
			<picture>
				<source srcset="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.png" alt="">
			</picture>
			<img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-fig.svg" alt="" class="page-form__fig-img">
		</div>
	</div>
</div>






<script>
	addWorks(<?= $arResult["ITEMS"][0]["PROPERTIES"]["ELEMENT_COUNT"]["VALUE"] ?>);
</script>