<?php

// Токен
  const TOKEN = '5601330203:AAG8tu3v4SMfUDHJHosqv4mzgL9ze8LwrMA';

  // ID чата
  const CHATID = '-858054516';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $textSendStatus = '';
  // Проверяем не пусты ли поля с именем и телефоном
  if (!empty($_POST['name']) && !empty($_POST['phone'])) {
    
    // Если не пустые, то валидируем эти поля и сохраняем и добавляем в тело сообщения. Минимально для теста так:
    $txt = "";
    $txt .= "Новая заявка. %0A%0A";

    // Имя
    if (isset($_POST['name']) && !empty($_POST['name'])) {
        $txt .= "Имя: " . strip_tags(trim(urlencode($_POST['name']))) . "%0A";
    }
    
    // Номер телефона
    if (isset($_POST['phone']) && !empty($_POST['phone'])) {
        $txt .= "Телефон:%0A" . strip_tags(trim(urlencode($_POST['phone']))) . "%0A%0A";
    }

    // Категория продукта
    if (isset($_POST['category']) && !empty($_POST['category'])) {
        $txt .= "Категория:%0A" . strip_tags(trim(urlencode($_POST['category']))) . "%0A%0A";
    }

    if (isset($_POST['ustanovka']) && !empty($_POST['ustanovka']) || isset($_POST['demontaj']) && !empty($_POST['demontaj']) || isset($_POST['zamer']) && !empty($_POST['zamer']) || isset($_POST['remont']) && !empty($_POST['remont']) || isset($_POST['otdelka']) && !empty($_POST['otdelka']) || isset($_POST['osteklenie']) && !empty($_POST['osteklenie']) || isset($_POST['uteplenie']) && !empty($_POST['uteplenie']) || isset($_POST['pokraska']) && !empty($_POST['pokraska'])) {
        $txt .= "Услуги: ";
    }

    // Услуги
    if (isset($_POST['ustanovka']) && !empty($_POST['ustanovka'])) {
        $txt .= "%0A" . strip_tags(trim(urlencode($_POST['ustanovka'])));
    }

    if (isset($_POST['demontaj']) && !empty($_POST['demontaj'])) {
        $txt .= "%0A" . strip_tags(trim(urlencode($_POST['demontaj'])));
    }

    if (isset($_POST['zamer']) && !empty($_POST['zamer'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['zamer'])));
    }
    
    if (isset($_POST['remont']) && !empty($_POST['remont'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['remont'])));
    }

    if (isset($_POST['otdelka']) && !empty($_POST['otdelka'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['otdelka'])));
    }

    if (isset($_POST['osteklenie']) && !empty($_POST['osteklenie'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['osteklenie'])));
    }

    if (isset($_POST['uteplenie']) && !empty($_POST['uteplenie'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['uteplenie'])));
    }

    if (isset($_POST['pokraska']) && !empty($_POST['pokraska'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['pokraska'])));
    }

    // Cообщение
    if (isset($_POST['message']) && !empty($_POST['message'])) {
        $txt .="%0A%0A" . "Сообщение:%0A- " . strip_tags(trim(urlencode($_POST['message'])));
    }

    //Метка

    if (isset($_POST['consult']) && !empty($_POST['consult']) || isset($_POST['stoimost']) && !empty($_POST['stoimost']) || isset($_POST['undefind']) && !empty($_POST['undefind'])) {
        $txt .= "%0A%0AМетка: ";
    }

    if (isset($_POST['consult']) && !empty($_POST['consult'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['consult'])));
    }

    if (isset($_POST['stoimost']) && !empty($_POST['stoimost'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['stoimost'])));
    }

    if (isset($_POST['undefind']) && !empty($_POST['undefind'])) {
        $txt .="%0A" . strip_tags(trim(urlencode($_POST['undefind'])));
    }


    $textSendStatus = @file_get_contents('https://api.telegram.org/bot'. TOKEN .'/sendMessage?chat_id=' . CHATID . '&parse_mode=html&text=' . $txt);
    echo json_encode('SUCCESS');
  } else {
    echo json_encode('NOTVALID');
  }
} else {
  header("Location: /");
}
