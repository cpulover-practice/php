<?php
session_start();
//server name, database name, password, database username
$link = mysqli_connect("shareddb-n.hosting.stackcp.net", "db_users-313037d756", "database123", "db_users-313037d756");

//check connection error
if (mysqli_connect_error()) {
    // die("Failed to connect to database!<br>"); //stop the whole script
} else {
    // echo "Connect to database successfully!<br>";
}

// $query = "INSERT INTO user (`email`,`password`) VALUES ('email3','password3')";
// mysqli_query($link,$query);

function getUsers()
{
    global $link;
    $query = "SELECT * FROM user";
    if ($result = mysqli_query($link, $query)) {
        while ($row = mysqli_fetch_array($result)) {
            print_r($row);
        }
    }
}

?>
<?php
if ($_POST) {
    $emailExisted = false;
    $emailInput = $_POST["email"];
    $passwordInput = $_POST["password"];

    $query = "SELECT * FROM user";
    if ($result = mysqli_query($link, $query)) {
        while ($row = mysqli_fetch_array($result)) {
            if ($row["email"] == $emailInput) {
                $emailExisted = true;
            }
        }
    }
    if ($emailExisted) {
        echo "Email existed!";
    } else {
        $_SESSION["email"] = $emailInput;
        $_SESSION["password"] = $_POST["password"];

        //redirect to another page
        header("Location: session.php");

    }
}
?>

<form method="post">
    <input type="text" name="email" id="email" placeholder="Enter email">
    <input type="password" name="password" id="password" placeholder="Enter password">
    <input type="submit" value="Submitt">
</form>