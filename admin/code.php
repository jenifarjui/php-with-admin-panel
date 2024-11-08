<?php
include_once('confige/connection.php');
include_once('confige/function.php');


if(isset($_POST['SaveUser'])){

$name=valied(trim($_POST['name']));
$email=valied(trim($_POST['email']));
$phone=valied(trim($_POST['phone']));
$password=valied(trim($_POST['password']));
$role=valied(trim($_POST['role']));
// $is_ban=valied(trim($_POST['is_ban']));


if($name != '' || $email != '' || $phone != '' || $password != ''){

    $hashedPassword= password_hash($password,PASSWORD_BCRYPT);
$sql="INSERT INTO user(name,email,phone,password,role) VALUES('$name','$email','$phone','$hashedPassword','$role')";

$result=$conn->query($sql);

if($result){
    redirect('users.php','user/admin added successfully');
}else{
    redirect('create-user.php','something went wrong');
}

}else{
    redirect('create-user.php','fill the input fields');
}

}





if(isset($_POST['UpdateUser'])){

    $name=valied(trim($_POST['name']));
    $email=valied(trim($_POST['email']));
    $phone=valied(trim($_POST['phone']));
    $password=valied(trim($_POST['password']));
    $role=valied(trim($_POST['role']));
    $userId=valied(trim($_POST['userId']));
   
    $user=getByID('user',$userId);
    if($user['status'] !=200){
        redirect('edit-user.php?id=','id not found');
    }

    
    if($name != '' || $email != '' || $phone != '' || $password != ''){
        $hashedPassword= password_hash($password,PASSWORD_BCRYPT);
    $sql="UPDATE user SET name='$name',email='$email',phone='$phone',password='$hashedPassword',role='$role' WHERE id='$userId' ";
    
    $result=$conn->query($sql);
    
    if($result){
        redirect('users.php','user/admin added successfully');
    }else{
        redirect('create-user.php','something went wrong');
    }
    
    }else{
        redirect('create-user.php','fill the input fields');
    }
    
    }





    if(isset($_POST['saveSetting'])){

        $title=valied(trim($_POST['title']));
        $slug=valied(trim($_POST['slug']));
       
        $small_description=valied(trim($_POST['small_description']));
        $meta_description=valied(trim($_POST['meta_description']));
        $meta_keyword=valied(trim($_POST['meta_keyword']));
        $email1=valied(trim($_POST['email1']));
        $email2=valied(trim($_POST['email2'])); $phone1=valied(trim($_POST['phone1']));
        $phone2=valied(trim($_POST['phone2']));
        $address=valied(trim($_POST['address']));
        $settingId=valied(trim($_POST['settingId']));

        if($settingId=='insert'){
            $sql="INSERT INTO setting (title,slug	,small_description,	meta_description,	meta_keyword,	email1,	email2,	phone1,	phone2,	address) VALUES('$title','$slug','$small_description','$meta_description',	'$meta_keyword','$email1','$email2','$phone1',	'$phone2','$address')";
            $result=$conn->query($sql);
     }
     if(is_numeric($settingId)){
        $sql = "UPDATE setting 
        SET title='$title', 
            slug='$slug', 
            small_description='$small_description', 
            meta_description='$meta_description', 
            meta_keyword='$meta_keyword', 
            email1='$email1', 
            email2='$email2', 
            phone1='$phone1', 
            phone2='$phone2', 
            address='$address' 
        WHERE id='$settingId'   ";
         $result=$conn->query($sql);

     }
            if($result){
                redirect('setting.php','Save setting');
            }else{
                redirect('create-user.php','something went wrong');
            }
    }




    if(isset($_POST['saveMedia'])){

        $name=valied(trim($_POST['name']));
        $url=valied(trim($_POST['url']));
        $status=valied(trim($_POST['status'])) == true ? 1:0 ;
       echo '<pre>';
       print_r($_POST);
       echo '</pre>';
        
        if($name != '' || $url != ''){
        
        $sql="INSERT INTO social_media (name,url,status) VALUES ('$name','$url','$status')";
       
        $result=$conn->query($sql);
        
        if($result){
            redirect('social-media.php','user/admin added successfully');
        }else{
            redirect('social-media-create.php','something went wrong');
        }
        
        }else{
            redirect('social-media-create.php','fill the input fields');
        }
        
        }





if (isset($_POST['updateSocialMedia'])) {

    $name = valied(trim($_POST['name']));
    $url = valied(trim($_POST['url']));
    $status = valied(trim($_POST['status'])) == true ? 1 : 0;

    $socialMediaId = valied(trim($_POST['socialMediaId']));

    if ($name != '' || $url != '') {

        $sql = "UPDATE  social_media SET 
           name='$name',
          url='$url',
          status='$status'
          WHERE id=$socialMediaId LIMIT 1";

        $result = $conn->query($sql);

        if ($result) {
            redirect('social-media.php', 'user/admin added successfully');
        } else {
            redirect('social-media-edit.php?id=' . $socialMediaId, 'something went wrong');
        }
    } else {
        redirect('social-media-edit.php?id=' . $socialMediaId, 'fill the input fields');
    }
}




if(isset($_POST['saveService'])){
    $name=valied(trim($_POST['name']));

    $slug= str_replace('','-',strtolower($name));

    $small_description=valied(trim($_POST['small_description']));
    $long_description=valied(trim($_POST['long_description']));

    $meta_keyword=valied(trim($_POST['meta_keyword']));




    if($_FILES['image']['size']>0 ){
          $image=$_FILES['image']['name'];

          $path="assets/uploads/services/";
          $imgExt=pathinfo($image,PATHINFO_EXTENSION);
          $fileName=time().'.'.$imgExt;
          $finalImage="assets/uploads/services/". $fileName;

    }else{
        $finalImage=NULL;
    }
  

    $status = 1;

    $sql="INSERT INTO service (name,slug	,small_description,long_description,meta_keyword,image,status)
     VALUES('$name','$slug','$small_description','$long_description','$meta_keyword','$fileName','$status')";

    $result=$conn->query($sql);
    
    if($result){
        if($_FILES['image']['size']>0 ){
        move_uploaded_file($_FILES['image']['tmp_name'],$path.$fileName);
        }

        redirect('service.php', 'Service added successfully');

    }else{
        redirect('service.php','something went wrong');

    }

}




if (isset($_POST['updateService'])) {
    $serviceId = valied(trim($_POST['serviceId']));
    $name = valied(trim($_POST['name']));
    $small_description = valied(trim($_POST['small_description']));
    $long_description = valied(trim($_POST['long_description']));
    $meta_keyword = valied(trim($_POST['meta_keyword']));
    $old_image = valied(trim($_POST['old_image']));

    $sql = "UPDATE service SET
           name='$name',
           small_description ='$small_description ',
           long_description ='$long_description ',
           meta_keyword='$meta_keyword',
           image='$old_image'
        WHERE
           id=$serviceId ";
    $result = $conn->query($sql);
    if ($result) {
        redirect('service.php', 'data edit successfully');
    }
}
?>