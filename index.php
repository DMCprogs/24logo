<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("24logo");
CModule::IncludeModule("iblock");
?>
<div class="first-block">
	<div class="first-block__container">
		<div class="first-block__bg">
			<div class="first-block__human">
				<picture>
					<source srcset="<?= SITE_TEMPLATE_PATH ?>/img/fb-human.webp" type="image/webp"><img src="<?= SITE_TEMPLATE_PATH ?>/img/fb-human.png" alt="">
				</picture>
			</div>

			<div class="first-block__logo">
				<?

				$arSelect = array("ID", "IBLOCK_ID", "NAME", "DATE_ACTIVE_FROM", "PROPERTY_VIDEO"); //IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
				$arFilter = array("IBLOCK_ID" => 14, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "ID" => 44);
				$res = CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
				while ($ob = $res->GetNextElement()) {

					$arProps = $ob->GetProperties();
				}
				?>
				<img src="<?= CFile::GetPath($arProps["VIDEO"]["VALUE"]) ?>" alt="">
			</div>
		</div>
		<div class="first-block__main">
			<h1 class="first-block__title"><? $APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												array(
													"AREA_FILE_SHOW" => "sect",
													"AREA_FILE_SUFFIX" => "inc",
													"AREA_FILE_RECURSIVE" => "Y",
													"EDIT_TEMPLATE" => "standard.php"
												)
											); ?></h1>
			<div class="first-block__descr"><? $APPLICATION->IncludeComponent(
												"bitrix:main.include",
												"",
												array(
													"AREA_FILE_SHOW" => "sect2",
													"AREA_FILE_SUFFIX" => "inc2",
													"AREA_FILE_RECURSIVE" => "Y",
													"EDIT_TEMPLATE" => "standard.php"
												)
											); ?></div>
			<a href="" class="first-block__link btn-green">Заказать печать</a>
		</div>
	</div>
</div>

<div class="services-block">
	<div class="services-block__container">
		<h2 class="services-block__title">Услуги печати</h2>

		<? $APPLICATION->IncludeComponent(
			"bitrix:catalog.section.list",
			"index",
			array(
				"ADDITIONAL_COUNT_ELEMENTS_FILTER" => "additionalCountFilter",	// Дополнительный фильтр для подсчета количества элементов в разделе
				"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
				"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
				"CACHE_GROUPS" => "Y",	// Учитывать права доступа
				"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
				"CACHE_TYPE" => "A",	// Тип кеширования
				"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
				"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
				"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
				"HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",	// Скрывать разделы с нулевым количеством элементов
				"IBLOCK_ID" => "9",	// Инфоблок
				"IBLOCK_TYPE" => "logo",	// Тип инфоблока
				"SECTION_CODE" => "",	// Код раздела
				"SECTION_FIELDS" => array(	// Поля разделов
					0 => "",
					1 => "",
				),
				"SECTION_ID" => "",	// ID раздела
				"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
				"SECTION_USER_FIELDS" => array(	// Свойства разделов
					0 => "UF_CHILD_SECTION",
					1 => "UF_PICTURE",
				),
				"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
				"TOP_DEPTH" => "2",	// Максимальная отображаемая глубина разделов
				"VIEW_MODE" => "LINE",	// Вид списка подразделов
			),
			false
		); ?>


	</div>
</div>

<div class="about-block">

	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"company-index",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"FIELD_CODE" => array(	// Поля
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",	// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "8",	// Код информационного блока
			"IBLOCK_TYPE" => "statick",	// Тип информационного блока (используется только для проверки)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"NEWS_COUNT" => "999",	// Количество новостей на странице
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PARENT_SECTION" => "",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "WORK_EXAMPLE",
			),
			"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
			"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
			"SHOW_404" => "N",	// Показ специальной страницы
			"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
			"COMPONENT_TEMPLATE" => ".default"
		),
		false
	); ?>



</div>

<div class="mp-features">
	<div class="mp-features__container">
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/01.svg" alt=""></div>
			<div class="mp-features__text">Собственное производство</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/02.svg" alt=""></div>
			<div class="mp-features__text">Изготовление в короткие сроки</div>
		</div>
		<div class="mp-features__item">
			<div class="mp-features__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/features/03.svg" alt=""></div>
			<div class="mp-features__text">Скидки постоянным клиентам</div>
		</div>
	</div>
</div>

<div class="mp-qa-block">
	<div class="mp-qa-block__container">
		<h2 class="mp-qa-block__title">Зачем это нужно?</h2>
		<div class="mp-qa-block__descr">Специализированная одежда с логотипом, как способ подчеркнуть корпоративную принадлежность, является неотъемлемой частью формы сотрудников многих компаний</div>
		<div class="mp-qa-block__main">
			<div class="mp-qa-block__card">
				<div class="mp-qa-block__image-ibg mp-qa-block__image-ibg_contain"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/01.svg" alt=""></div>
				<div class="mp-qa-block__card-text">Использование спецодежды с логотипом способствует формированию положительного имиджа компании в глазах клиентов и партнерова </div>
			</div>
			<div class="mp-qa-block__card">
				<div class="mp-qa-block__image-ibg mp-qa-block__image-ibg_contain"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/02.svg" alt=""></div>
				<div class="mp-qa-block__card-text">Повышение узнаваемости бренда и создание единой стилистики внутри компании</div>
			</div>
			<div class="mp-qa-block__card">
				<div class="mp-qa-block__image-ibg mp-qa-block__image-ibg_contain"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/03.svg" alt=""></div>
				<div class="mp-qa-block__card-text">Наличие логотипа на спецодежде позволяет легко отличать сотрудников от посторонних лиц и повышает уровень безопасности на производстве</div>
			</div>
		</div>
	</div>
</div>

<div class="services-block services-block_grey">
	<? $APPLICATION->IncludeComponent(
		"bitrix:news.list",
		"application_logo",
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
			"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
			"AJAX_MODE" => "N",	// Включить режим AJAX
			"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
			"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
			"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
			"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
			"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
			"CACHE_GROUPS" => "Y",	// Учитывать права доступа
			"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
			"CACHE_TYPE" => "A",	// Тип кеширования
			"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
			"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
			"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
			"DISPLAY_DATE" => "Y",	// Выводить дату элемента
			"DISPLAY_NAME" => "Y",	// Выводить название элемента
			"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
			"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
			"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
			"FIELD_CODE" => array(	// Поля
				0 => "",
				1 => "",
			),
			"FILTER_NAME" => "",	// Фильтр
			"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
			"IBLOCK_ID" => "10",	// Код информационного блока
			"IBLOCK_TYPE" => "logo",	// Тип информационного блока (используется только для проверки)
			"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
			"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
			"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
			"NEWS_COUNT" => "99999",	// Количество новостей на странице
			"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
			"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
			"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
			"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
			"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
			"PAGER_TITLE" => "Новости",	// Название категорий
			"PARENT_SECTION" => "",	// ID раздела
			"PARENT_SECTION_CODE" => "",	// Код раздела
			"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
			"PROPERTY_CODE" => array(	// Свойства
				0 => "",
				1 => "ELEMENT_COUNT",
				2 => "",
			),
			"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
			"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
			"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
			"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
			"SET_STATUS_404" => "N",	// Устанавливать статус 404
			"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
			"SHOW_404" => "N",	// Показ специальной страницы
			"SORT_BY1" => "SORT",	// Поле для первой сортировки новостей
			"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
			"SORT_ORDER1" => "ASC",	// Направление для первой сортировки новостей
			"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
			"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
			"COMPONENT_TEMPLATE" => ".default"
		),
		false
	); ?>
</div>

<div class="work-stages">
	<div class="work-stages__container">
		<h2 class="work-stages__title">Этапы работы</h2>
		<div class="work-stages__grid">
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/01.svg" alt=""></div>
				<div class="work-stages__item-text">Проверка изображения или подготовка нового</div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/02.svg" alt=""></div>
				<div class="work-stages__item-text">Согласование заказа и сроков</div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/03.svg" alt=""></div>
				<div class="work-stages__item-text">Внесение предоплаты заказчиком</div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/04.svg" alt=""></div>
				<div class="work-stages__item-text">Печать изображения</div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/05.svg" alt=""></div>
				<div class="work-stages__item-text">Отгрузка заказа </div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/06.svg" alt=""></div>
				<div class="work-stages__item-text">Внесение постоплаты</div>
			</div>
			<div class="work-stages__item">
				<div class="work-stages__image-ibg"><img src="<?= SITE_TEMPLATE_PATH ?>/img/mp-qa/07.svg" alt=""></div>
				<div class="work-stages__item-text">Упаковка заказа </div>
			</div>
		</div>
	</div>
</div>

<div class="page-form">
	<div class="page-form__container">
		<div class="page-form__main">
			<h2 class="page-form__title">Оставить заявку</h2>
			<div class="page-form__text">Оставьте контакт и расскажите, что необходимо и мы свяжемся с Вами в ближайшее время</div>
			<form action="" class="page-form__form" data-parsley-validate data-parsley-trigger="change" method="post">
				<input type="hidden" name="action" value="main-form">
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
					<textarea id="" autocomplete="off" name="commentary" class="form__input"></textarea>
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
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>