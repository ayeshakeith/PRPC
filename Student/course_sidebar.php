<style>

    .sidebar-a:hover{
        color: #130d4c !important;
    }

</style>

<div class="sidebar">
    <div class="wrapper">

        <div class="logo">
                <img src="https://img.icons8.com/ios-glyphs/60/ffffff/user--v1.png" alt="logo" width="40px">
                <span> <?php echo $_SESSION['name'] ?></span>
        </div>
        
        <div class="links">
                <div class="link">
                    <img src="https://img.icons8.com/material-rounded/96/ffffff/bell--v1.png" alt="logo">
                    <a class="sidebar-a" href="course_announcement.php" style="color: white"> <span>Announcements</span> </a>
                   
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/ios-glyphs/90/ffffff/document--v1.png" alt="logo">
                    <a class="sidebar-a" href="course_activities.php" style="color: white"> <span>Activities</span> </a>
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/ios-filled/100/ffffff/checkmark--v1.png" alt="logo">
                    <a class="sidebar-a" href="course_submittedworks.php" style="color: white"> <span>Submitted Works</span> </a>
                    
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/fluency-systems-filled/96/ffffff/x.png" alt="logo" >
                    <a class="sidebar-a" href="course_pendingworks.php" style="color: white"> <span>Pending Works</span> </a>
                </div>
        </div>

    </div>
</div>