<?php
    
$con=mysqli_connect('localhost','root');
if($con){
    echo "Connection Successful";
}
else{
    echo "No Connection";
}

mysqli_select_db($con,'test2');

    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $Number = $_POST['Number'];
    $password = $_POST['password'];
    $Pass = $_POST['Pass'];

    $query= "INSERT INTO Registration( fullName, userName, gender, email, password, Pass, Number) VALUES ('$fullName','$userName','$gender','$email','$password','$Pass','$Number')";
    mysqli_query($con,$query);
    header('location:index.html');

    

?>