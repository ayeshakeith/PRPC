<style>
    a{
        color: white;
    }

    a:hover{
        color: #130d4c;
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
                    <a href="course_announcement.php"> <span>Announcements</span> </a>
                   
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/ios-glyphs/90/ffffff/document--v1.png" alt="logo">
                    <a href="course_activities.php"> <span>Activities</span> </a>
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/ios-filled/100/ffffff/checkmark--v1.png" alt="logo">
                    <a href="course_submittedworks.php"> <span>Submitted Works</span> </a>
                    
                </div>
                <div class="link">
                    <img src="https://img.icons8.com/fluency-systems-filled/96/ffffff/x.png" alt="logo" >
                    <a href="course_pendingworks.php"> <span>Pending Works</span> </a>
                </div>
        </div>

    </div>
</div>