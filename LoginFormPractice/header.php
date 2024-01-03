<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
    padding: 0%;
    margin: 0%;
}
body{
    font-family: trebuchet MS;
}
.header{
    height: 10vh;
    border: 1px solid black;
    box-shadow: 0 0 10px;
    background-color: navy;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
ul{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 100px;
}
ul li{
    list-style: none;
}
ul li a{
    text-decoration: none;
    color: white;
}
ul li a:hover{
    color: gray;
}
#login{
    margin-right: 20px;
    height: 30px;
    width: 100px;
    color: rgb(255, 247, 247);
    background-color: rgb(0, 0, 0);
    border: 1px solid black;
    border-radius: 10px;
    border: none;
    transition: all ease 1s;
}
#login:hover{
    background-color: gray;
    color: black;
}
#login a{
    text-decoration: none;
    color: rgb(255, 255, 255);
}
#login a:hover{
    color: black;
}
.main{
    height: 85vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.form{
    height: auto;
    width: 400px;
    border: 1px solid black;
    border-radius: 10px;
    box-shadow: 0 0 10px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    justify-content: space-around;
    align-items: center;
    background-color: rgb(182, 189, 204);
}
.label-input{
    display: flex;
    flex-direction: column;
}
input{
    padding: 5px 10px;
    height: 30px;
    width: 300px;
    border: 1px solid black;
    border-radius: 5px;
}
#submit{
    height: 38px;
    width: 330px;
    background-color: rgb(52, 110, 235);
    margin-bottom: 20px;
    border: none;
}
#sign-in{
    text-decoration: none;
    font-size: 15px;

}
.footer{
    height: 5vh;
    border: 1px solid black;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgb(108, 108, 154);
}
.accounts-login{
    display: flex;
    justify-content: space-around;
    align-items: center;
}
.account{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.account span{
    font-size: 10px;
}
.main-account{
    height: 85vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 30px;
}
.main-account #logout{
    height: 38px;
    width: 330px;
    background-color: rgb(52, 110, 235);
    margin-bottom: 20px;
    border: none;
    color: white;
}
#logout:hover{
    color: gray;
}

    </style>
</head>
<body>
<div class="header">
    <h2>Websites</h2>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <div class="accounts-login">
        <button id="login"><a href="login.php">Login</a></button>
        <div class="account">
            <a href="account.php"><i><img src="account.png" alt="account"></i></a>
            <span></span>
        </div>
    </div> 
</div>