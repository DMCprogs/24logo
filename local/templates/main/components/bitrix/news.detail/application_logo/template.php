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
			<h1 class="services-detail-fb__title page-title"><?= $arResult["NAME"] ?></h1>
			<div class="services-detail-fb__descr">
				<?= $arResult["PREVIEW_TEXT"] ?>
			</div>
			<a href="" class="services-detail-fb__btn btn-green" data-popup="#application">Заказать печать</a>
		</div>
		<div class="services-detail-fb__image-ibg services-detail-fb__image-ibg_contain">
			<picture>
				<source srcset="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" type="image/webp"><img src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>" alt="">
			</picture>
		</div>

	</div>
</div>

<div class="mp-features mp-features_white">
	<div class="mp-features__container no-grid">
		<h2 class="mp-features__title">Преимущества технологии</h2>
	</div>
	<div class="mp-features__container">

		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/07.svg" alt=""></div>
			<div class="mp-features__text">Стойкое изображение</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/08.svg" alt=""></div>
			<div class="mp-features__text">Тактильно приятная печать</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/09.svg" alt=""></div>
			<div class="mp-features__text">Позволяет печатать тиражи впрок</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/10.svg" alt=""></div>
			<div class="mp-features__text">Нанесение на любой материал</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/11.svg" alt=""></div>
			<div class="mp-features__text">Скорость печати</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/12.svg" alt=""></div>
			<div class="mp-features__text">Высокая детализация картинок</div>
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
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-slider-left"></use>
					</svg>
				</button>
				<button type="button" class="swiper-button-next">
					<svg>
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-slider-right"></use>
					</svg>
				</button>
			</div>
			<div class="work-examples__wrapper swiper-wrapper">
				<?

				foreach ($arResult["PROPERTIES"]['WORKS']['VALUE'] as $key => $value) {
					$img = CFile::GetPath($value);
				?>
					<div class="work-examples__slide swiper-slide">
						<a href="" class="work-examples__image-ibg">
							<picture>
								<source srcset="<?= $img = CFile::GetPath($value); ?>" type="image/webp"><img src="<?= $img = CFile::GetPath($value); ?>" alt="">
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

<div class="price-block">
	<div class="price-block__container">
		<h2 class="price-block__title"><?= $arResult["PROPERTIES"]['TYPE_TECHNOLOGY']['VALUE'] ?></h2>
		<div class="price-block__subtitle">В работу принимается тираж от 10 шт</div>
		<div class="price-block__table">
			<?= $arResult["DETAIL_TEXT"] ?>
		</div>
		<div class="price-block__caption">*
			Цены указаны в рублях за лист А4 / А5</div>
	</div>
</div>
<? if (!empty($arResult["PROPERTIES"]['DESK_FOUR_SECTION']['~VALUE']['TEXT'])) : ?>
	<div class="rules-block">
		<div class="rules-block__container">
			<div class="rules-block__main">
				<h2 class="rules-block__title">Правила ухода за одеждой</h2>
				<div data-showmore="items" class="rules-block__content">
					<div data-showmore-content class="rules-block__text">

						<?= $arResult["PROPERTIES"]['DESK_FOUR_SECTION']['~VALUE']['TEXT'] ?>

					</div>

				</div>
			</div>
			<div class="rules-block__image-ibg">
				<picture>
					<source srcset="<?= CFile::GetPath($arResult["PROPERTIES"]['IMG_FOUR_SECTION']['VALUE']) ?>" type="image/webp"><img src="<?= CFile::GetPath($arResult["PROPERTIES"]['IMG_FOUR_SECTION']['VALUE']) ?>" alt="">
				</picture>
				<img src="<?= SITE_TEMPLATE_PATH ?>/img/page-form-fig.svg" alt="" class="rules-block__fig-img">
			</div>
		</div>
	</div>
<? endif; ?>
<div class="prepare-price">
	<div class="prepare-price__container">
		<h2 class="prepare-price__title">Подготовка макета</h2>
		<div class="prepare-price__grid">
			<? foreach ($arResult["MAKET"] as $key => $maket) {



			?>


				<div class="price-card">
					<div class="price-card__image-ibg price-card__image-ibg_contain">
						<picture>
							<source srcset="<?= CFile::GetPath($maket["PREVIEW_PICTURE"]) ?>" type="image/webp"><img src="<?= CFile::GetPath($maket["PREVIEW_PICTURE"]) ?>" alt="">
						</picture>
					</div>
					<div class="price-card__content">
						<div class="price-card__title"><?= $maket["NAME"] ?></div>
						<div class="price-card__text"><?= $maket["PREVIEW_TEXT"] ?></div>
						<div class="price-card__price"><?= $maket["PROPERTY_PRICE_VALUE"] ?>₽</div>
					</div>
				</div>
			<?
			} ?>


		</div>
		<a href="" class="prepare-price__link link-more">
			<span>Заказать макет</span>
			<svg>
				<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
			</svg>
		</a>
	</div>
</div>
<? if (!empty($arResult["PROPERTIES"]['DESK_PROCESS']['~VALUE']['TEXT'])) : ?>
	<div class="text-block">
		<div class="text-block__container">
			<div class="text-block__image-ibg">
				<picture>
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/text-block-02.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/text-block-02.png" alt="">
				</picture>
			</div>
			<div class="text-block__main">
				<h3 class="text-block__title">Описание процесса</h3>
				<div class="text-block__content">

					<?= $arResult["PROPERTIES"]['DESK_PROCESS']['~VALUE']['TEXT'] ?>


				</div>
			</div>
		</div>
	</div>
<? endif; ?>
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