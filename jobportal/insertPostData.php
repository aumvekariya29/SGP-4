<?php

// echo "abshbh";
include 'config.php';
// echo "abshbh";

if (isset($_POST['jay'])) {
    // echo "abshbh";

    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $pass = md5($_POST['pass']);
    // $cpass = md5($_POST['c_pass']);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $company = $_POST['company'];
    $jobtitle = $_POST['jobtitle'];
    $address = $_POST['address'];
    $jobdescription = $_POST['jobdescription'];

    echo "`$name`,`$email`,`$number`,`$company`,`$jobtitle`,`$address`,`$jobdescription`";


    $reg1 = "SELECT * FROM `post` WHERE 1";
    $reg2 = mysqli_query($conn, $reg1);
    echo $reg2;


    $insert = "INSERT INTO `post`(`name`, `email`, `number`, `company`, `jobtitle`, `address`, `jobdescription`) VALUES (`$name`,`$email`,`$number`,`$company`,`$jobtitle`,`$address`,`$jobdescription`)";
    $reg = mysqli_query($conn, $insert);

    echo "abshbhjj";

    if ($reg==1) {
        echo "sucess";
        header("location:home.html");


    } else {
        echo "wrong";
    }

    // $select = " SELECT * FROM user WHERE email = '$email's";

    // $result = mysqli_query($conn, $select);

    // if (mysqli_num_rows($result) > 0) {

    //     $error[] = 'user already exist!';

    // } else {

    //     if ($pass != $cpass) {
    //         $error[] = 'password not matched!';
    //     } else {
    //         $insert = "INSERT INTO user (username, email, password) VALUES('$name','$email','$pass')";
    //         mysqli_query($conn, $insert);
    //         header("location:login.php");
    //     }
    // }

}
else{
    echo "data not found";
}
?>