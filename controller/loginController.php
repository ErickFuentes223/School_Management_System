<?php

include_once "../tools/connection.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] === "POST") {

        if (!empty($_POST["username_login"]) && !empty($_POST["pswd_login"])){
            $username = $_POST["username_login"];
            $password = $_POST["pswd_login"];

            $sql = $conex ->query("SELECT * FROM users WHERE username = '$username'");
            if ($datos = $sql->fetch_object()){
                $usernamedb = $datos->username;
                $passworddb = $datos->password;

                if ($username == $usernamedb && $password == $passworddb){
                    $_SESSION["ID_User"] = $datos->id_user;
                    $_SESSION["Username"] = $datos->username;
                    $_SESSION["Type"] = $datos->type_user; 
                    
                switch($_SESSION["Type"]){
                    case 1:
                        header("location:../view/teacher");
                    break;
                    case 2:
                        header("location:../view/student");
                    break;
                    default:
                        echo "Error";

                    }
                }
            }
                header("location:../view/index.php");
        }
    }
   


?>