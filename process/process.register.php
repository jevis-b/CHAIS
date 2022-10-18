<?php 
    include_once '../database.php';
    include 'addusers.php';
    if(isset($_POST["submit"]))
    {
        $username     = $_POST["username"];
        $password     = $_POST["password"];
        $con_password = $_POST["con_password"];

        if($password == $con_password)
        {
            $enc_password = md5($password);
            $is_added = mysqli_query($connect, 
            "INSERT INTO users(username, password) VALUES ('$username', '$enc_password')") 
            or die(mysqli_error($connect));

            if($is_added) header("location:../index.php");
        }        
    }