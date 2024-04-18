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
				<?= $arResult["DETAIL_TEXT"] ?>
			</div>
			<a href="" class="services-detail-fb__btn btn-green" data-popup="#application">Заказать печать</a>
		</div>
		<div class="services-detail-fb__image-ibg services-detail-fb__image-ibg_contain">
			<picture>
				<source srcset="<?= CFile::GetPath($arResult["PROPERTIES"]["PICTURE_DETAIL"]["VALUE"]) ?>" type="image/webp"><img src="<?= CFile::GetPath($arResult["PROPERTIES"]["PICTURE_DETAIL"]["VALUE"]) ?>" alt="">
			</picture>
		</div>

	</div>
</div>
<?if(!empty($arResult["PROPERTIES"]["HTML_QUESTION"]['~VALUE']['TEXT'])):?>
<div class="services-detail-main">
	<div class="services-detail-main__container">
		<?=$arResult["PROPERTIES"]["HTML_QUESTION"]['~VALUE']['TEXT']?>


	</div>
</div>
<?endif;?>
<div class="services-block">
	<div class="services-block__container">
		<h2 class="services-block__title">Вас может заинтересовать</h2>
		<div class="services-block__grid">
			<? foreach ($arResult["SECTION"] as $key => $value) {
				if ($key == "PATH") {
					continue;
				}
			?>
				<div class="card-more">
					<div class="card-more__image-ibg card-more__image-ibg_contain">
						<picture>
							<source srcset="<?=CFile::GetPath($value['UF_PICTURE'])?>" type="image/webp"><img src="<?=CFile::GetPath($value['UF_PICTURE'])?>" alt="">
						</picture>
					</div>
					<div class="card-more__content">
						<div class="card-more__title"><?= $value["NAME"] ?></div>
						<div class="card-more__text"><?= $value["DESCRIPTION"] ?></div>
						<div class="card-more__more">
							<span>Подробнее</span>
							<svg>
								<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
							</svg>
						</div>
					</div>
					<a href="/services/<?= $value["CODE"] ?>/" class="card-more__link"></a>
				</div>
			<?
			} ?>



		</div>
	</div>
</div>

<div class="page-form">
	<div class="page-form__container">
		<div class="page-form__main">
			<h2 class="page-form__title">Оставить заявку</h2>
			<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
			<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change">
				<input type="hidden" name="action" value="servisec-print">
				<div class="form__line">
					<label for="" class="form__label">Ваше имя*</label>
					<input required id="" type="text" name="name" class="form__input">
					<svg class="form__clear-svg">
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#input_clear"></use>
					</svg>
				</div>
				<div class="form__line">
					<label for="" class="form__label">Телефон*</label>
					<input required id="" type="tel" name="phone" class="form__input js_phone">
					<svg class="form__clear-svg">
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#input_clear"></use>
					</svg>
				</div>
				<div class="form__line">
					<label for="" class="form__label">Опишите задачу</label>
					<textarea id="" autocomplete="off" name="comment" class="form__input"></textarea>
					<svg class="form__clear-svg">
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#input_clear"></use>
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
				<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/page-form-bg.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/page-form-bg.png" alt="">
			</picture>
			<img src="<?= SITE_TEMPLATE_PATH ?>/img/page-form-fig.svg" alt="" class="page-form__fig-img">
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