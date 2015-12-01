<?php
require_once('HandlerPostRequestSavePage.php');
$hendler = new HandlerPostRequestSavePage($_POST); 
$nameFile = $hendler->getFileVoiting();
//echo $nameFile;
header("Location: " . $nameFile); 
exit;
?>