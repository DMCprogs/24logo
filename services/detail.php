<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Услуги ");
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$path = parse_url($url, PHP_URL_PATH);
$code = array_pop(explode("/", trim($path, "/")));
?><?

	CModule::IncludeModule("iblock");


	// фильтру указываем ID раздела и ID его инфоблока
	$arFilter = array('IBLOCK_ID' => 9, 'CODE' => $code);
	$arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'SECTION_PAGE_URL', 'PICTURE', 'UF_FAQ', 'UF_APPLICATION', 'UF_PRINT_SERVICES', 'CODE', 'DESCRIPTION', 'UF_WORK_EXAMPLE',"UF_PICTURE");
	$rsSect = CIBlockSection::GetList(
		array("SORT" => "ASC"), //сортировка
		$arFilter, //фильтр (выше объявили)
		false, //выводить количество элементов - нет
		$arSelect //выборка вывода, нам нужно только название, описание, картинка
	);

	while ($arSect = $rsSect->GetNext()) {
		$arResult["SECTION"] = $arSect;
	}
	$arSelect = array("NAME", "PREVIEW_TEXT");
	$arFilter = array("IBLOCK_ID" => 5, "ID" => $arResult["SECTION"]["UF_FAQ"]);
	$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
	$keyfaq = 0;

	while ($ob = $res->Fetch()) {

		$arResult["FAQ"][$keyfaq] = $ob;
		$keyfaq++;
	}
	$arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT", "IBLOCK_SECTION_ID","PROPERTY_PICTURE_DETAIL");
	$arFilter = array("IBLOCK_ID" => 9);
	$res = CIBlockElement::GetList(array(), $arFilter, false, array(),  $arSelect);
	$keySection = 0;

	while ($ob = $res->Fetch()) {


		$arResult["PRINT_SERVICES"][$keySection] = $ob;
		$keySection++;
	}


	$arSelect = array("ID", "NAME", "DATE_ACTIVE_FROM", "CODE", "PREVIEW_PICTURE", "PREVIEW_TEXT");
	$arFilter = array("IBLOCK_ID" => 10, "ID" => $arResult["SECTION"]["UF_APPLICATION"]);
	$res = CIBlockElement::GetList(array(), $arFilter, false, array(), $arSelect);
	$keyapp = 0;

	while ($ob = $res->Fetch()) {

		$arResult["APPLICATION"][$keyapp] = $ob;
		$keyapp++;
	}
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
			<h1 class="services-detail-fb__title page-title"><?= $arResult["SECTION"]["NAME"] ?></h1>
			<div class="services-detail-fb__descr">
				<?= $arResult["SECTION"]["DESCRIPTION"] ?>
			</div>
			<a href="" class="services-detail-fb__btn btn-green" data-popup="#application">Заказать печать</a>
		</div>
		<div class="services-detail-fb__image-ibg services-detail-fb__image-ibg_contain">
			<picture>
				<source srcset="<?= CFile::GetPath($arResult["SECTION"]["UF_PICTURE"]) ?>" type="image/webp"><img src="<?= CFile::GetPath($arResult["SECTION"]["UF_PICTURE"]) ?>" alt="">
			</picture>
		</div>

	</div>
</div>

<div class="printing-services">
	<div class="printing-services__container">
		<h2 class="printing-services__title">Услуги нанесения</h2>
		<div class="printing-services__grid">
			<? foreach ($arResult["PRINT_SERVICES"] as $key => $value) {

				if ($value["IBLOCK_SECTION_ID"] != $arResult["SECTION"]["ID"]) {
					continue;
				}
			?>

				<div class="card-more">
					<div class="card-more__image-ibg card-more__image-ibg_contain">
						<picture>
							<source srcset="<?= CFile::GetPath($value["PROPERTY_PICTURE_DETAIL_VALUE"]) ?>" type="image/webp"><img src="<?= CFile::GetPath($value["PROPERTY_PICTURE_DETAIL_VALUE"]) ?>" alt="">
						</picture>
					</div>
					<div class="card-more__content">
						<div class="card-more__title"><?= $value['NAME'] ?></div>
						<div class="card-more__text"><?= $value['PREVIEW_TEXT'] ?></div>
						<div class="card-more__more">
							<span>Подробнее</span>
							<svg>
								<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
							</svg>
						</div>
					</div>
					<a href="/print/<?= $value['CODE'] ?>/" class="card-more__link"></a>
				</div>
			<?
			} ?>

		</div>
	</div>
</div>

<div class="mp-features">
	<div class="mp-features__container">
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/04.svg" alt=""></div>
			<div class="mp-features__content">
				<div class="mp-features__top-text">Минимальный тираж</div>
				<div class="mp-features__text">10 шт</div>
			</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/05.svg" alt=""></div>
			<div class="mp-features__content">
				<div class="mp-features__top-text">Минимальный срок изготовления</div>
				<div class="mp-features__text">1 день</div>
			</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/06.svg" alt=""></div>
			<div class="mp-features__content">
				<div class="mp-features__top-text">Скидка на заказ <br> от 1000 шт</div>
				<div class="mp-features__text">10%</div>
			</div>
		</div>
	</div>
</div>

<div class="work-examples">
	<div class="work-examples__container">
		<h2 class="work-examples__title">Примеры выполненных работ по нанесению на одежде</h2>
		<div class="work-examples__slider swiper">
			<div class="work-examples__nav">
				<button type="button" class="swiper-button-prev">
					<svg>
						<use xlink:href="/local/templates/main/img/icons/icons.svg#arrow-slider-left"></use>
					</svg>
				</button>
				<button type="button" class="swiper-button-next">
					<svg>
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-slider-right"></use>
					</svg>
				</button>
			</div>
			<div class="work-examples__wrapper swiper-wrapper">
				<? foreach ($arResult["SECTION"]["UF_WORK_EXAMPLE"] as $key => $value) {

				?>
					
					<div class="work-examples__slide swiper-slide">
						<a href="" class="work-examples__image-ibg">
							<picture>
								<source srcset="<?= CFile::GetPath($value); ?>" type="image/webp"><img src="<?= CFile::GetPath($value); ?>" alt="">
							</picture>
						</a>
					</div>
				<?
				} ?>


			</div>
		</div>
	</div>
</div>

<div class="services-block services-block_grey">
	<div class="services-block__container">
		<h2 class="services-block__title">Способы нанесения</h2>
		<div class="services-block__grid">
			<?
			foreach ($arResult["APPLICATION"] as $key => $value) {

			?>


				<div class="card-more">
					<div class="card-more__image-ibg card-more__image-ibg_contain">
						<picture>
							<source srcset="<?= CFile::GetPath($value["PREVIEW_PICTURE"]) ?>" type="image/webp"><img src="<?= CFile::GetPath($value["PREVIEW_PICTURE"]) ?>" alt="">
						</picture>
					</div>
					<div class="card-more__content">
						<div class="card-more__title"><?= $value["NAME"] ?></div>
						<div class="card-more__text"><?= $value["PREVIEW_TEXT"] ?></div>
						<div class="card-more__more">
							<span>Подробнее</span>
							<svg>
								<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons/icons.svg#arrow-more"></use>
							</svg>
						</div>
					</div>
					<a href="/application/<?= $value['CODE'] ?>/" class="card-more__link"></a>
				</div>
			<?
			}
			?>


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





<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>