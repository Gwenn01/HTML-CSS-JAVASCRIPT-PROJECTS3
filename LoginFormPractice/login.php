<?php
    require('database.php');
    session_start();
    if ($_SESSION['status'] == 'invalid' || empty($_SESSION['status'])){
        $_SESSION['status'] = 'invalid';
    }else{
        header('location: account.php');
    }

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(empty($email) || empty($password)){
            echo "<script>alert('Please Fill up the blank')</scritp>";
        }else{ 
            $queryLogin = "SELECT * from tbl_login_form WHERE Email = '$email'";
            $sqlLogin = mysqli_query($connection, $queryLogin);
            $userdata = mysqli_fetch_assoc($sqlLogin);
            if ($sqlLogin && mysqli_num_rows($sqlLogin) > 0){
                if ($userdata['Password'] == $password){
                    $_SESSION['User'] = $userdata;
                    $_SESSION['status'] = 'valid';
                    header('location: account.php');
                }else{
                    echo "<script>alert('Invalid Password')</script>";
                    $_SESSION['status'] = 'invalid';
                }
            }else{
                echo "<script>alert('Invalid Login')</script>";
                $_SESSION['status'] = 'invalid';
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php'?>
    <div class="main">
        <form action="" method="POST" class="form">
            <h2>Log in</h2>
            <span style="color: red;"></span>
            <div class="label-input">
                <label for="email">Email</label>
                <input type="email" name="email" id="username" required>
            </div>
            <span style="color: red;"></span>
            <div class="label-input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"  required>
            </div>
            <a href="signin.php" id="sign-in"><span>Sign in</span></a>
            <input type="submit" name="login" id="submit" value="Login">
        </form>
    </div>
<?php include 'footer.php'?>
</html>