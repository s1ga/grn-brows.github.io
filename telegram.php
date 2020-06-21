<?php
 
/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$date = $_POST['user_date'];
$procedure = $_POST['user_procedure'];
$first_time = $_POST['user_first-time'];
$birth = $_POST['user_birth'];
 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "994955297:AAHgN2GwzE9eKlhB-6BmrAMttlYWuMFCqtE";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-496955271";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Имя клиента: ' => $name,
  'Телефон: ' => $phone,
  'Процедура: ' => $procedure,
  'Желаемая дата: ' => $date,
  'Первый раз: ' => $first_time,
  if($birth) {
    'Дата рождения: ' => $birth
  }
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  header('Location: thank.html');
} else {
  echo "Error";
}
?>