<?php

require 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $dob = mysqli_real_escape_string($db, $_POST['dob']);
    $email = mysqli_real_escape_string($db, $_POST['emailid']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $age = mysqli_real_escape_string($db, $_POST['age']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $cpass = mysqli_real_escape_string($db, $_POST['conpass']);
    if($dob == NULL||$email==Null||$name==NULL||$pass!=$cpass)
    {
        $res = [
            'status' => 422,
            'message' => 'All fields are mandatory'
        ];
        echo json_encode($res);
        return;
    }
	



    $query = "INSERT INTO login (email, pass, name, age, dob, phonenumber,gender,address) VALUES ('$email', '$pass', '$name', '$age', '$dob', '$phone','$gender','$address')";
    $query_run = mysqli_query($db, $query);

       if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Account Created'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Details Not Updated'
        ];
        echo json_encode($res) ;
        return;
    }
	
}
?>