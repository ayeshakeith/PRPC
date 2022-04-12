<html>
    <head>
        <title>Login</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <?php include('user_login_style.php'); ?>
    </head>

    <body style="background-image: url('img/loginbg.jpg'); 
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;">

        <div class="background">
        </div>
            <form action="login_authentication.php" method="POST">
            <h2>Program Repository and Program Checker</h2>
            <br>
            <h2>Sign In</h2>
            <br>
            <input type="text" placeholder="Username" id="username" name="username" required>
            <input type="password" placeholder="Password" id="password" name="password" required>
            <br>
            <button type="submit">Login</button>
            <br/><br/>
            <a href="user_verifyaccount.php">Forgot Password?</a>
        </form>
    </body>
</html>
