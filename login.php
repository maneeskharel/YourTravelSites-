﻿<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome, to Your Travel</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body
        {
            margin: 0;
            padding: 0;
            background: url(background.jpg);
            background-size: cover;
            font-family: sans-serif;
        }
        .loginBox
        {
            position: absolute;
            top: 30%;
            left: 40%;
            transform: translate(-50%. -50%);
            width: 350px;
            height: 420px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0,0,0,.5);
        }
        .user
        {
            width: 100px;
            height: 100px;
            overflow: hidden;
            position: absolute;
            border-radius: 50%;
            top: -50px;
            left: 125px;
        }
        h2
        {
            margin: 0;
            padding: 0 0 20px;
            color: #efed40;
            text-align: center;
        }
        .loginBox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #fff;
        }

        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
        }
        .loginBox input[type="text"],
        .loginBox input[type="password"]
        {
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
        }
        .loginBox input[type="submit"]
        {
            border: none;
            outline: none;
            height: 40px;
            color: #fff;
            font-size: 16px;
            background: #efed40;
            cursor: pointer;
            border-radius: 20px;
        }
        .loginBox input[type="submit"]:hover
        {
            background: #efed40;
            color: #262626;
        }
        .loginBox a
        {
            color:#fff;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;

        }





    </style>
</head>
<body>

    <div class="loginBox">
        <img scr="user.PNG" class="user" />
        <h2>Log In Here</h2>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" />
            <p>Password</p>
            <input type="text" name="password" placeholder="******" />
            <input type="submit" name="login_user" value="Sign In"/>
            <a href="forgotpassword.html">Forgot Password</a>
            <a style="padding:20px" href="register.php">Sign Up Here</a>

        </form>
    </div>

</body>
</html>