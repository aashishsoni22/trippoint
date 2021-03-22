<?php

    $server ="localhost";
    $username ="root";
    $password ="";
    $dbname="trippoint";
    
    $con = mysqli_connect($server ,$username, $password,$dbname);

    if(!$con){
        die("connection is failed:".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $roll = $_POST['rollno'];
    $branch = $_POST['branch'];
    $semester = $_POST['semester'];
    $number = $_POST['phonenumber'];
    $email = $_POST['email'];

    $sql ="INSERT INTO `trippoint`(`name`, `roll`, `branch`, `semester`, `phonenumber`, `email`) 
    VALUES ('$name', '$roll', '$branch', '$semester', '$number', '$email')";

    //  $sql ="INSERT INTO `travel` (`name`, `email`, `number`) VALUES ('$name', '$email', '$number')";
    
    if($con->query($sql) == true){
        echo"<h1><center>Submit Successfully</center></h1>";
    }
    else{
        echo"ERROR: $sql <br> $con->error";
    }
    $con->close();
?>