<?php

/* https://api.telegram.org/bot1032811935:AAF07oAN9Hsl7uNJc-XGqqfaeTRy0bdQLac/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];

$token = "1032811935:AAF07oAN9Hsl7uNJc-XGqqfaeTRy0bdQLac";
$chat_id = "-266099467";

$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>