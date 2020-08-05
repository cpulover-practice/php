<?php
session_start();
// $_SESSION["username"] = "cpulover";
if($_SESSION["email"]){
    echo "Signed in: ";
    echo $_SESSION["email"];
    echo $_SESSION["password"];
} else {
    header("Location: database.php");
}
