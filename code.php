<?php  
include_once('admin/confige/connection.php');
include_once('admin/confige/function.php');


if(isset($_POST['enquireBtn'])){

$name=valied(trim($_POST['name']));
$email=valied(trim($_POST['email']));
$phone=valied(trim($_POST['phone']));
$service=valied(trim($_POST['service']));
$message=valied(trim($_POST['message']));

$sql="INSERT INTO enquires (name,email,phone,service,message) VALUES('$name','$email','$phone','$service','$message')";

$result=$conn->query($sql);

if($result){
    redirect('thank-you.php','Thank you for your inquiry! We received it and will get back to you soon');
}else{
    redirect('thank-you.php','something went wrong');
}


}


?>