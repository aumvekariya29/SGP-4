<?php 
$name = $_POST['name']; 
$email = $_POST['email']; 
$pass = $_POST['pass']; 
if (!empty($name) || !empty($email) || !empty($pass) )
{

    $host = "localhost"; 
    $dbUsername = "root"; 
    $dbPassword = ""; 
    $dbname="jobportal"; //create connection 
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 
    if (mysqli_connect_error()) { die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error()); } 
    else {
        $SELECT = "SELECT email From register where email ? Limit 1"; 
        $INSERT = "INSERT Into register (name, email, pass) values (?, ?, ?)";
        //Prepare statement 
        $stmt = $conn->prepare($SELECT); 
        $stmt->bind_param ("s", $email); 
        $stmt->execute(); 
        $stmt->bind_result($email); 
        $stmt->store_result(); 
        $rnum = $stmt->num_rows; 
        if ($rnum==0) { 
            $stmt->close(); 
            $stmt= $conn->prepare($INSERT); 

            $stmt->bind_param("sss", $name, $email, $pass); 
            $stmt->execute();
            echo "New record inserted sucessfully"; } 
            
            else { echo "Someone already register using this email"; } 
            $stmt->close(); 
            $conn->close();
        }
    }


else {
    echo "All field are required!";
    die();
}

?>