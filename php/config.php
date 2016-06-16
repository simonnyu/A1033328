<?php

$conni=mysqli_connect('localhost','rootphp','classforphp','2');	
                                   //"帳號"    "密碼"   "資料庫名稱"
mysqli_query($conni,"SET NAMES 'UTF8'");
mysqli_query($conni,"SET CHARACTER SET UTF8");
mysqli_query($conni,"SET CHARACTER_SET_RESULTS=UTF8'");
mysqli_query($conni,"SET character_set_connection=utf8, character_set_results=utf8, character_set_client=binary");

?>
