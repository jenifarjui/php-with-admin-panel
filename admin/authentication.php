<?php


if(isset($_SESSION['auth'])){
    if(isset($_SESSION['loggedInUserRole'])){

        $role=valied(trim($_SESSION['loggedInUserRole']));
        $email=$role=valied(trim($_SESSION['loggedInUser']['email']));
       $sql="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";

    $result=$conn->query($sql);
    
            if ($result) {
    
                if (mysqli_num_rows($result) == 0) {
                logoutSession();
                redirect('../login.php','Access Denied');
        }else{
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row['role']!= 'Admin'){
                logoutSession();
                redirect('admin/login.php','Access Denied');
               echo $row['role'];
            }
        }
         }
    }else{
        logoutSession();
                redirect('../login.php','Something wrong');

    }          
               
            }else{
                redirect('../login.php','Login to continue...'); 
            }
?>