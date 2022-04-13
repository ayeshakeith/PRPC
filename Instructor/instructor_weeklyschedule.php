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
                              if($row["course_schedule"] == "Monday")
                              {
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
                              if($row["course_schedule"] == "Monday")
                              {
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
                              if($row["course_schedule"] == "Monday")
                              {
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
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Tuesday")
                              {
                                  echo $row["course_name"];
                              }
                              else
                              {
                                  echo "N/A";
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
                              else
                              {
                                  echo "---";
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
                                  echo $row["course_section"];
                              }
                              else
                              {
                                  echo "---";
                              }
                            }
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
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Wednesday")
                              {
                                  echo $row["course_name"];
                              }
                              else
                              {
                                  echo "N/A";
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
                              else
                              {
                                  echo "---";
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
                                  echo $row["course_section"];
                              }
                              else
                              {
                                  echo "---";
                              }
                            }
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
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Thursday")
                              {
                                  echo $row["course_name"];
                              }
                              else
                              {
                                  echo "N/A";
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
                              else
                              {
                                  echo "---";
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
                                  echo $row["course_section"];
                              }
                              else
                              {
                                  echo "---";
                              }
                            }
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
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Friday")
                              {
                                  echo $row["course_name"];
                              }
                              else
                              {
                                  echo "N/A";
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
                              else
                              {
                                  echo "---";
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
                                  echo $row["course_section"];
                              }
                              else
                              {
                                  echo "---";
                              }
                            }
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
                          if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                              if($row["course_schedule"] == "Saturday")
                              {
                                  echo $row["course_name"];
                              }
                              else
                              {
                                  echo "N/A";
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
                              else
                              {
                                  echo "---";
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
                                  echo $row["course_section"];
                              }
                              else
                              {
                                  echo "---";
                              }
                            }
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