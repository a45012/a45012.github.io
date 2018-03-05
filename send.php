<?


if (array_key_exists('messageFF', $_POST)) {
   $to = 'a45012@yandex.ru';
   $subject = 'Заполнена контактная форма с '.$_SERVER['HTTP_REFERER'];
   $subject = "=?utf-8?b?". base64_encode($subject) ."?=";
   $message = "Имя: ".$_POST['nameFF']."\nТелефон: ".$_POST['telFF']."\nIP: ".$_SERVER['REMOTE_ADDR']."\nОткуда: ".$_POST['messageFF']."\nКуда: ".$_POST['messFF'];
   $headers = 'Content-type: text/plain; charset="utf-8"';
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Date: ". date('D, d M Y h:i:s O') ."\r\n";
   mail($to, $subject, $message, $headers);
   echo $_POST['nameFF'];
}

?>