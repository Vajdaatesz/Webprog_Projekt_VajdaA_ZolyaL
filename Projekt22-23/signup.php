<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "projekt22-23";

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

session_start();
include("about.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id,user_name,password) values ('$user_id','$user_name','$password')";
        mysqli_query($con, $query);
        header("Location: login.php");
        die;
    } else{
        echo "Kerem helyes adatokat irjon be";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign up</title>
</head>
<body>
<style type="text/css">

    #text{
        height: 25px;
        border-radius: 5px;
        padding: 4px;
        border: solid thin #aaa;
        width: 100%;
    }
    #button{
        padding: 10px;
        width: 100px;
        color: white;
        background-color: lightblue;
        border: none;
    }
    #box{
        background-color: grey;
        margin: auto;
        width: 300px;
        padding: 20px;
    }
</style>

<div id="box">
    <form method="post">
        <div style="font-size: 20px;margin: 10px;color: white">Sign up</div>
        <input id="text" type="text" name="user_name"><br><br>
        <input id="text" type="password" name="password"><br><br>
        <input id="button" type="submit" value="Sign up "><br><br>

        <a href="login.php">Click to Login</a><br><br>
    </form>
</div>
</body>
</html>