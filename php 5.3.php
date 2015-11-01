<?php

$_FILES['userfile']['name']; // Оригинальное имя файла у клиента
$_FILES['userfile']['type']; // MIME-тип файла
$_FILES['userfile']['size']; // размер файла
$_FILES['userfile']['tmp_name']; // временное имя
$_FILES['userfile']['error']; // код ошибки, которые могут возникнуть, могут записывать директивы или просто числом
UPLOAD_ERR_OK;          // [0] все хорошо
UPLOAD_ERR_INI_SIZE;    // [1] размер превышает
UPLOAD_ERR_FORM_SIZE;   // [2] превышает MAX_FILE_SIZE
UPLOAD_ERR_PARTIAL;     // [3] загружаемый файл был получен частично
UPLOAD_ERR_NO_FILE;     // [4] файл не загружен
UPLOAD_ERR_NO_TMP_DIR;  // [6] отсутствует временная папка
UPLOAD_ERR_CANT_WRITE;  // [7] не удалось записать файл на диск

move_uploaded_file($filename, $destination);  // Перемещает загруженный файл в новое место

// ОТПРАВКА ПОЧТЫ
// SMTP - кому отправляем письмо
// smtp_port - порт
// sendmail_from - от кого сообщение

mail($to, $subject, $message); // Отправляет электронную почту