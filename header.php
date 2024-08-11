<!DOCTYPE html>
<?php
define('URL', 'https://' . $_SERVER['SERVER_NAME'] . '/');
function version($name){
    return(filemtime($_SERVER['DOCUMENT_ROOT'] . '/assests/css/'.$name));
}
// $version($name) = filemtime($_SERVER['DOCUMENT_ROOT'] . '/AncientCity/assests/css/'.$name);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#6d3300">
    <meta name="description" content="This is a brief description of the Ancient City.">
    <meta name="keywords" content="kopitiam, food, beverage, restaurant, cafe">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ancient City</title>

        <!--Toastr-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!--Boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="assests/css/navbar.css?v=<?php echo version("navbar.css")?>">
    <link rel="stylesheet" href="assests/css/footer.css?v=<?php echo version("footer.css");?>">
    <link rel="stylesheet" href="assests/css/main.css?v=<?php echo version("main.css");?>">

    
        <!--Fonts
    <link as="font" href="assests/fonts" crossorigin>
-->
        <!--CSS
    <link rel="stylesheet" href="
   
    assests/css?v
    <?php //echo filetime($_SERVER['DOCUMENT_ROOT'].'assests/css/');?>
    "/>
-->
</head>


    <body class="page_body">
        <div class="main-container">
 