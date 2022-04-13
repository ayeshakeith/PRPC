<style>
            .navbar-sticky{
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 2;
            }

            .topnav-centered a {
            float: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #003d60;
            }
</style>

<nav class="navbar navbar-inverse navbar-sticky" style="border-bottom: 0px; margin-bottom:0px;">
    <div class="container-fluid" style="background-color: #f1ece9;">
        <ul class="nav navbar-nav">
        <li><a href="student_dashboard.php" style="color: #003d60;">Home</a></li>
        <li><a href="student_mycourses.php" style="color: #003d60;">Courses</a></li>
        <li><a href="#" style="color: #003d60;">Learning Tools</a></li>
        </ul>
        <div class="topnav-centered">
            <a href="#">OnlineSesh</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
        <li><a href="../User/user_logout.php"><span class="glyphicon glyphicon-log-out"></span></a></li>
        </ul>
        
    </div>
</nav>