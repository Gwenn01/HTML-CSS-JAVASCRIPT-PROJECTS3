<?php 
    require('database.php');

    if(isset($_POST['create'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $queryCreate = "INSERT INTO tbaccounts (ID, username, password) VALUES (null,  '$username',   '$password') ";
        $sqlCreate = mysqli_query($con, $queryCreate);

        echo "<script>window.location.href = 'index.php';</script>";
    };
?>