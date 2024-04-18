<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>
<div class="page-not-found">
				<div class="page-not-found__container">
					<div class="page-not-found__image-ibg"><img src="<?=SITE_TEMPLATE_PATH?>/img/404.svg" alt=""></div>
					<div class="page-not-found__main">
						<h1 class="page-not-found__title page-title">Страница не найдена</h1>
						<div class="page-not-found__text">Неправильно набран адрес или такой страницы не существует</div>
						<a href="/" class="page-not-found__link btn-green">На главную</a>
					</div>
				</div>
			</div>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>