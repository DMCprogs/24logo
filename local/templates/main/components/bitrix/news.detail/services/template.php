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
<div>
<div>
	<div>
	<?=$arResult["PROPERTIES"]["DETAIL_NAME"]["VALUE"]?>
	</div>
	<img
	class="detail_picture"
	border="0"
	src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
	width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
	height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
	alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
	title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
			/>
	<div><?=$arResult["DETAIL_TEXT"]?></div>
	
	<button>заказать звонок </button>
</div>


<div>
	
	<?foreach ($arResult["PRINT_SERVICES"] as $key => $value) {
		?>
		<a href="/services/<?=$value['CODE']?>/">
		<div>
			<img src="<?=CFile::GetPath($value["PREVIEW_PICTURE"])?>" alt="">
			<div><?=$value['NAME']?></div>
			<div><?=$value['PREVIEW_TEXT']?></div>
		</div>
		</a>
		<?
	}?>
</div>


<div>
	
	<?foreach ($arResult["PROPERTIES"]["WORKS_EXAMPLE"]["VALUE"] as $key => $value) {
			$img=CFile::GetPath($value);	
		?>
		<img src="<?=$img?>" alt="">
		<?
	}?>
</div>


<div>
<?
	foreach ($arResult["APPLICATION"] as $key => $value) {
		
		?>
		<div>
			<img src="<?=CFile::GetPath($value["PREVIEW_PICTURE"])?>" alt="">
			<div><?=$value["NAME"]?></div>
			<div><?=$value["PREVIEW_TEXT"]?></div>
			<a href="/application/<?=$value['CODE']?>/">подробнее</a>
		</div>
	
		</a>
		<?
	}
	?>
</div>


<div>
<div>
	<form action="" method="post">
     <input type="hidden" name="action" value="servisec-print">
	<input type="text" name="name" placeholder="ваше имя">
	<input type="tel" name="phone" placeholder="ваш телефон">
	<input type="text" name="comment" placeholder="ваша задача">
	<button type="submit"> отправить</button>
	</form>
</div>
</div>

<div>
		<div>FAQ</div>
		<?
		foreach ($arResult["FAQ"] as $key => $question) {
			
			?>
			<div>
				<div><?=$question["NAME"]?></div>
				<div><?=$question["PREVIEW_TEXT"]?></div>
			</div>
			<?
		}
		?>
	</div>

</div>
