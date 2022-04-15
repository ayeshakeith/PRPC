<div class="container-courses" style="font-family: Poppins;">
            <div class="row-courses">

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php
                                    include('schedule_authentication.php'); 
                                    if($row["course_schedule"] == "Monday")
                                    {
                                        $_SESSION["verifycourse1"] = $row["course_title"];
                                        echo $_SESSION["verifycourse1"];
                                    }
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                    if($row["course_schedule"] == "Monday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn1 = $row["course_name"];
                                    }
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn1; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor:
                                <?php
                                    include('schedule_authentication.php'); 
                                    if($row["course_schedule"] == "Monday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Tuesday")
                                    {
                                        $_SESSION["verifycourse2"] = $row["course_title"];
                                        echo $_SESSION["verifycourse2"];
                                    }
                                    }
                                } 
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Tuesday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn2 = $row["course_name"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn2; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor:
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Tuesday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Wednesday")
                                    {
                                        $_SESSION["verifycourse3"] = $row["course_title"];
                                        echo $_SESSION["verifycourse3"];
                                    }
                                    }
                                } 
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Wednesday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn3 = $row["course_name"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn3; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor: 
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Wednesday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Thursday")
                                    {
                                        $_SESSION["verifycourse4"] = $row["course_title"];
                                        echo $_SESSION["verifycourse4"];
                                    }
                                    }
                                } 
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Thursday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn4 = $row["course_name"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn4; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor: 
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Thursday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Friday")
                                    {
                                        $_SESSION["verifycourse5"] = $row["course_title"];
                                        echo $_SESSION["verifycourse5"];
                                    }
                                    }
                                } 
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Friday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn5 = $row["course_name"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn5; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor: 
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Friday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Saturday")
                                    {
                                        $_SESSION["verifycourse6"] = $row["course_title"];
                                        echo $_SESSION["verifycourse6"];
                                    }
                                    }
                                } 
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Saturday")
                                    {
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $cn6 = $row["course_name"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn6; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor: 
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Saturday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                    }
                                } 
                                ?>
                            </p>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

            </div>
            </div>