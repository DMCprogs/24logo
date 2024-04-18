<?


function to_sent_email($nameEventsToSent, $arEventFields, $messageId, $file = false)
{
    if (CEvent::Send($nameEventsToSent, "s1", $arEventFields, "Y", $messageId, $file)) {
        return true;
    } else {
        return false;
    }
}

use Bitrix\Highloadblock\HighloadBlockTable as HLBT;
CModule::IncludeModule('highloadblock');
function GetEntityDataClass($HlBlockId)
{
    if (empty($HlBlockId) || $HlBlockId < 1) {
        return false;
    }
    $hlblock = HLBT::getById($HlBlockId)->fetch();
    $entity = HLBT::compileEntity($hlblock);
    $entity_data_class = $entity->getDataClass();
    return $entity_data_class;
}