<?php 
    session_start();
    include('header.php');
    require('database.php');
    if($_SESSION['status'] == 'valid'){
        header('location: acount.php');
    }
    if (isset($_POST['signin'])){
        $firstname = trim($_POST['firstname']);
        $lastname = trim($_POST['lastname']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        // check if email already exist
        $queryCheck = "SELECT * FROM tbl_login_form WHERE Email = '$email'";
        $sqlCheck = mysqli_query($connection, $queryCheck);
        if (mysqli_num_rows($sqlCheck) > 0){
            echo "<script> alert('Email Already Exist!!') </script>";
        }else {
            // put all the data in database
            if (empty($firstname) || empty($lastname) || empty($email) || empty( $password)){
                echo "<script>alert('Please Fill up the blank')</script>";
            }else{
                $querySignin = "INSERT INTO tbl_login_form(ID, FirstName, LastName, Email, Password) VALUES(null, '$firstname', '$lastname', '$email', '$password')";
                $slqSignin = mysqli_query($connection, $querySignin);
                header('location: login.php');
            }
       }
    }


?>
    <div class="main">
    <form action="" method="POST" class="form">
            <h2>Sign in</h2>
            <span style="color: red;"></span>
            <div class="label-input">
                <label for="firstname">First Name</label>
                <input type="firstname" name="firstname" id="username" required>
            </div>
            <span style="color: red;"></span>
            <div class="label-input">
                <label for="lastname">Last Name</label>
                <input type="lastname" name="lastname" id="username" required>
            </div>
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
            <a href="login.php" id="sign-in"><span>Log in</span></a>
            <input type="submit" name="signin" id="submit" value="Signin">
        </form>
    </div>
<?php include 'footer.php'?>