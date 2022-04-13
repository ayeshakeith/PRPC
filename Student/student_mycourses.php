<html>
    <head>
        <title>My Courses</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>

            html{
                scroll-behavior: smooth;
            }

            .container-image{
                margin: 0;
                padding: 0;
                width: 100%;
            }

            .container-mycourses{
                margin: 0 auto;
                margin-top: 80px;
                width: 21%;
                height: 11%;
                position: relative;
                text-align: center;
                background-color: #db9a53;
                border: 5px solid white;
                color: white;
                z-index: 1;
            }

            .container-courses{
                margin: 0 auto;
                margin-top:-65px;
                width: 80%;
                height: 100%;
            }
            
            .row-courses{
                margin: 0 auto;
                padding: 140px;
                height: 150vh;
                background-color: #fccb96;
            }

            .card{
                margin-bottom: 30px;
            }

            .card-image{
                padding: 0px;
                margin: 0px;
                left: 0;
                height: 157px;
                width: 100%;
            }

            .footer-container{
                background-color: #130d4c;
                margin-top: 30%;
                width: 100%;
                height: 5vh;
                color: white;

            }

        </style>
    </head>

    <body style="background-color:#f1ece9; font-family: Poppins">
            <?php include('student_navbar.php'); ?>

            <div class="container-image" id="home">
                <img src="https://gosaintjoseph.org/wp-content/uploads/2016/03/stj-header-books.jpg" alt="books" height="500px" width="100%">
            </div>
            
            <div class="container-mycourses">
                <h1>My Courses</h1>
            </div>

            <br>

            <div class="container-courses" style="font-family: Poppins;">
            <div class="row-courses">

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:157px;">
                            <a href="#"> <h2 class="card-title mt-3"> Computer Programming 1 </h2> </a>
                            <p class="muted-text"> CS126-8 </p>
                            <p> This course focuses on the logic formulation in solving problem using flowcharting and pseudocodes. </p>
                            <p style="margin-top: -5px"> Instructor: Kamisato Ayato </p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:157px;">
                            <a href="#"> <h2 class="card-title mt-3"> Computer Programming Laboratory 1 </h2> </a>
                            <p class="muted-text"> CS126-8L </p>
                            <p> The course focuses on hands-on activities on topics such as: data types, control structures, and functions. </p>
                            <p style="margin-top: -5px"> Instructor: Kamisato Ayato </p>
                            <!-- <button class="btn btn-primary" type="submit">Button</button> -->
                            <br>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:157px;">
                            <a href="#"> <h2 class="card-title mt-3"> Understanding The Self </h2> </a>
                            <!-- <p class="muted-text"> GED101 </p> -->
                            <p> The course deals with the nature of identity, as well as the factors and forces that affects the development of our personal identity. </p>
                            <p> Instructor: Thoma </p>
                            <!-- <button class="btn btn-primary" type="submit">Button</button> -->
                            <br>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px;">
                            <img src="https://images.pexels.com/photos/92866/pexels-photo-92866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:157px;">
                            <a href="#"> <h2 class="card-title mt-3"> Introduction to Computer Science </h2> </a>
                            <p> This course provides an overview of the Computing Industry and Computing profession, with Research and practical applications </p>
                            <p> Instructor: Tartaglia </p>
                            <!-- <button class="btn btn-primary" type="submit">Button</button> -->
                            <br>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="row">
                        <div class="col-md-3" style="background-color: white; padding: 0px">
                            <img src="https://images.pexels.com/photos/247929/pexels-photo-247929.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="card-image" alt="books">
                        </div>
                        <div class="col-md-9" style="background-color: white; height:157px;">
                            <h2 class="card-title mt-3"> Subject Course </h2>
                            <p> Date and Time </p>
                            <p> Professor Name </p>
                            <button class="btn btn-primary" type="submit">Button</button>
                            <br>
                        </div>
                    </div>
                </div>

            </div>
            </div>

        <footer class="footer-container"> </footer>
    </body>
</html>
