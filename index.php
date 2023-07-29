<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];

    $link = mysqli_connect("localhost","root", "" ,"contactform");
    if($link === false){
        die("ERROR: Could not connect." . mysqli_connect_error());
    }   

    $sql = "INSERT INTO information (name,email,phone,message) VALUES ( '$name', '$email','$phone','$message')";

    if(mysqli_query($link,$sql)){
        echo "RECORDS ADDED SUCCESSFULLY!!!";
    }
    else{
        echo "ERROR: UNABLE TO EXECUTE QUERY." . mysqli_error($link);
    }
    mysqli_close($link);
?>