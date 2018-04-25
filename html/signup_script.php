<?php
/**
 * Created by PhpStorm.
 * User: chitr
 * Date: 18/01/07
 * Time: 10:36 AM
 */
    require '../includes/common.php';

    $name = $email = $password = $contact = $city = $address = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $contact = htmlspecialchars($_POST['contact']);
        $city = htmlspecialchars($_POST['city']);
        $address = htmlspecialchars($_POST['address']);
    }

    $name_regex = "/^([A-Z]){1}([a-zA-Z0-9]).{2,20}$/";
    $pass_regex = "/(?=^.{8,}$)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/";
    $phone_regex = "/^[\+]\d{2}\d{2}\d{4}\d{4}$/";

    if (!preg_match($name_regex,$name)){
        //header('location: signup.php?name_error=enter correct name');
        echo include '../includes/header.php';
        echo "<h1 style='padding: 5px;'>Incorrect Name Format</h1>";
     }
     if (!preg_match($pass_regex,$password)){
            //header('location: signup.php?password_error=enter correct password');
            echo "<h1>Incorrect Password Format</h1>";
        }
     if (!preg_match($phone_regex,$contact)){
            //header('location: signup.php?contact_error=enter correct Phone number');
            echo "<h1>Incoorect Contact details</h1>";
        }

        $password =md5($password);

        $select_query = "SELECT id FROM users WHERE email LIKE '$email'";

        $select_check = mysqli_query($con,$select_query);
        $select_row = mysqli_num_rows($select_check);

        if ($select_row > 0){
            $error = mysqli_error("User with Email already exist");
            echo $error;
            }
        else {
            $insert_query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$password', '$contact', '$city', '$address')";

            mysqli_query($con,$insert_query);
            $_SESSION['email'] = $email;
            $_SESSION['user_id'] = mysqli_insert_id($con);
            header('location: products.php');
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <?php
        include '../includes/header.php';
    ?>

        <div id="pad-top" class="container">
            <div class="jumbotron">
                <h1>Sign Up Details</h1>
                <?php echo "<h3>User Registered Succesfully </h3>";
                     echo "<a href='products.php' class='btn btn-lg btn-success'>Shop Now</a>";
                    include '../includes/footer.php'; }    ?>
            </div>
        </div>

</body>

</html>

