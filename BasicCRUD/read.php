<?php 
    require('./database.php');
    $queryRead = "SELECT * FROM tbaccounts";
    $sqlAccounts = mysqli_query($con, $queryRead);
?>