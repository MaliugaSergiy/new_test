<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");
$APPLICATION->AddChainItem("Страница не существует");

?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus eveniet qui unde. Laborum nam numquam placeat, quia sapiente voluptate? At exercitationem iusto nisi quas quisquam sint, tempora temporibus totam ut?</p>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>