<?php
    session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/1caa8e4a18.js" crossorigin="anonymous"></script>
        <link href='https://css.gg/details-more.css' rel='stylesheet'>
        <link href='https://css.gg/profile.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

<body style="background-color:#fff9f5; font-family: Poppins">
<?php include('instructor_navbar.php'); ?><br><br><br>

<?php include('instructor_learningtools_style.php'); ?>

<!-- Learning Tools Description start -->
<div class="container" style="text-align: center; background-color:white; margin-top:50px; position: relative; z-index: 0px; width: 60%; padding:10rem;">
    <h1 class='heading'>Learning Tools</h1>
    <br><br><br>
    <p class="mb-0">Use this area to upload files you wish to share with your students. You can manage who has access to your files
         and what they can do. such as view & download. upload names and more. </p>
</div>
<!-- Learning Tools Description end -->

<br><br>

<div class="LTcontent"><!-- Learning Tools Content start -->
    <input type="text" placeholder="Files">
    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    <button type="button" class="LTNewFolder">New Folder</button>
    <button type="button" class="LTFile"><i class="fa-solid fa-angle-down"></i>&nbsp&nbsp&nbspFile</button>

<table class="LTTable">
    <tr>
        <th width="500px" height="40px">Name</th>
        <th width="200px">Last Updated&nbsp&nbsp <i class="fa-solid fa-sort"></i></th>
        <th width="70px">Views</th>
        <th width="100px">Favorites</th>
        <th width="250px">Contributors</th>
        <th><i class="gg-details-more"></i></th>
    </tr>

    <tr>
        <td><i class="fa-solid fa-file-pdf"></i>&nbsp&nbspFile.pdf</td>
        <td>Jan 23, 2022</td>
        <td>0</td>
        <td><i class="fa-regular fa-star"></i>0</td>
        <td><i class="gg-profile"></i>  Razmin Ellazar</td>
        <td style="text-align:center"><i class="fa-solid fa-ellipsis-vertical"></i></td>
    </tr>

    <tr>
        <td><i class="fa-solid fa-folder"></i>&nbsp&nbspLearning Tools</td>
        <td>Jul 28, 2021</td>
        <td>6</td>
        <td><i class="fa-regular fa-star"></i>4</td>
        <td><i class="gg-profile"></i> Curt Jaurigue</td>
        <td style="text-align:center"><i class="fa-solid fa-ellipsis-vertical"></i></td>
    </tr>

    <tr>
        <td><i class="fa-solid fa-file-pdf"></i>&nbsp&nbspLearning Tools</td>
        <td>Feb 17, 2021</td>
        <td>3</td>
        <td><i class="fa-regular fa-star"></i>3</td>
        <td><i class="gg-profile"></i> Gabriela Andes </td>
        <td style="text-align:center"><i class="fa-solid fa-ellipsis-vertical"></i></td>
    </tr>
    <tr>
        <td><i class="fa-solid fa-folder"></i>&nbsp&nbspEnglish Class</td>
        <td>Nov 23, 2022</td>
        <td>2</td>
        <td><i class="fa-regular fa-star"></i>2</td>
        <td><i class="gg-profile"></i> Yesha Keith Santos </td>
        <td style="text-align:center"><i class="fa-solid fa-ellipsis-vertical"></i></td>
    </tr>
</table>

<br><br>
</div><!-- Learning Tools Content end -->

<footer class="footer-container"> </footer>

</body>
</html>


