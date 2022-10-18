<?php 
    include_once "../database.php";
    if(isset($_POST["submit_login"]))
    {
        $username = $_POST["username"];
        $password = md5($_POST["password"]);

        $user = mysqli_query($connect,
            "SELECT * FROM users 
             WHERE username = '$username' 
             AND password = '$password' LIMIT 1");

        if($user->num_rows === 1)
        {
            while($row = mysqli_fetch_assoc($user))
            {
                session_start();
                $_SESSION["username"] = $row["username"];
                if($row["access"] == 1) //main admin login
                {
                    header("location:../dashboard.php");
                }else if($row["access"] == 2) { //doctor login
                    header("location:../dashboard.doc.php");
                }else{ //patient
                    header("location:../dashboard.pat.php");
                }
            }
        }else{
            echo "failed to login";
        }

        


    }

