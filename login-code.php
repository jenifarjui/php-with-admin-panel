<?php
include_once('admin/confige/connection.php');
include_once('admin/confige/function.php');


if(isset($_POST['loginBtn'])){
$emailInput=valied(trim($_POST['email']));
$passwordInput=valied(trim($_POST['password']));

$email=filter_var($emailInput,FILTER_SANITIZE_EMAIL);   
$password=filter_var($passwordInput,FILTER_SANITIZE_STRING);


if($email != '' && $password != '')
{
// $sql="SELECT * FROM user WHERE email='$email' AND password='$password' LIMIT 1";

$sql="SELECT * FROM user WHERE email='$email' LIMIT 1";

$result=$conn->query($sql);

        if ($result) {

            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $hashedPassword=$row['password'];
            if(!password_verify($password,$hashedPassword)){
                redirect('login.php','Invalid Password');
            }
                if ($row['role'] == 'admin') {

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] =
                        [
                            'name' => $row['name'],
                            'email' => $row['email'],
                        ];
                    redirect('index.php', 'Login In Sucessfully');
                } else {

                    $_SESSION['auth'] = true;
                    $_SESSION['loggedInUserRole'] = $row['role'];
                    $_SESSION['loggedInUser'] =
                        [
                            'name' => $row['name'],
                            'email' => $row['email'],
                        ];

                    redirect('index.php', 'Login In Sucessfully');
                }
            } else {
            redirect('login.php', 'Invalied Email Id or Password');
        }
        }
    } else {
        redirect('login.php', 'All fieldes are mendetory');
    }
}

echo 'hello';
?>