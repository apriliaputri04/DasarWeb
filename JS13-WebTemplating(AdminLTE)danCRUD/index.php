<?php  
include('lib/Session.php'); 
$session = new Session(); 
if($session->get('is_login') !== true){ 
header('Location: login.php'); 
} 
?> 