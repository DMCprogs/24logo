<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();





$arSelect = Array( "NAME", "PREVIEW_TEXT");
$arFilter = Array("IBLOCK_ID"=>5, "ID"=>$arResult["ITEMS"][0]["PROPERTIES"]['FAQ_QUESTION']['VALUE']);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, Array(), $arSelect);
$keyfaq=0;

while($ob = $res->Fetch())
{
	
	$arResult["FAQ"][$keyfaq]=$ob;
	$keyfaq++;
}


$arSelect = Array( "NAME", "PREVIEW_TEXT","PREVIEW_PICTURE","PROPERTY_PRICE");
$arFilter = Array("IBLOCK_ID"=>12, "ID"=>$arResult["PROPERTIES"]['STAGE_MAKETS']['VALUE']);
$res = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter, false, Array(), $arSelect);
$keymaket=0;

while($ob = $res->Fetch())
{
	
	$arResult["MAKET"][$keymaket]=$ob;
	$keymaket++;
}
?>