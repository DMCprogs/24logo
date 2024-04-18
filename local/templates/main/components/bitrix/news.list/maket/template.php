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
	<div class="services-detail-fb">
		<div class="services-detail-fb__container">
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

			<div class="services-detail-fb__main">
				<h1 class="services-detail-fb__title page-title"><?= $arItem["NAME"] ?></h1>
				<div class="services-detail-fb__descr">
					<?= $arItem["PREVIEW_TEXT"] ?>
				</div>
				<a href="" class="services-detail-fb__btn btn-green" data-popup="#application">Оставить заявку</a>
				<div class="services-detail-fb__bottom-text">*
					Стоимость в рублях за 1 изображение на тираж</div>
			</div>
			<div class="services-detail-fb__image-ibg services-detail-fb__image-ibg_contain">
				<picture>
					<source srcset="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="">
				</picture>
			</div>

		</div>
	</div>

	<div class="prepare-price">
		<div class="prepare-price__container">
			<h2 class="prepare-price__title">Подготовка макета</h2>
			<div class="prepare-price__grid">
				<?
				foreach ($arResult["MAKET"] as $key => $maket) {

				?>

					<div class="price-card">
						<div class="price-card__image-ibg price-card__image-ibg_contain">
							<picture>
								<source srcset="<?= CFile::GetPath($maket["PREVIEW_PICTURE"] ) ?>" type="image/webp"><img src="<?= CFile::GetPath($maket["PREVIEW_PICTURE"] ) ?>" alt="">
							</picture>
						</div>
						<div class="price-card__content">
							<div class="price-card__title"><?= $maket["NAME"] ?></div>
							<div class="price-card__text"><?= $maket["PREVIEW_TEXT"] ?></div>
							<div class="price-card__price"><?= $maket["PROPERTY_PRICE_VALUE"] ?> ₽</div>
						</div>
					</div>

				<?
				}
				?>


			</div>
		</div>
	</div>

	<div class="text-block">
		<div class="text-block__container">
			<div class="text-block__image-ibg">
				<picture>
					<source srcset="<?= CFile::GetPath( $arItem["PROPERTIES"]["IMG_DESK"]["VALUE"] ) ?>" type="image/webp"><img src="<?= CFile::GetPath( $arItem["PROPERTIES"]["IMG_DESK"]["VALUE"] ) ?>" alt="">
				</picture>
			</div>
			<div class="text-block__main">
				<h3 class="text-block__title">Описание процесса</h3>
				<div class="text-block__content">
					<?= $arItem["PROPERTIES"]["TEXT_IMG"]["VALUE"]["TEXT"] ?>
				</div>
			</div>
		</div>
	</div>

	<div class="work-examples">
		<div class="work-examples__container">
			<h2 class="work-examples__title">Наши работы </h2>
			<div class="work-examples__slider swiper">
				<div class="work-examples__nav">
					<button type="button" class="swiper-button-prev">
						<svg>
							<use xlink:href="img/icons/icons.svg#arrow-slider-left"></use>
						</svg>
					</button>
					<button type="button" class="swiper-button-next">
						<svg>
							<use xlink:href="img/icons/icons.svg#arrow-slider-right"></use>
						</svg>
					</button>
				</div>
				<div class="work-examples__wrapper swiper-wrapper">
					<?
					foreach ($arItem["PROPERTIES"]["WORKS"]["VALUE"] as $key => $works) {

					?>
						<div class="work-examples__slide swiper-slide">
							<a href="" class="work-examples__image-ibg">
								<picture>
									<source srcset="<?= CFile::GetPath($works) ?>" type="image/webp"><img src="<?= CFile::GetPath($works) ?>" alt="">
								</picture>
							</a>
						</div>
					<?
					}
					?>


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
					<input type="hidden" value="make-maket" name="action">
					<div class="form__line">
						<label for="" class="form__label">Ваше имя*</label>
						<input required id="" type="text" name="name" class="form__input">
						<svg class="form__clear-svg">
							<use xlink:href="img/icons/icons.svg#input_clear"></use>
						</svg>
					</div>
					<div class="form__line">
						<label for="" class="form__label">Телефон*</label>
						<input required id="" type="tel" name="phone" class="form__input js_phone">
						<svg class="form__clear-svg">
							<use xlink:href="img/icons/icons.svg#input_clear"></use>
						</svg>
					</div>
					<div class="form__line">
						<label for="" class="form__label">Опишите задачу</label>
						<textarea id="" autocomplete="off" name="commentary" class="form__input"></textarea>
						<svg class="form__clear-svg">
							<use xlink:href="img/icons/icons.svg#input_clear"></use>
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

	<div class="faq-block">
		<div class="faq-block__container">
			<h2 class="faq-block__title">FAQ</h2>
			<div data-spollers class="faq-block__spollers spollers">
				<?
				foreach ($arResult["FAQ"] as $key => $question) {

				?>


					<div class="spollers__item">
						<button type="button" data-spoller class="spollers__title"><?= $question["NAME"] ?></button>
						<div class="spollers__body"><?= $question["PREVIEW_TEXT"] ?></div>
					</div>
				<?
				}
				?>
			</div>
		</div>
	</div>

<? endforeach; ?>