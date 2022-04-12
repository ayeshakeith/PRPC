<html>
    <head>
        <title>Student Dashboard</title>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            .grid-container {
            display: grid;
            grid-template-columns: auto auto auto auto;
            padding: 0px;
            }
            .grid-container1 {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            padding: 0px;
            }
            .grid-item {
            border: 0px;
            padding: 0px;
            font-size: 30px;
            text-align: center;
            }
            .grid-item1 {
            background-color: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(0, 0, 0, 0.8);
            padding: 20px;
            }
        </style>
    </head>

    <body style="background-color:  #f1ece9; font-family: Poppins">
            <?php include('student_navbar.php'); ?>

            <iframe style="width: 100%; height: 80%;" src="https://www.youtube.com/embed/4Q1FzhMY8FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            
            <div class="grid-container">
                <div class="grid-item"><iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/4Q1FzhMY8FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="grid-item"><iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/4Q1FzhMY8FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="grid-item"><iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/4Q1FzhMY8FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>  
                <div class="grid-item"><iframe style="width: 100%; height: 100%;" src="https://www.youtube.com/embed/4Q1FzhMY8FQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
            </div>

            <div class="container" style="text-align: center; background-color:white; margin-top:-20px; position: relative; z-index: 0px; width: 60%;">
            <h1>Weekly <br> Schedule</h1>
            <blockquote class="blockquote text-center">
            <p class="mb-0">"You don't get what you wish for. You get what you work for."</p>
            <footer class="blockquote-footer">Daniel Milstein</footer>
            </blockquote>
            </div>

            <br>

            <div class="container d-flex justify-content-center text-center" style="font-family: Poppins;">
            <div class="row">
                <div class="col-md-4" style="background-color: white; color:#003d60; border-right:1px solid black;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Class Day</p>
                      <br>
                      <h2 class="card-text text-center"><b>Class Title</b></h2>
                      <p class="card-text text-center">Class Time</p>
                      <br>
                      <h4 class="card-text text-center">Instructor Name</h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60;border-right: 1px solid black;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Class Day</p>
                      <br>
                      <h2 class="card-text text-center"><b>Class Title</b></h2>
                      <p class="card-text text-center">Class Time</p>
                      <br>
                      <h4 class="card-text text-center">Instructor Name</h4>
                      <br>
                      <p class="text-center" style="display: inline-block;">
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-plus"></span></button></a>
                      <a href="#"><button type="button" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a>
                      </p>
                      <br>
                    </div>
                  </div>
                </div>
                <div class="col-md-4" style="background-color: white; color:#003d60;">
                  <div class="card" style="width: 100%">
                    <div class="card-body">
                      <br>
                      <p class="card-text text-center">Class Day</p>
                      <br>
                      <h2 class="card-text text-center"><b>Class Title</b></h2>
                      <p class="card-text text-center">Class Time</p>
                      <br>
                      <h4 class="card-text text-center">Instructor Name</h4>
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

          <br><br>

            <div class="container" style="text-align: center; background-color:white; width: 60%; border:10px solid black;">
                <h1>To-Do List</h1>
                <hr style="width: 50%; border-color: black">

                <ul class="list-group">
                    <button type="button" class="list-group-item list-group-item-action">
                        Class Name
                        <span class="badge badge-primary badge-pill">10</span>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        Class Name
                        <span class="badge badge-primary badge-pill">20</span>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        Class Name
                        <span class="badge badge-primary badge-pill">30</span>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        Class Name
                        <span class="badge badge-primary badge-pill">40</span>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">
                        Class Name
                        <span class="badge badge-primary badge-pill">50</span>
                    </button>
                </ul>
            </div>

    </body>
</html>
