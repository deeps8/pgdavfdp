<?php

    if(isset($_POST['submit'])){
        $mysqli = mysqli_connect('localhost', 'root', '', 'pgdavfdp_2');

        $name = isset($_POST['full-name']) ? mysqli_escape_string($mysqli, $_POST['full-name']) : null;
        $email = isset($_POST['email']) ? mysqli_escape_string($mysqli, $_POST['email']) : null;
        $mob_no = isset($_POST['mob-no']) ? mysqli_escape_string($mysqli, $_POST['mob-no']) : null;
        $designation = isset($_POST['designation']) ? mysqli_escape_string($mysqli, $_POST['designation']) : null;
        $org_name = isset($_POST['univ-name']) ? mysqli_escape_string($mysqli, $_POST['univ-name']) : null;

        $sql = "INSERT INTO `users` (name, org_name, email, designation, mob_no)
                VALUES ('$name', '$org_name', '$email', '$designation', '$mob_no')";

        if(!mysqli_query($mysqli, $sql)){
            header('location: register.php?error=1');
        }else{
            header('location: register.php?error=0');
        }
    }