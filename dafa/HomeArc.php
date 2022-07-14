<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RPL ARCHIVE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://css.gg/home-alt.css">
    <link rel="icon" type="image/x-icon" href='https://icon-library.com/images/archives-icon/archives-icon-10.jpg'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="color-scheme" content="dark light">
    <style>

    .active {
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

    .infobar {
        float: right;
        width: 80px;
        background-color: rgb(86, 80, 12)
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


    h1 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-shadow: 1px 1px 5px silver
    }

    h3 {
        font-family: Arial, Helvetica, sans-serif;
    }


    .rpl {
    background: linear-gradient(to right, #bfbfbf, #b3b3b3 , #a6a6a6, #999999, #8c8c8c);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: rainbow_animation 6s ease-in-out infinite;
    background-size: 400% 100%;
    padding-top: 30px;
    text-shadow: 0px 0px 10px #bfbfbf;
    }

    @keyframes rainbow_animation {
    0%,100% {
        background-position: 0 0;
    }

    50% {
        background-position: 100% 0;
    }
    }


    @keyframes rainbow_animation {
    0%,100% {
        background-position: 0 0;
    }

    50% {
        background-position: 100% 0;
    }
    }

    * {
        text-align: center;

    }

    .dark_rgb {
        text-shadow: 0px 0px 10px #bfbfbf;
    background: linear-gradient(to right, #023030, #023106 , #555705, #643806, #5f0404);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: rainbow_animation 2s ease-in-out infinite;
    background-size: 400% 100%;
    border-color: #fbff00;
    font-family: Arial, Helvetica, sans-serif;
    font-style:italic;
    }


    .header {
        background-color: gold;
        padding-top: 20px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-left: 30px;
        font-size: 300%;
        color: black;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    html, body {
        margin:0px;
    }

    
    .bg {
        background-image: linear-gradient(rgba(0, 0, 0, 0.985),rgba(0, 0, 0, 0.6)) , url(https://cdn.discordapp.com/attachments/744035173229789257/993736897782349824/typograph.jpg);
        background-color: #111;
        padding-bottom: 800px;
        padding-top: 10px;
    }



    #bg2 {
        background-color: #e7e7c9;
        border-radius: 25px;
        width: 1200px;
        height: 3000px;
        margin: auto;
        padding-right : 10px;
        margin-top: 50px;

    }
    
    .leftalign {
        text-align: left;
        margin-left: 50px;
        margin-right: 40px;
        font-size: larger;
    }

    .align {
        text-align: center;
        width: 1000px;
        height: 400px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    b {
        font-family: Arial;
    }

    
    .sticky {
        position: fixed;
        top: 0;
        width: 100%;
    }

    .sticky + .content {
        padding-top: 60px;
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
    </style>
</head>
<body>
<b><div class="header">WELCOME</div></b>
    <div id="navbar"><b>
            <a class="active" href="HomeArc.php">Home</a>
            <a class="infobar" href="infoArc.php"><span>Info</span></a>
            <div class="dropdown">
                <button class="dropbtn"><b>About</b>
                <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="HtmlArc.php">HTML</a>
                    <a href="CssArc.php">CSS</a>
                    <a href="JsArc.php">JS</a>
                </div>
            </div>
            <a href="test.php">Go Back</a>
     </b></div>
                            <div class="bg">
                    <div id="bg2">
                <div class="content">
            <h1 class="rpl">RPL / PPLG</h1>
        <b class="dark_rgb">Rekayasa Perangkat Lunak / Pengembangan Perangkat Lunak dan Gim</b>
    <p style="color: black" class="leftalign">
<b style="color: black">Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE)</b> adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
</p>
    <img class="align" src="https://www.projectcubicle.com/wp-content/uploads/2022/05/types-of-software.png-1.webp";>
    <br>
    <i style="color: black">source : https://www.projectcubicle.com/5-things-every-business-needs-in-order-to-become-a-success/types-of-software-png-1/</i>

        <h1 class="rpl">Sejarah RPL</h1>
<p class="leftalign"><b style="color: black"> Istilah <i style="color: black">software engineering</i>, pertama kali digunakan pada akhir tahun 1950-an dan sekitar awal 1960-an. Pada tahun 1968, <b style="color: #128cc7"> NATO</b>
menyelenggarakan konferensi tentang software engineering di Jerman dan kemudian dilanjutkan pada tahun 1969. Meski penggunaan kata software engineering masukan konferensi tersebut menimbulkan debat tajam tentang aspek engineering dari pengembangan perangkat lunak, banyak pihak yang menganggap konferensi tersebutlah yang menjadi awal tumbuhnya profesi rekayasa perangkat lunak
                </b></p>
                <br>
                <p class="leftalign" style="font-weight: 1000;"><b style="font-size: 30px;">1945 - 1965: Awal</b></p>
                <hr>
                <p class="leftalign"><b style="color: black"> Istilah <i>software engineering</i> digunakan pertama kali pada akhir 1950-an dan awal 1960-an. Saat itu, masih terdapat debat tajam mengenai aspek engineering dari pengembangan perangkat lunak.
<br>
<br>
Pada tahun 1968 dan 1969, komite sains NATO mensponsori dua konferensi tentang rekayasa perangkat lunak, yang memberikan dampak kuat terhadap perkembangan rekayasa perangkat lunak. Banyak yang menganggap bahwa dua konferensi inilah yang menandai awal resmi profesi rekayasa perangkat lunak. jangan pernah menganggap kalau software itu akn menjadi yang terbaik karena itu adalah sebuah karya yang bersifat sementara.
                </b></p>
                <p class="leftalign" style="font-weight: 1000;"><b style="font-size: 30px;">1965 - 1985: krisis perangkat lunak</b></p>
                <hr>
                <p class="leftalign"><b style="color: black"> Pada tahun 1960-an hingga 1980-an, banyak masalah yang ditemukan para praktisi pengembangan perangkat lunak. Banyak projek yang gagal, hingga masa ini disebut sebagai <b style="color: red">krisis perangkat lunak</b>. Kasus kegagalan pengembangan perangkat lunak terjadi mulai dari projek yang melebihi anggaran, hingga kasus yang mengakibatkan kerusakan fisik dan kematian. Salah satu kasus yang terkenal antara lain meledaknya roket Ariane akibat kegagalan perangkat lunak.</b></p>

                <i>source: https://id.wikipedia.org/wiki/Sejarah_rekayasa_perangkat_lunak</i>
                <br>
                <p class="leftalign" style="font-weight: 1000;"><b style="font-size: 30px;">Tragedi Roket Ariane 5</b></p>
                <img class="align" src="https://media.discordapp.net/attachments/744035173229789257/994140978808098856/unknown.png";>
                <p class="leftalign"><b style="color: black"> Ariane 5 adalah roket kelas berat yang dikembangkan oleh 10 negara Eropa. Roket ini dalam penyempurnaannya jadi roket andalan yang masih digunakan sampai sekarang.
                <br>
                <br>
                Di perkembangan awalnya, roket Ariane 5 ini pertamakali dilontarkan pada 4 Juni 1996. Namun permasalahannya, dengan perkembangan roket dengan tingkatan jauh lebih besar dan kuat, komputer internal dan software yang menanganinya, hanya menggunakan software lawas milik Ariane 4.
                <br>
                <br>
                Ketika kecepatan melebihi kemampuan komputer, angka yang terkomputerisasi akhirnya bergeser dan membuat roket berbelok tiba-tiba. Akhirnya terjadi ledakan udara dan roket hancur di angkasa. Segala muatannya pun ikut hancur.</b></p>
                <i>source: https://www.merdeka.com/teknologi/6-kesalahan-komputer-terfatal-sepanjang-sejarah.html</i>
                </div>
            </div>
        </div>

        <script>
            window.onscroll = function () {myFunction()};

            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            function myFunction() {
                if (window.pageYOffset >= sticky) {
                    navbar.classList.add("sticky")
                }
                else {
                    navbar.classList.remove("sticky");
                }
            }
            
        </script>
    </body>
</html>