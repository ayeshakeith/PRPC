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
        width:79%;
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
    .footer-container{
                background-color: #130d4c;
                margin-top: 20%;
                width: 100%;
                height: 5vh;
                color: white;

            }
    .gg-profile{
        float:left;
        margin-right:10px;
    }

    :root {
            --underline-intrinsic-width: 8;
            --underline-width: 12;
            --underline-color: #f1a1e3;
            --underline-cap-width: 4px;
            --underline-offset-y: -12px;
            --underline-padding-x: 0.12em;
            --cap-image-left: url(https://files-d4s40otz1.now.sh/left.svg);
            --cap-image-right: url(https://files-4vvqilj8v.now.sh/right.svg);
            }
  
            .heading {
            display: inline;
            --underline-width-scale: calc(var(--underline-width) / var(--underline-intrinsic-width));
            padding: 0 calc(var(--underline-padding-x) + calc(var(--underline-cap-width) * var(--underline-width-scale)));
            box-decoration-break: clone;
            background-repeat: no-repeat;
            color: black;
            font-size: 50px;
            background-image:
                linear-gradient(180deg, var(--underline-color), var(--underline-color)),
                var(--cap-image-left),
                var(--cap-image-right);
            background-position-x:
                calc(var(--underline-cap-width) * var(--underline-width-scale)),
                0,
                100%;
            background-position-y: calc(100% - var(--underline-offset-y) * -1);
            background-size:
                calc(100% - calc(var(--underline-cap-width) * var(--underline-width-scale) * 2)) calc(var(--underline-width) * 1px),
                auto calc(var(--underline-width) * 1px),
                auto calc(var(--underline-width) * 1px);
            }

            .footer-container{
                background-color: #130d4c;
                margin-top: 20%;
                width: 100%;
                height: 5vh;
                color: white;

            }
	</style>