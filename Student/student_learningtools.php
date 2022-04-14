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
	<style>
    body
    {
        background-color:beige;
    }
    .LTdescription{
        margin: auto auto;
        background-color:white;
        width:50%;
        height:230px;
        text-align:center;
    }
    h1{
        color:#243476;
        padding:50px;
        font-size:40px;
        margin-bottom:-25px;
    }
    h4{
       font-size:12px;
       margin-top:45px;
       color:#243476;
    }
    .LTcontent{
        margin: auto auto;
        background-color:white;
        width:50%;
    }
    .LTcontent input[type=text] {
        margin:20px 16px 20px 20px;
        border: none;
        font-size: 17px;
        width:58%;
        height:30px;
        color:#243476;
    }
    .LTcontent button[type=submit]{
        border:none;
        background-color:white;
        color:blue;
        cursor:pointer;
        font-size:15px;
    }
    .LTNewFolder{
        border-style:solid;
        border-color:#243476;
        color:#243476;
        width:15%;
        height:40px;
        margin-left:10px;
        cursor:pointer;
    }
    .LTFile{
        border-radius:0px;
        border-color:#243476;
        background-color:#243476;
        width:15%;
        height:40px;
        color:white;
        cursor:pointer;
    }
    .LTTable {
        border-collapse:separate;
        border-spacing: 0 50px;
        margin:auto auto;
        margin-top:-35px;
        text-align: left;
        width:90%;
        font-size:14px;
    }
    .LTTable .fa-star
    {        
        float:left;
        font-size:10px;
        margin-right:5px;
    }
    .fa-folder{
        float:left;
        font-size:30px;

    }
    .fa-file-pdf{
        float:left;
        font-size:35px;
    }
    .footer{
        position:fixed;
        bottom:0;
        left:0;
        color:blue;
        background-color:#243476;
        width:100%;
        height: 50px;
    }
    .gg-profile{
        float:left;
        margin-right:10px;
    }
	</style>
    </head>

<body>
<?php include('student_navbar.php'); ?><br><br><br>
<div class="LTdescription"><!-- Learning Tools Description start -->
    <h1> Learning Tools </h1>
    <hr style="width:10%; height:1px; background-color:blue">
    <h4> This area contains video lectures uploaded by the teachers in different subjects. </h4>
</div> <!-- Learning Tools Description end --><br><br>



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

<div class="footer">
    <p></p>
</div>




</body>
</html>


