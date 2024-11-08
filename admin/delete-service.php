<?php
include_once('confige/function.php');
include_once('confige/connection.php');
if(isset($_GET['id'])){

$id=valied($_GET['id']);

$sql="DELETE FROM service WHERE id=$id";
$result=$conn->query($sql);

redirect("service.php","id deleted successfully");
}else{

redirect("service.php","data not found");

}

?>


