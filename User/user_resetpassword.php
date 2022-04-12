<html>
    <head>
        <title>Reset Password</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <?php include('user_login_style.php'); ?>
    </head>

    <body style="background-image: url('img/resetpasswordbg.jpg'); 
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;">

        <div class="background">
        </div>
            <form action="login_resetpassword.php" method="POST">
            <h2>Program Repository and Program Checker</h2>
            <br>
            <h2>Update Password</h2>
            <br>
            <input type="password" placeholder="Enter New Password" id="password1" name="password1" required>
            <input type="password" placeholder="Confirm Password" id="password2" name="password2" required>
            <br>
            <button type="submit">Reset</button>
            <br/><br/>
        </form>
    </body>
</html>
