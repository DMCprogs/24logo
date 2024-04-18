<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<? $APPLICATION->ShowHead(); ?>
	
<?
$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$url = $url[0];
$path= parse_url($url, PHP_URL_PATH);
$third = explode('/', $path);

$elementCode=$third[2]; 
	$asset = \Bitrix\Main\Page\Asset::getInstance();
	$asset->addCss(SITE_TEMPLATE_PATH . "/css/custom.css");
	$asset->addCss(SITE_TEMPLATE_PATH . "/css/style.css.css");
	$asset->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/custom.js");
	$asset->addJs(SITE_TEMPLATE_PATH . "/js/ajax_callback.js");
?>
	

	<title><? $APPLICATION->ShowTitle() ?></title>
</head>

<body>
	<div name="<?=$path?>" class="<?=(empty($elementCode)&&($path=="/services/"||$path=="/application/"||$path=="/works/"||$path=="/contacts/"||$path=="/price/")||http_response_code() === 404) ? 'wrapper seryy-svetlyy' : 'wrapper'; ?>" >
	<? if ($USER->IsAdmin()) : ?>
		<div style="position:fixed; z-index:100000; left:0; top:0; width:100%;">
			<div style="position:absolute; left:0; top:0; width:20px; height:20px; z-index:200000; background: tomato; cursor:pointer; border-radius:0 0 20px 0;" onclick="$(this).siblings().toggle();"></div>
			<div style="display:none;">
				<? $APPLICATION->ShowPanel(); ?>
				
			</div>
		</div>
	<? else : ?>
		<? $APPLICATION->ShowPanel(); ?>
	<? endif; ?>
	<header class="header">
			<div class="header__container">
				
				<a href="/" class="header__logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt=""></a>
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item dropdown" data-dropdown>
								<a href="" class="menu__link dropdown__button" data-dropdown-button>Услуги печати</a>
								<div class="dropdown__block">
									<div class="submenu">
										<div class="submenu__nav">
											<div class="submenu__block">
												<a href="/services/pechat-na-spetsodezhde/" class="submenu__nav-link" data-parent="1">Спецодежда</a>
												<div class="submenu__links" data-submenu="1" hidden>
													<a href="" class="submenu__link">Печать на сигнальной одежде</a>
													<a href="" class="submenu__link">Печать на халатах</a>
													<a href="" class="submenu__link">Печать на фартуках</a>
													<a href="" class="submenu__link">Печать на масках</a>
												</div>
											</div>
											<div class="submenu__block">
												<a href="/services/pechat-na-odezhde/" class="submenu__nav-link" data-parent="2">Одежда</a>
												<div class="submenu__links" data-submenu="2" hidden>
													<a href="" class="submenu__link">Печать на футболках</a>
													<a href="" class="submenu__link">Печать на рубашках поло</a>
													<a href="" class="submenu__link">Печать на ветровках</a>
													<a href="" class="submenu__link">Печать на спортивной одежде</a>
													<a href="" class="submenu__link">Печать на толстовках</a>
													<a href="" class="submenu__link">Печать на свитшотах</a>
													<a href="" class="submenu__link">Печать на куртках</a>
												</div>
											</div>
											<div class="submenu__block">
												<a href="/services/pechat-na-golovnykh-uborakh/" class="submenu__nav-link" data-parent="3">Головные уборы</a>
												<div class="submenu__links" data-submenu="3" hidden>
													<a href="" class="submenu__link">3Печать на сигнальной одежде</a>
													<a href="" class="submenu__link">3Печать на халатах</a>
													<a href="" class="submenu__link">3Печать на фартуках</a>
													<a href="" class="submenu__link">3Печать на масках</a>
												</div>
											</div>
											<div class="submenu__block">
												<a href="/services/pechat-na-tekstilnykh-izdeliyakh/" class="submenu__nav-link" data-parent="4">Текстильные изделия</a>
												<div class="submenu__links" data-submenu="4" hidden>
													<a href="" class="submenu__link">4Печать на сигнальной одежде</a>
													<a href="" class="submenu__link">4Печать на халатах</a>
													<a href="" class="submenu__link">4Печать на фартуках</a>
													<a href="" class="submenu__link">4Печать на масках</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="menu__item dropdown" data-dropdown>
								<a href="" class="menu__link dropdown__button" data-dropdown-button>Способы нанесения</a>
								<div class="dropdown__block">
									<div class="submenu">
										<div class="submenu__nav">
											<a href="/services/pechat-na-spetsodezhde/" class="submenu__nav-link">Спецодежда</a>
											<a href="/services/pechat-na-odezhde/" class="submenu__nav-link">Одежда</a>
											<a href="/services/pechat-na-golovnykh-uborakh/" class="submenu__nav-link">Головные уборы</a>
											<a href="/services/pechat-na-tekstilnykh-izdeliyakh/" class="submenu__nav-link">Текстильные изделия</a>
										</div>
									</div>
								</div>
							</li>
							<li class="menu__item"><a href="" class="menu__link">Подготовка макета</a></li>
							<li class="menu__item"><a href="" class="menu__link">Наши работы</a></li>
							<li class="menu__item"><a href="" class="menu__link">Стоимость</a></li>
							<li class="menu__item"><a href="" class="menu__link">О компании</a></li>
							<li class="menu__item"><a href="" class="menu__link">Доставка и оплата</a></li>
							<li class="menu__item"><a href="" class="menu__link">Контакты</a></li>
						</ul>
					</nav>
				</div>
				<div class="header__contacts" data-da=".menu__body, 768">
					<a href="tel:+79332008077" class="header__tel">+7 933 200 80 77</a>
					<a href="" class="header__callback btn-green" data-popup="#callback">Заказать звонок</a>
				</div>
			</div>
		</header>

		<main class="page">

		

		
				