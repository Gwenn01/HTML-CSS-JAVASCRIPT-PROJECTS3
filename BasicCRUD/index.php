<?php 
    require('read.php');
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
        <h2>CREATE USER</h2>
        <form action="create.php" method="post" class="input">
            <input type="text" name="username" placeholder="Enter UserName:" required>
            <input type="text" name="password" placeholder="Enter Password:" required>
            <input type="submit" name="create" value="CREATE">
        </form>
        <table>
            <tr>
                <th>ID</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>ACTIONS</th>
            </tr>
            <?php while($result = mysqli_fetch_array($sqlAccounts)) { ?>
            <tr>
                <td><?php echo $result['ID']?></td>
                <td><?php echo $result['username']?></td>
                <td><?php echo $result['password']?>    </td>
                <td class="edit-delete">
                    <form action="update.php" method="POST">
                        <input type="submit" name="edit" value="EDIT">
                        <input type="hidden" name="updateID" value="<?php echo $result['ID']; ?>">
                        <input type="hidden" name="updateUsername" value="<?php echo $result['username']; ?>">
                        <input type="hidden" name="updatePassword" value="<?php echo $result['password']; ?>">
                    </form>
                    <form action="delete.php" method="POST">
                        <input type="submit" name="delete" value="DELETE">
                        <input type="hidden" name="deletedID" value="<?php echo $result['ID']; ?>">
                    </form>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</center>
</body>
</html>