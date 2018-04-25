<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/06
 * Time: 7:51 PM
 */
session_start();

        if(!isset($_SESSION['email'])){
            header('location: shop.php');
        }

    session_destroy();
    header ('refresh=4;url=shop.php');
?>