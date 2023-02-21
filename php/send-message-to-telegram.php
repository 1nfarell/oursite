

<?php

//телеграмм бот

// Токен
  const TOKEN = '5881005163:AAECPwmOwNmCN3_MvEZPZDiRBrPj_rWtslY';

  // ID чата
  const CHATID = '-826977137';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $textSendStatus = '';
  // Проверяем не пусты ли поля с именем и телефоном
  if (!empty($_POST['name']) && !empty($_POST['mail'])) {
    
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";
    $txt .= "Новая заявка. %0A%0A";

    // Имя
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $txt .= "Сообщение: " . strip_tags(trim(urlencode($_POST['name']))) . "%0A";
    }
    
    // Номер телефона
    if (isset($_POST['mail']) && !empty($_POST['mail'])) {
        $txt .= "Почта:%0A" . strip_tags(trim(urlencode($_POST['mail']))) . "%0A%0A";
    }

   
    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt);
    echo json_encode('SUCCESS');
  } else {
    echo json_encode('NOTVALID');
  }
} else {
  header("Location: /");
}
