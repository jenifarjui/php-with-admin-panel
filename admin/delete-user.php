<?php
include_once('confige/function.php');
include_once('confige/connection.php');

$userId=valied($_GET['id']);
echo $userId;


$sql="DELETE FROM user WHERE id=$userId";
if($conn->query($sql)){
    redirect('users.php','user deleted successfully');
}

?>


