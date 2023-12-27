<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

    $conn = mysqli_connect('localhost', 'root', '', 'test1') or die("Connection failed: " . mysqli_connect_error());
    if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['mail']) && isset($_POST['pass']) && isset($_POST['gender']) && isset($_POST['mobile1']) && isset($_POST['mobile2']) && isset($_POST['dob']) && isset($_POST['bgroup']) && isset($_POST['ddress'])) {

        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $email = $_POST['mail'];
        $password1 = $_POST['pass'];
        $gender = $_POST['gender'];
        $mobile1 = $_POST['mobile1'];
        $mobile2 = $_POST['mobile2'];
        $dob = $_POST['dob'];
        $bldgrp = $_POST['bgroup'];
        $address = $_POST['ddress'];

        $sql = "INSERT INTO userinfo (`firstname`, `lastname`, `email`, `password1`, `gender`, `mobile1`, `mobile2`, `dob`, `bldgrp`, `address`) VALUES ('$firstname', '$lastname', '$email', '$password1', '$gender', '$mobile1', '$mobile2', '$dob', '$bldgrp', '$address')";

        $query = mysqli_query($conn, $sql);
        if ($query) {
            echo 'Entry Successful';
        } else {
            echo 'Error Occurred';
        }
    } else {
        echo 'One or more fields are empty';
    }
}
?>
