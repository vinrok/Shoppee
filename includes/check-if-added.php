<?php
    /**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/07
 * Time: 2:14 PM
 * @param $con
 * @param $item_id
 * @return int
 */
    function check_added_to_cart($item_id,$con){

        include 'common.php';

        $user_id = $_SESSION['user_id'];

        $select_query = "SELECT * FROM users_items WHERE item_id=$item_id AND user_id=$user_id status='Added to Cart'";

        $run_query = mysqli_query($con,$select_query);
        $row_check = mysqli_num_rows($run_query);                   //returns number of rows ....

        if ($row_check >= 1){
            return 1;
        } else {
            return 0;
        }
    }

  ?>