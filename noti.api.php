<?php
require_once 'config/config.php';
$db = getDbInstance();
$rows = $db->jsonBuilder()->get('popup_notification');
echo $rows;
?>