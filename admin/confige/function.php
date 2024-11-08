<?php
session_start();



function valied($inputData){
    global $conn;
    return mysqli_real_escape_string($conn,$inputData);
}

function redirect($url,$status){
    $_SESSION ['status']=$status;
    header('location:'.$url);
    exit();
}

function alertMessage(){
    if(isset($_SESSION ['status']))
    {
    echo ' <div class="alert alert-success">
    <h4>'.$_SESSION['status'].'</h4>
    </div>';
    unset($_SESSION ['status']);
    }
}

function getCount($tableName){
    global $conn;
    $table =valied($tableName);
    $sql ="SELECT * FROM $table";
    $result =$conn->query($sql);
    $totalCount=mysqli_num_rows($result);
    return $totalCount; 
}


function getAll($tableName)
{
    global $conn;
    $table =valied($tableName);
    $sql ="SELECT * FROM $table";
    $result =$conn->query($sql);
    return $result;
}


function  checkParamId($paramType){
   if(isset($_GET[$paramType])){
    if($_GET[$paramType]!= null){
        return $_GET[$paramType];

    }else{
        return 'No id found';

    }
   }else{
    return 'No id given';

   }

}


function getByID($tableName,$id)
{
    global $conn;
    $table =valied($tableName);
    $id =valied($id);
    $sql ="SELECT * FROM $table WHERE id='$id' LIMIT 1";
    $result =$conn->query($sql);
    
    if($result){
        if($result->num_rows==1){
           $row=$result->fetch_array();
           $response =[
            'status'=>200,
            'message'=>'success',
            'data'=> $row
        ];
        return $response ;

        }else{
            $response =[
                'status'=>404,
                'message'=>'No found data'
            ];
            return $response ;
        }
    }else{
        $response =[
            'status'=>500,
            'message'=>'something went wrong'
        ];
        return $response ;
    }
}

function webSetting($columName){
    $setting=getByID('setting',1);
    if($setting['status']==200){
        return $setting['data'][$columName];
    }
}

function logoutSession(){
    
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserRole']);
    unset($_SESSION['loggedInUser']);
}
?>