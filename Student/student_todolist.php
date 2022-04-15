<br><br>
<div class="container" style="text-align: center; background-color:white; position: relative; z-index: 0px; width: 60%; padding:10rem;">
              <h1 class='heading'>To-Do List</h1>
              <br><br><br>
              <p class="mb-0">"Without labor, nothing prospers."</p>
              <footer class="blockquote-footer">Sophocles</footer>
</div>
<br><br>
<div class="container" style="text-align: center; background-color:#fff9f5; width: 79%; font-size: 20px;">
            
                <ul class="list-group">
                <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                              if($row["course_schedule"] == "Monday")
                              {
                                  $course1 = $row["course_name"];
                                  $_SESSION["checkcourse1"] = $course1;
                                  echo $course1 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse1"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course1'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>
                    <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Tuesday")
                              {
                                    $course2 = $row["course_name"];
                                    $_SESSION["checkcourse2"] = $course2;
                                    echo $course2 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                            }
                          } 
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse2"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course2'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>
                    <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Wednesday")
                              {
                                    $course3 = $row["course_name"];
                                    $_SESSION["checkcourse3"] = $course3;
                                    echo $course3 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                            }
                          } 
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse3"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course3'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>
                    <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Thursday")
                              {
                                    $course4 = $row["course_name"];
                                    $_SESSION["checkcourse4"] = $course4;
                                    echo $course4 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                            }
                          } 
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse4"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course4'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>
                    <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Friday")
                              {
                                    $course5 = $row["course_name"];
                                    $_SESSION["checkcourse5"] = $course5;
                                    echo $course5 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                            }
                          } 
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse5"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course5'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>
                    <form action="course_buffer.php" method="POST">
                    <button type="submit" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Saturday")
                              {
                                    $course6 = $row["course_name"];
                                    $_SESSION["checkcourse6"] = $course6;
                                    echo $course6 . " - " . $row["course_title"] . " with " . $row["course_instructor"];
                              }
                            }
                          } 
                        ?>
                        <input style="font-size: 1px;" name="coursename" value="<?php echo $_SESSION["checkcourse6"]; ?>" hidden>
                        <span class="badge badge-primary badge-pill">
                            <?php
                                include('todolist_authentication.php');

                                $sqldeliverable = "select * from deliverable where course_section = '$section' and course_name = '$course6'";
                                $resultdeliverable = mysqli_query($con, $sqldeliverable);  
                                $rowdeliverable = mysqli_fetch_array($resultdeliverable, MYSQLI_ASSOC);  
                                $countdeliverable = mysqli_num_rows($resultdeliverable);  

                                        echo $countdeliverable;
                            ?>
                        </span>
                    </button>
                    </form>

                    

                </ul>
</div>