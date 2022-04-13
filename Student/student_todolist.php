<div class="container" style="text-align: center; background-color:#fff9f5; width: 60%; padding:10rem;">
            <h1 class='heading'>To-Do List</h1>
            <br><br><br><br>
                <ul class="list-group">
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                              if($row["course_schedule"] == "Monday")
                              {
                                  $course1 = $row["course_name"];
                                  echo $course1;
                              }
                        ?>
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
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Tuesday")
                              {
                                    $course2 = $row["course_name"];
                                    echo $course2;
                              }
                            }
                          } 
                        ?>
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
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Wednesday")
                              {
                                    $course3 = $row["course_name"];
                                    echo $course3;
                              }
                            }
                          } 
                        ?>
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
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Thursday")
                              {
                                    $course4 = $row["course_name"];
                                    echo $course4;
                              }
                            }
                          } 
                        ?>
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
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Friday")
                              {
                                    $course5 = $row["course_name"];
                                    echo $course5;
                              }
                            }
                          } 
                        ?>
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
                    <button type="button" class="list-group-item list-group-item-action">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Saturday")
                              {
                                    $course6 = $row["course_name"];
                                    echo $course6;
                              }
                            }
                          } 
                        ?>
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
                </ul>
</div>