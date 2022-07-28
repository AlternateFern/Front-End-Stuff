<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://css.gg/home.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="https://play-lh.googleusercontent.com/EnxJKkoXzxrmA0RA0gUie0K4gvbRLrQhpflyMzwSMvCfk2FA6o9sBLzfWtG5qLzIBIc">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="color-scheme" content="dark light">
    <link href="navbar.css" rel="stylesheet">
    <link rel="stylesheet" href="homestyle.css">
</head>
<body onload="myLoading()">

    <div class="navbar" id="myNavbar">
    <a class="active" href="home.php"><i class="gg-home"></i>Home</a>
    <a class="infobar" style="float:right" href="info.php"><span>Info</span></a>
    <a href="HTML.php">HTML</a>
    <a href="CSS.php">CSS</a>
    <a href="SCSS.php">SCSS</a>
    <a href="JS.php">JS</a>
    <a href="testplace.php">Test Place</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>
    </div>
    <div id="loader"></div>
        <div id="content" class="animate-bottom">
        <div class="bg">
            <div class="hero-text">
            <h2 style="font-size:50px">WELCOME</h2>
            <hr>
            <h4 style="font-weight:lighter; font-size:20px">Rekayasa Perangkat Lunak</h4>
                <p style="font-weight:lighter; font-size:14px">Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE) adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.</p>
                    <div style="margin: 24px 0; opacity: 0.4">
                        <a class="blackcoloricon" href="https://www.facebook.com/profile.php?id=100072579914490" target="_blank"><i class="fa   fa-facebook"></i></a>
                        <a class="blackcoloricon" href="https://twitter.com/zFernn_n" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a class="blackcoloricon" href="https://www.youtube.com/channel/UCF30Xi9HBdclGLG5ca3H4hg" target="_blank"><i class="fa  fa-youtube"></i></a>
                        <a class="blackcoloricon" href="https://www.instagram.com/zfernn_/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a class="blackcoloricon" href="https://github.com/YellowFernn" target="_blank"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </div>
    <div class="about" id="ab">
        <div class="column">
        <h2>What Do We Learn?</h2>
    </div>
    </div>
    <script>
        function myFunction() {
            var x = document.getElementById("myNavbar");
            if (x.className === "navbar") {
                x.className += " responsive";
            } else {
                x.className = "navbar";
            }
        }

        
        var myVar;

            function myLoading() {
              myVar = setTimeout(showPage, 250);
            }

            function showPage() {
              document.getElementById("loader").style.display = "none";
              document.getElementById("content").style.display = "contents";
            }
    </script>
    </div>
</body>
</html>