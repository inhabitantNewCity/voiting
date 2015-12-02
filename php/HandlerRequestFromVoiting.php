<?php
//sleep(3);
require_once('HandlerRequestFromVoitingClass.php');
$hendler = new HandlerRequestFromVoitingClass($_POST); 
//print_r($_POST);
echo $hendler->getCurrentStatistic();
//echo 'osdfghjgfdsdfghjgfdsadfghjgfdssdsfghm';
?>