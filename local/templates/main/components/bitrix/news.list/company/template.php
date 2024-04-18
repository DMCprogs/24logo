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


<? foreach ($arResult["ITEMS"] as $arItem) : ?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="about">
		<div class="about__container">
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
			<div class="about__grid">
				<div class="about__main">
					<h1 class="about__title page-title"><?= $arItem["NAME"] ?></h1>
					<div class="about__text">
						<?= $arItem["PREVIEW_TEXT"] ?>
					</div>
				</div>
				<div class="about__image-ibg">
					<picture>
						<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
					</picture>
				</div>
			</div>
		</div>
	</div>

	<div class="mp-features mp-features_white">
		<div class="mp-features__container">
			<div class="mp-features__item">
				<div class="mp-features__image-ibg"><img src="<?=SITE_TEMPLATE_PATH?>/img/features/13.svg" alt=""></div>
				<div class="mp-features__text">Гарантия качества</div>
			</div>
			<div class="mp-features__item">
				<div class="mp-features__image-ibg"><img src="<?=SITE_TEMPLATE_PATH?>/img/features/02.svg" alt=""></div>
				<div class="mp-features__text">Быстрые сроки исполнения</div>
			</div>
			<div class="mp-features__item">
				<div class="mp-features__image-ibg"><img src="<?=SITE_TEMPLATE_PATH?>/img/features/03.svg" alt=""></div>
				<div class="mp-features__text">Акции и скидки</div>
			</div>
		</div>
	</div>

	<div class="work-examples work-examples_grey">
		<div class="work-examples__container">
			<h2 class="work-examples__title">Примеры работ</h2>
			<div class="work-examples__slider swiper">
				<div class="work-examples__nav">
					<button type="button" class="swiper-button-prev">
						<svg>
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-slider-left"></use>
						</svg>
					</button>
					<button type="button" class="swiper-button-next">
						<svg>
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons/icons.svg#arrow-slider-right"></use>
						</svg>
					</button>
				</div>
				<div class="work-examples__wrapper swiper-wrapper">

					<?
					foreach ($arItem["PROPERTIES"]["WORKS_EXAMPLE"]["VALUE"] as $key => $value) {
					?>
						<div class="work-examples__slide swiper-slide">
							<a href="" class="work-examples__image-ibg">
								<picture>
									<source srcset="<?= CFile::GetPath($value) ?>" type="image/webp"><img src="<?= CFile::GetPath($value) ?>" alt="">
								</picture>
							</a>
						</div>

					<?
					} ?>
				</div>
			</div>
		</div>
	</div>

	<div class="page-form">
		<div class="page-form__container">
			<div class="page-form__main">
				<h2 class="page-form__title">Оставить заявку</h2>
				<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
				<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change">
					<input type="hidden" name="action" value="company">
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
				<picture>
					<source srcset="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.webp" type="image/webp"><img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-bg.png" alt="">
				</picture>
				<img src="<?=SITE_TEMPLATE_PATH?>/img/page-form-fig.svg" alt="" class="page-form__fig-img">
			</div>
		</div>
	</div>


<? endforeach; ?>