<?php
include_once('confige/function.php');
include_once('confige/connection.php');
if(isset($_GET['id'])){


$socialMediaId=valied($_GET['id']);
// echo $socialMediaId;


$sql="DELETE FROM social_media WHERE id=$socialMediaId";
if($conn->query($sql)){
    redirect('social-media.php','user deleted successfully');
}
}else{
    echo 'something wrong';
}
?>


