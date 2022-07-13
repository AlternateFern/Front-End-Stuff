<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://css.gg/home.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="https://play-lh.googleusercontent.com/EnxJKkoXzxrmA0RA0gUie0K4gvbRLrQhpflyMzwSMvCfk2FA6o9sBLzfWtG5qLzIBIc">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="color-scheme" content="dark light">
    <link href="navbar.css" rel="stylesheet">

    <style>

        html, body {
            margin: 0;
            font-family: Arial;
            height: 100%
        }

        #navbar {
            text-align: center;
        }

        .bg {
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.967),rgba(0, 0, 0, 0.766)) , url(https://cdn.discordapp.com/attachments/744035173229789257/993736897782349824/typograph.jpg);
            height: 60%;
            background-color: #111;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
        }

        i {
            text-align: center;
            float: left;
            padding-top: 9px;
            margin-top: 3px;
            margin-right: 7px;
            color: gray;
        }

        .navbar .icon {
            display: none;
        }

        .icon {
            margin-top: -10px;

        }

        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {display: none;}
            .navbar a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 600px) {
            .navbar.responsive {position: relative}
            .navbar.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }
            .navbar.responsive a {
                float: none;
                display: block;
                text-align: left;
            }
        }

        .infobar span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .infobar span:after {
            content: '\2192';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .infobar:hover span {
            padding-right: 25px;
        }

        .infobar:hover span:after {
            opacity: 1;
            right: 0;
        }

        .hero-text {
            text-align: left;
            position: absolute;
            color: white;
            width: 35%;
            left: 5%;
            top: 5%;
        }

        .hero-text p {
            color: rgba(255, 255, 255, 0.7);
        }
    </style>
</head>
<body>
    <div class="navbar" id="myNavbar">
    <a class="active" href="home.php"><i class="gg-home"></i>Home</a>
    <a class="infobar" style="float:right" href="info.php"><span>Info</span></a>
    <a href="HTML.php">HTML</a>
    <a href="CSS.php">CSS</a>
    <a href="SCSS.html">SCSS</a>
    <a href="JS.php">JS</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>
    </div>
        <div class="bg">
            <div class="hero-text">
            <h2 style="font-size:50px">WELCOME</h2>
            <h4 style="font-weight:lighter; font-size:20px">Rekayasa Perangkat Lunak</h4>
            <p style="font-weight:lighter; font-size:14px">Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
            <div style="margin: 24px 0">
        <a class="blackcoloricon" href="https://www.facebook.com/profile.php?id=100072579914490" target="_blank"><i class="fa fa-facebook"></i></a>
        <a class="blackcoloricon" href="https://twitter.com/zFernn_n" target=_blank"><i class="fa fa-twitter"></i></a>
        <a class="blackcoloricon" href="https://www.youtube.com/channel/UCF30Xi9HBdclGLG5ca3H4hg" target=_blank"><i class="fa fa-youtube"></i></a>
        <a class="blackcoloricon" href="https://www.instagram.com/zfernn_/" target="_blank"><i class="fa fa-instagram"></i></a>
        <a class="blackcoloricon" href="https://github.com/YellowFernn" target="_blank"><i class="fa fa-github"></i></a>
            </div>
        </div>
        
        <div class="about">
    <script>
        function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }
    </script>
</body>
</html>
