<?
$name = $_POST['name'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];
$token ="1017974613:AAHbT213NmJTxrRZ15Ho9dgfQ-dWjK6Jj7k";
$chat_id = "-441941004";
$arr = array(
    'Имя: ' => $name,
    'Телефон: ' => $phone,
    'Сообщение: ' => $msg,
);

foreach ($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value;
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
    echo "GOOD";
} else {
    echo "Error";
}

