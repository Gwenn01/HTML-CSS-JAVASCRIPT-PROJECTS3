<?php
require('database.php');
if(isset($_POST['delete'])){
    $deletedID = $_POST['deletedID'];
    $queryDelete = "DELETE from tbaccounts WHERE ID = '$deletedID'";
    $sqlDele = mysqli_query($con, $queryDelete);
    echo "<script>alert('Successfully Deleted!')</script>";
    header("location: index.php");
}

?>