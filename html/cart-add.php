<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/07
 * Time: 4:02 PM
 */
    require '../includes/common.php';

    $item_id = $_GET['id'];
    $add_item_query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to Cart')";

    $add_item = mysqli_query($con,$add_item_query);

    header('location: products.php');