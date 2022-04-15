<div class="container-courses" style="font-family: Poppins;">
            <div class="row-courses">

            <?php
            include('instructor_authentication.php');
            ?>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php
                                    echo $row['course_title'];
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                        echo $row["course_name"] . " - " . $row["course_description"];
                                        $class = $row["course_name"];
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="classname" value="<?php echo $class ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Section:
                                <?php
                                        echo $row["course_section"];
                                        $sec = $row["course_section"];
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="classsection" value="<?php echo $sec; ?>" hidden>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <?php
                while($row = mysqli_fetch_assoc($result)) {
                ?>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <form action="list_buffer.php" method="POST">
                        <button type="submit" class="col-md-9" style="background-color: white; height:190px; text-align:left;">
                        <h2 class="card-title mt-3" style="display: inline-block;">
                                <?php
                                    echo $row['course_title'];
                                ?>
                            </h2> </a>
                            <hr style="width: 1px solid black;">
                            <p class="muted-text" style="margin-left:5px;">
                                <?php 
                                        echo $row["course_name"] . ": " . $row["course_description"];
                                        $class = $row["course_name"];
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="classname" value="<?php echo $class ?>" hidden>
                            <input style="font-size: 1px;" name="coursename" value="<?php echo $cn1; ?>" hidden>
                            <p style="margin-top: -5px; margin-left:5px;"> Section:
                                <?php
                                        echo $row["course_section"];
                                        $sec = $row["course_section"];
                                ?>
                            </p>
                            <input style="font-size: 1px;" name="classsection" value="<?php echo $sec; ?>" hidden>
                            <br>
                            </form>
                            </button>
                    </div>
                </div>

                <?php
                }
                ?>

            </div>
            </div>
