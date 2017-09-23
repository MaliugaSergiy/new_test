<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная1m ");
?><?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumb",
	Array(
		"COMPONENT_TEMPLATE" => "breadcrumb",
		"PATH" => "",
		"SITE_ID" => "cg",
		"START_FROM" => "0"
	)
);?><?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"menu",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?><br><?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>