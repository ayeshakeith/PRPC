<div class="container-courses" style="font-family: Poppins;">
            <div class="row-courses">

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php
                                    include('schedule_authentication.php'); 
                                    if($row["course_schedule"] == "Monday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                ?>
                            </p>
                            <p style="margin-top: -5px; margin-left:5px;"> Instructor:
                                <?php
                                    include('schedule_authentication.php'); 
                                    if($row["course_schedule"] == "Monday")
                                    {
                                        echo $row["course_instructor"];
                                    }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Tuesday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                    }
                                } 
                                ?>
                            </p>
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
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Wednesday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                    }
                                } 
                                ?>
                            </p>
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
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Thursday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                    }
                                } 
                                ?>
                            </p>
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
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Friday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                    }
                                } 
                                ?>
                            </p>
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
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:190px;">
                            <a href="#"> <h2 class="card-title mt-3">
                                <?php 
                                include('schedule_authentication.php'); 
                                if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                    if($row["course_schedule"] == "Saturday")
                                    {
                                        echo $row["course_title"];
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
                                    }
                                    }
                                } 
                                ?>
                            </p>
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
                        </div>
                    </div>
                </div>

            </div>
            </div>