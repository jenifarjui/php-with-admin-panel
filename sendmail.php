<?php  



if(isset($_POST['contactSubmit'])){

$name=valied(trim($_POST['name']));
$email=valied(trim($_POST['email']));
$phone=valied(trim($_POST['phone']));
$service=valied(trim($_POST['service']));
$message=valied(trim($_POST['message']));

$sql="INSERT INTO enquires (name,email,phone,service,message) 
VALUES('$name','$email','$phone','$service','$message')";

$result=$conn->query($sql);

if($result){
    redirect('contact-us.php','Thank you for your inquiry! We received it and will get back to you soon');
}else{
    redirect('contact-us.php','something went wrong');
}


}


?>