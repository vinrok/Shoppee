<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/08
 * Time: 10:25 AM
 */

require '../includes/common.php';

    $old_pass = $new_pass = $rpt_new_pass = '';

    if (!isset($_SESSION['email'])){
        header('location: shop.php');
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
            $old_pass = htmlspecialchars(md5($_POST['old']));
            $new_pass = htmlspecialchars(md5($_POST['new']));
            $rpt_new_pass = htmlspecialchars(md5($_POST['repeat-new']));
     }

            $fetch_pass_query = "SELECT password FROM users WHERE password = '$old_pass'";
            $fetch_pass = mysqli_query($con,$fetch_pass_query) or die(mysqli_error("Not Fetched"));

     if (!$fetch_pass){
         echo "<h1>Enter Correct Old Password</h1>";
      }else {
              if (strcmp($new_pass, $rpt_new_pass) == 0) {
                      $update_pass_query = "UPDATE users SET password = '$new_pass'";
                      $update_pass = mysqli_query($con,$update_pass_query) or die(mysqli_error("Not updated"));
                      echo "<h1>Password Updated Successfully";
                    } else {
                               header('location: setting.php');
                   }
           }

?>