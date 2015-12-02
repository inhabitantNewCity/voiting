<?php
require_once('HandlerPostRequestSavePage.php');
$hendler = new HandlerPostRequestSavePage($_POST); 
$nameFile = $hendler->getFileVoiting();
header("Location: " . $nameFile); 
exit;
?>