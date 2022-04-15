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

            .dropbtn {
            background-color: #f1ece9;
            color: #003d60;
            padding: 15px;
            margin-right: 5px;
            margin-top:2px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            }

            .dropdown {
            position: relative;
            display: inline-block;
            }

            .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1ece9;
            right: 0;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            }

            .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            }

            .dropdown:hover .dropdown-content {
            display: block;
            }
</style>

<nav class="navbar navbar-inverse navbar-static-top navbar-sticky" style="border-bottom: 0px; margin-bottom:0px;">
    <div class="container-fluid" style="background-color: #f1ece9;">
        <ul class="nav navbar-nav">
        <li><a href="student_dashboard.php" style="color: #003d60;">Home</a></li>
        <li><a href="student_mycourses.php" style="color: #003d60;">Courses</a></li>
        <li><a href="student_learningtools.php" style="color: #003d60;">Learning Tools</a></li>
        </ul>
        <div class="topnav-centered">
            <a href="#"><span class="glyphicon glyphicon-education"></span> OnlineSesh</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <div class="dropdown" style="float: right;">
            <button class="dropbtn"><span class="glyphicon glyphicon-chevron-down"></span></button>
            <div class="dropdown-content">
            <a href="#">View Profile</a>
            <a href="../User/user_logout.php">Logout</a>
            </div>
            </div>
            <?php 
            include('dbconnection.php');

            $username = $_SESSION["user"];
            $password = $_SESSION["pass"];


            $query = "SELECT * from user_login WHERE username='$username' AND password = '$password'";
        
            $result = mysqli_query($con, $query);  
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
            $count = mysqli_num_rows($result);

            echo '<img style="width: 5%; height:5%; float:right; padding-top:10px; padding-bottom:10px; border-radius: 50%;" src = "data:image/jpeg;base64,'.base64_encode($row['icon']).'"/>'; 
            ?>
        </ul>
        
    </div>
</nav>