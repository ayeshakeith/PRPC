<style>
			.sidenav {
			  height: 100%;
			  width: 250px;
			  position: fixed;
			  z-index: 1;
			  top: 0;
			  left: 0;
			  background-color: #130d4c;
			  overflow-x: hidden;
			  padding-top: 80px;
			  
			}

			.sidenav a {
			  padding: 6px 8px 6px 16px;
			  text-decoration: none;
			  font-size: 25px;
			  color: #818181;
			  display: block;
			  margin-bottom:18px;
			}

			.sidenav a:hover {
			  color: white;
			}

			.main {
			  margin-left: 160px; /* Same as the width of the sidenav */
			  font-size: 28px; /* Increased text to enable scrolling */
			  padding: 0px 10px;
			}

			@media screen and (max-height: 450px) {
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}

</style>

<div class ="container-fluid">
<nav class=" navbar navbar-inverse" style="border-bottom: 0px; margin-bottom:0px;">
    <div class="container-fluid" style="background-color: #f1ece9;">
	
        <ul class="nav navbar-nav sidenav">
		<p style="color: white; font-size: 20px;"><i class="fa fa-user" style="font-size:30px; color:white; margin-left:2vw; margin-bottom:12vh;"></i> &nbsp; <?php echo $_SESSION["name"]; ?></p>
        <li><a href="class_announcement.php" style="color: white; font-size: 20px;"><i class="fa fa-bell" style="font-size:32px; color:white;"></i> &nbsp; ANNOUNCEMENT</a></li><br>
        <li><a href="class_activity.php" style="color: white; font-size: 20px;"><i class="fa fa-upload" style="font-size:32px; color:white;"></i> &nbsp;ACTIVITY</a></li>
        <li><a href="class_submissions.php" style="color: white; font-size: 20px;"><i class="fa fa-list" style="font-size:32px; color:white;"></i> &nbsp;SUBMISSIONS</a></li>
		<li><a href="instructor_ungraded - mark.php" style="color: white; font-size: 20px;"><i class="fa fa-times" style="font-size:32px; color:white;"></i> &nbsp;EXPORT GRADES</a></li>
        </ul>
        
    </div>
</nav>
</div>