<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>RPL INFO</title>
    <style>

    .infobar {
        float: right;
        width: 80px;
        background-color: rgb(213, 196, 15);
    }


    #navbar {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    }

    a {
    float: left;
    display: inline;
    }

    #navbar a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    transition: all 0.3s ease;
    }


    #navbar a:hover:not(.active) {
    background-color: black;
    }

    #navbar a:hover, .dropdown:hover .dropbutton .dropdown-content:hover {
    background-color: rgb(86, 80, 12);
    }

    .dropdown {
      float: left;
      overflow: hidden;
    }

    .dropdown .dropbtn {
      font-size: 16px;  
      border: none;
      outline: none;
      color: white;
      padding: 14px 16px;
      background-color: inherit;
      font-family: Arial;
      margin: 0;
    }

    .navbar a:hover, .dropdown:hover .dropbtn {
      background-color: #111;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #333;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      float: none;
      color: white;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: left;
    }

    .dropdown-content a:hover {
        background-color: white;
    }

    .dropdown:hover .dropdown-content {
         display: block;
        }

    html, body {
        margin:0px;
    }

    .blackcoloricon {
        font-size: 22px;
        color: black;
        padding: 4px;
        margin-left: 30px;
        margin-bottom: 6px;
        text-align: center;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        max-width: 305px;
        height: 550px;
        margin: auto;
        text-align: center;
        font-family: Arial;
        background-color: white;
    }

    /* profile */

    .profile {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        max-width: 300;
        margin: auto;
        text-align: center;
        font-family: Arial;
    }

    .title {
        color: grey;
        font-size: 18px;
    }
    
    .schoolname {
        color: #3b3b3b;
        font: arial;
        font-size: 18px;
    }

    a.button:hover, a:hover {
        opacity: 0.7;
    }

    a.button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        text-align: center;
        cursor: pointer;
        width: 289px;
        font-size: 18px;
        color: black;
        background-color: #f8eb01;
    text-decoration: white;
}

    /* end of profile */

    .bg {
        background-image: linear-gradient(rgba(0, 0, 0, 0.985),rgba(0, 0, 0, 0.6)) , url(https://cdn.discordapp.com/attachments/744035173229789257/993736897782349824/typograph.jpg);
        background-color: #111;
        margin-top: -20px;
        padding-bottom: 500px;
    }

    h2 {
        text-align: center;
        padding-top: 25px;
        color: white;
        font-family: Helvetica;
        text-shadow: 0px 0px 10px #bfbfbf;
    }

    </style>
</head>
<body>
    <div id="navbar"><b>
            <a href="default.php">Home</a>
            <a class="infobar" style="float:right" href="info.php">Info</a>
            <div class="dropdown">
                <button class="dropbtn"><b>About</b>
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="HTML.php">HTML</a>
                    <a href="CSS.php">CSS</a>
                    <a href="PHP.php">PHP</a>
                    <a href="JavaScript.php">JS</a>
                </div>
            </div>
     </b></div>
    
    <div class="bg">
    <h2>Website Created By :</h2>
    <div class="card">
        <img src="https://cdn.discordapp.com/avatars/543985691336507402/1b39041f55cea801167956dd4d95207d.png?size=4096">
        <h1>M. Daffa Azriel .F</h1>
        <p class="title">Student</p>
        <p class="schoolname">SMK TI Muhammadiyah</p>
        <div style="margin: 24px 0;">
        <a class="blackcoloricon" href="https://www.facebook.com/profile.php?id=100072579914490" target="_blank"><i class="fa fa-facebook"></i></a>
        <a class="blackcoloricon" href="https://twitter.com/zFernn_n" target=_blank"><i class="fa fa-twitter"></i></a>
        <a class="blackcoloricon" href="https://www.youtube.com/channel/UCF30Xi9HBdclGLG5ca3H4hg" target=_blank"><i class="fa fa-youtube"></i></a>
        <a class="blackcoloricon" href="https://www.instagram.com/zfernn_/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a class="blackcoloricon" href="https://github.com/YellowFernn" target="_blank"><i class="fa fa-github"></i></a>
        
        <b><p><a href="https://wa.me/6283178955441" target="_blank" class="button">Contact Us</a></p></b>
        
                </div>
            </div>
        </div>
    </body>
</html>
