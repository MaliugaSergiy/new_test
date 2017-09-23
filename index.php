<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Главная1m ");
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:main.feedback",
    "feedback",
    Array(
        "EMAIL_TO" => "shtirliy@gmail.com",
        "EVENT_MESSAGE_ID" => array(),
        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
        "REQUIRED_FIELDS" => array(),
        "USE_CAPTCHA" => "Y"
    )
);?>

<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>