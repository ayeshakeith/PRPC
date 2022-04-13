<div class="tab-content">
    <div id="bm1" class="tab-pane fade in active">
        <div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-right:1px solid black; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Monday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60;border-right: 1px solid black; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Tuesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Wednesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-right:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Thursday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60;border-right: 1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Friday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Saturday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM1'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
                
    <div id="bm2" class="tab-pane fade">
    <div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-right:1px solid black; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Monday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Monday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60;border-right: 1px solid black; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Tuesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Tuesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-bottom:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Wednesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Wednesday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; border-right:1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Thursday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Thursday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60;border-right: 1px solid black; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Friday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Friday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: #fff9f5; color:#003d60; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Saturday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                      <?php 
                          include('schedule_authentication.php'); 

                            $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_name"];
                            }
                            else
                            {
                                echo "N/A";
                            }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_time"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                      <?php 
                          include('schedule_authentication.php'); 
                          $sql = "select * from course where course_instructor = '$name' and course_schedule = 'Saturday' and course_section = 'BM2'";
                            $result = mysqli_query($con, $sql);  
                            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                            $count = mysqli_num_rows($result);  

                            if (mysqli_num_rows($result) > 0) {
                            echo $row["course_section"];
                            }
                            else
                            {
                                echo "---";
                            }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>