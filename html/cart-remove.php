<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/07
 * Time: 6:29 PM
 */
require '../includes/common.php';

$user_id = $_SESSION['user_id'];
$id = $_GET['id'];
$del_query = "DELETE FROM users_items WHERE user_id ='$user_id' AND item_id='$id'";
mysqli_query($del_query);
header('location: cart.php');
?>