<?php
include_once('confige/function.php');

if(isset($_SESSION['auth'])){
    logoutSession();
    redirect('login.php','Logged out successfully');
}


?>



<h1>logout</h1>