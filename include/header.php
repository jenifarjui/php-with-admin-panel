<?php    
include_once('admin/confige/connection.php');
include_once('admin/confige/function.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard
        <?php if(isset($pageTitle)){echo $pageTitle;}
        else{echo webSetting('title') ?? 'Setting';}?>
        </title>
        <meta name="meta_description" content="<?= webSetting('meta_description') ?? 'meta description';?>">
        
        
        <meta name="meta_keyword" content="<?= webSetting('meta_keyword') ?? 'meta keyword';?>">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
<?php include_once('navbar.php')   ?>