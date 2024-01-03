<?php
    include 'header.php';
    session_start();
    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
       header('location: login.php');
    }
    if(isset($_SESSION['User'])){
        $loginUser = $_SESSION['User'];
    }
    // logout
    if(isset($_POST['logout'])){
        $_SESSION['status'] = 'invalid';
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <div class="main-account">
        <img src="account.png" alt="logo">
        <h2><?php echo $loginUser['FirstName'] . " " . $loginUser['LastName']?></h2>
        <h3><?php echo $loginUser['Email']?></h3>
        <h3><?php echo $loginUser['Password']?></h3>
        <form action="account.php" method="POST" class="logout-form">
            <input type="submit" name="logout" value="Log Out" id="logout">
        </form>
    </div>
<?php include 'footer.php'?>
</html>