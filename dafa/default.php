<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>RPL</title>
    <link rel="stylesheet" href="style.css">
    <style>

        .active {
    background-color: rgb(213, 196, 15);
    }

    li a:hover:not(.active) {
    background-color: #111;
    }

    li a:hover {
    background-color: rgb(86, 80, 12);
    }

    h1 {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        text-shadow: 1px 1px 5px silver
    }

    h3 {
        font-family: Arial, Helvetica, sans-serif;
    }

    .darkmodenav {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    }

    /*rgb color or smth*/
    .rgb {
    background: linear-gradient(to right, #bfbfbf, #b3b3b3 , #a6a6a6, #999999, #8c8c8c);
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: rainbow_animation 6s ease-in-out infinite;
    background-size: 400% 100%;
    padding-top: 30px;
    }

    @keyframes rainbow_animation {
    0%,100% {
        background-position: 0 0;
    }

    50% {
        background-position: 100% 0;
    }
    }

    .dark-mode {
        background-color: #111;
        color: white
    }

    .vertical {
        writing-mode : vertical-rl;
        font-family: Arial, Helvetica, sans-serif;
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
        color:white
    }

    .dark_rgb {
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

    
    .bg {
        background-image: linear-gradient(rgba(0, 0, 0, 0.985),rgba(0, 0, 0, 0.6)) , url(https://cdn.discordapp.com/attachments/744035173229789257/993736897782349824/typograph.jpg);
        background-color: #111;
        padding-bottom: 500px;

    }

    html, body {
        margin:0px;
    }

    #bg2 {
        background-color: #ededd8;
        border-radius: 25px;
        width: 1200px;
        height: 900px;
        margin: auto;
        height: 50hv;
        animation: animate 5s ease infinite;
    }

    @keyframes animate {
        0%{
            background-color: gold;
        }
        50%{
            background-color: #fbff53;
        }
        100%{
            background-color: gold;
        }
    }
    
    .leftalign {
        text-align: left;
        margin-left: 50px;
        margin-right: 40px;
        font-size: larger;
    }

    </style>
</head>
<body>

    <ul>
        <li><a class="active" href="default.php">Home</a></li>
        <li style="float:right"><a href="info.php">Info</a></li>
        <li><a href="HTML.php">HTML</a></li>
        <li><a href="CSS.php">CSS</a></li>
        <li><a href="PHP.php">PHP</a></li>
        <li><a href="JAVA.php">JAVA</a></li>
    </ul>
    <div class="bg">
    <div class="header">WELCOME</div>
    <div id="bg2">
    <h1 class="rgb">RPL / PPLG</h1>
    <b class="dark_rgb">Rekayasa Perangkat Lunak / Pengembangan Perangkat Lunak dan Gim</b>
    <p style="color: black" class="leftalign">
<b style="color: black">Rekayasa Perangkat Lunak (RPL, atau dalam bahasa Inggris: Software Engineering atau SE)</b> adalah satu bidang profesi yang mendalami cara-cara pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak dan manajemen kualitas.
    </p>
    <img src="https://www.projectcubicle.com/wp-content/uploads/2022/05/types-of-software.png-1.webp" style="width:1200px;height:500px;">
    <i style="color: black">source : https://www.projectcubicle.com/5-things-every-business-needs-in-order-to-become-a-success/types-of-software-png-1/</i>
    </div>
</div>
</body>
</html>