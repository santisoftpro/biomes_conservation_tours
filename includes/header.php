<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIOMES CONSERVATION TOURS</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom js file link  -->
    <script src="js/script.js" defer></script>

</head>
<style>


h1{
    font-size: 30px;
    text-align: center;
    color: #CACACA;
}
p{
    position: relative;
    margin: auto;
    width: 100%;
    text-align: center;
    color: #B3B3B3;
    font-size: 14px;
    font-weight: 400;
}
form{
    width: 100%;
    position: relative;
    margin: 30px auto 0 auto;
}
.row{
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
    grid-gap: 20px 30px;
    margin-bottom: 20px;
}
label{
    color: #E3DFE9;
    font-size: 14px;
}
textarea,
input{
    width: 100%;
    font-weight: 400;
    padding: 8px 10px;
    border-radius: 5px;
    border: 1.2px solid #c4cae0;
    margin-top: 5px;
}
textarea{
    resize: none;
}
textarea:focus,
input:focus{
    outline: none;
    border-color: #6f6df4;
}
button{
    border: none;
    padding: 10px 20px;
    background: linear-gradient(
        130deg,
        #6f6df4,
        #4c46f5
    );
    color: #ffffff;
    border-radius: 3px;
    cursor: pointer;
}
select{
    width: 100%;
    font-weight: 400;
    padding: 8px 10px;
    border-radius: 5px;
    border: 1.2px solid #c4cae0;
    margin-top: 5px;
}
option{
    border: 1.2px solid #c4cae0;
}
    
</style>