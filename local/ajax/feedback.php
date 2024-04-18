<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Type\DateTime;

if ($_POST) {
    /* Переменные */
    $result = false;                                // Ответ
    $action = htmlspecialchars($_POST['action']);
    $nameEventsToSent = 'FEEDBACK_FORM';       // Название события отправки почты
    $actionYes = false;
    $itemHave = false;
    switch ($action) {
        case 'work-callback':
            $messageId = 13;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                "COMMENT" => htmlspecialchars($_POST['comment']),
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);

         

            break;
        case 'servisec-print':
            $messageId = 14;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                "COMMENT" => htmlspecialchars($_POST['comment']),
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);
            break;
        case 'company':
            $messageId = 15;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                "COMMENT" => htmlspecialchars($_POST['comment']),
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);

            

            break;
        case 'contacts':
            $messageId = 16;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                 "COMMENT"=>htmlspecialchars($_POST['commentary']),
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);

            

            break;
        case 'main-form':
            $messageId = 17;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                "COMMENT" => htmlspecialchars($_POST['commentary'])
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);

            

            break;
        case 'make-maket':
            $messageId = 18;
            $arEventFields = [
                "NAME" => htmlspecialchars($_POST['name']),
                "PHONE" => htmlspecialchars($_POST['phone']),
                "COMMENT" => htmlspecialchars($_POST['commentary'])
            ];

            $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);
            break;

            case 'price':
                $messageId = 19;
                $arEventFields = [
                    "NAME" => htmlspecialchars($_POST['name']),
                    "PHONE" => htmlspecialchars($_POST['phone']),
                    "COUNT" => htmlspecialchars($_POST['count']),
                    "CLOTHES"=>htmlspecialchars($_POST['clothes']),
                ];
    
                $result = to_sent_email($nameEventsToSent, $arEventFields, $messageId);
                break;

    }

    

  
    echo json_encode($result);
}
