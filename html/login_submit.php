<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/07
 * Time: 8:38 AM
 */
    include '../includes/common.php';

    $email = $password = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = mysqli_real_escape_string($con,$_POST['email']);
        $password = mysqli_real_escape_string($con,md5($_POST['password']));
    }
    /*
    function test_input ($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    } */

    $user_query = "SELECT id, email FROM users WHERE email LIKE '$email' AND password LIKE '$password'";

    $user_login = mysqli_query($con,$user_query);
    $user_row = mysqli_num_rows($user_login);

    if ($user_row == 0){
        echo "<h2>User Not Available</h2>";
        header('location: login.php');
    }
    else {
        mysqli_fetch_array($user_login);
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = mysqli_insert_id($con);
        header('location: products.php');
    }
?>