<?php
$tinggi = $_POST["tinggi"];
$jarijari = $_POST["jarijari"];
if ($_POST["submit"] == "luas"){
    $hasil = 2 * 3.14 * $jarijari * ($jarijari + $tinggi); 
}
if ($_POST["submit"] == "volume"){
    $hasil =3.14 * $jarijari * $jarijari * $tinggi;
}
?>
<html lang = "en" dir = "ltr">
    <head>
    <style media = "screen">
    div.card{
        margin-left : 425px;
        margin-top : 175px;
        border-radius : 20px;
    }
    input{
        border-radius : 5px;
    }
    body{
        background : url('bg7.jpg');
    }
    
    </style>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
        <title>
            Hasil Tabel
        </title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <script src = "assets/js/jquery.min.js"></script>
        <script src = "assets/js/popper.min.js"></script>
        <script src= "assets/js/bootstrap.js"></script>
    </head>
    <body>
        <div clas = "container">
            <form action="Tabung.php" method = "GET">
                <div class = "card col-sm-4 bg-dark text-white">
                    <div class = "card-header bg-info text-white">
                        <center><font face = "Berlin Sans FB">Hasil Bangun Tabung</font></center>
                    </div>
                    <div class = "card-body">
                        <center><b><p>Hasil Rumus<p></b></center>
                        <center><input type="text" id="$hasil" value="<?php echo $hasil?>"><center>
                    </div>
                    <div class = "card-footer">
                    <center>&copy;Copyright by Adam Himawan</center>
                    
                    </div>

                </div>
            </form>
        </div>
    </body>
</html>