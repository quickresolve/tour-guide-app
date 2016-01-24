<?php
require_once('connect.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user WHERE email = '$email'";
$result = $mysqli->query($sql);
if(mysqli_num_rows($result)==0){
    echo "E-mail does not exist.";
    return;
}
else {
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password' LIMIT 1";
    $result = $mysqli->query($sql);
    if(mysqli_num_rows($result)==0){
        echo "Password is incorrect.";
        return;
    }
    else{
        while ($row = $result->fetch_assoc()) {
            $user_id = $row["id"];
        }
        // Start session
        session_start();
        $_SESSION['id'] = $user_id;
        echo "dashboard.php";
        return;
    }
}