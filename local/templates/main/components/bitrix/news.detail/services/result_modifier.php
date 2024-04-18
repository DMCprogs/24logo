<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","CODE","PREVIEW_PICTURE","PREVIEW_TEXT");
	$arFilter = Array("IBLOCK_ID"=>9, "ID"=>$arResult["PROPERTIES"]["PRINT_SERVICES"]["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
$keySection=0;

while($ob = $res->Fetch())
{
	
	$arResult["PRINT_SERVICES"][$keySection]=$ob;
	$keySection++;
}


$arSelect = Array("ID", "NAME", "DATE_ACTIVE_FROM","CODE","PREVIEW_PICTURE","PREVIEW_TEXT");
	$arFilter = Array("IBLOCK_ID"=>10, "ID"=>$arResult["PROPERTIES"]["APPLICATION"]["VALUE"]);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
$keyapp=0;

while($ob = $res->Fetch())
{
	
	$arResult["APPLICATION"][$keyapp]=$ob;
	$keyapp++;
}


$arSelect = Array( "NAME", "PREVIEW_TEXT");
$arFilter = Array("IBLOCK_ID"=>5, "ID"=>$arResult["PROPERTIES"]['FAQ_QUESTION']['VALUE']);
$res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
$keyfaq=0;

while($ob = $res->Fetch())
{
	
	$arResult["FAQ"][$keyfaq]=$ob;
	$keyfaq++;
}


// //фильтру указываем ID раздела и ID его инфоблока
// $arFilter = array('IBLOCK_ID' => 9); 
// $arSelect = array('IBLOCK_ID', 'ID', 'NAME', 'SECTION_PAGE_URL', 'DETAIL_PICTURE','UF_FAQ','UF_APPLICATION','UF_PRINT_SERVICES','CODE');
// $rsSect = CIBlockSection::GetList(
//      Array("SORT"=>"ASC"), //сортировка
//      $arFilter, //фильтр (выше объявили)
//      false, //выводить количество элементов - нет
//      $arSelect //выборка вывода, нам нужно только название, описание, картинка
// );
// $keysection=0;
// while ($arSect = $rsSect->GetNext()) {
//     $arResult["SECTION"][$arSect["CODE"]]=$arSect;
// 	$keysection++;
// }

?>