<?php 
    require('database.php');
    if(isset($_POST['update'])){
        $ID = $_POST['ID'];
        $updatedUsername = $_POST['username'];
        $updatedPassword = $_POST['password'];
        $queryUpdate = "UPDATE tbaccounts SET username = '$updatedUsername', password = '$updatedPassword' WHERE ID = '$ID'";
        $sqlUpdate = mysqli_query($con, $queryUpdate);
       // Check if the query executed successfully
    if($sqlUpdate) {
        // Redirect to index.php after successful update
        header('Location: index.php');
        exit(); // Exit to avoid further execution
    } else {
        // Handle error if the query fails
        echo "Error updating record: " . mysqli_error($con);
    }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <style>
    *{
        padding: 0%;
        margin: 0%;
    }
    body{
        height: 100vh;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;

    }   
    .main{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .input{
        display: flex;
        flex-direction: column;
        margin-bottom: 50px;
    }
    table{
        width: 800px;
        text-align: center;
    }
    table tr th{

        border: 1px solid black;
    }
    .edit-delete{
        display: flex;
        justify-content: space-between;
    }
    </style>
</head>
<body>
    <center>
    <div class="main">
        <h2>UPDATAE USER</h2>
        <form method="post" class="input">
            <input type="text" name="username" placeholder="Enter UserName:" value="<?php echo $_POST['updateUsername'] ?>">
            <input type="text" name="password" placeholder="Enter Password:" value="<?php echo $_POST['updatePassword'] ?>">
            <input type="hidden" name="ID" value="<?php echo $_POST['updateID'];?>">
            <input type="submit" name="update" value="UPDATE">
        </form>
    </div>
</center>
</body>
</html>