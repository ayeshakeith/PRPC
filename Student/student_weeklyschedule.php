<div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4" style="background-color: white; color:#003d60; border-right:1px solid #D3D3D3; border:1px solid #D3D3D3; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Monday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                              if($row["course_schedule"] == "Monday")
                              {
                                  echo $row["course_name"];
                              }
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                              if($row["course_schedule"] == "Monday")
                              {
                                  echo $row["course_time"];
                              }
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                              if($row["course_schedule"] == "Monday")
                              {
                                  echo $row["course_instructor"];
                              }
                        ?>
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60; border: 1px solid #D3D3D3; border-bottom:1px solid #D3D3D3; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Tuesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Tuesday")
                              {
                                  echo $row["course_name"];
                              }
                            }
                          } 
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Tuesday")
                              {
                                  echo $row["course_time"];
                              }
                            }
                          } 
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
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
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60; border:1px solid #D3D3D3; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Wednesday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Wednesday")
                              {
                                  echo $row["course_name"];
                              }
                            }
                          } 
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Wednesday")
                              {
                                  echo $row["course_time"];
                              }
                            }
                          } 
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
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
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="background-color: white; color:#003d60; border:1px solid #D3D3D3; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Thursday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Thursday")
                              {
                                  echo $row["course_name"];
                              }
                            }
                          } 
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Thursday")
                              {
                                  echo $row["course_time"];
                              }
                            }
                          } 
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
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
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60; border: 1px solid #D3D3D3; padding:2rem;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Friday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Friday")
                              {
                                  echo $row["course_name"];
                              }
                            }
                          } 
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Friday")
                              {
                                  echo $row["course_time"];
                              }
                            }
                          } 
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
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
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60; padding:2rem; border: 1px solid #D3D3D3;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Saturday</p>
                      <br>
                      <h2 class="card-text text-center"><b>
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Saturday")
                              {
                                  echo $row["course_name"];
                              }
                            }
                          } 
                        ?>
                      </b></h2>
                      <p class="card-text text-center">
                        <?php 
                          include('schedule_authentication.php'); 
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Saturday")
                              {
                                  echo $row["course_time"];
                              }
                            }
                          } 
                        ?>
                      </p>
                      <br>
                      <h4 class="card-text text-center">
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
                      </h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
            </div>
</div>