<html lang = "en" dir = "ltr">
<head>
<style>
    body{
        background : url('bg8.jpg');
    }
    div.card{
        border-radius : 10px;
        background : url('bg7.jpg');
        margin-top : 125px;
        margin-left : 375px;
    }
    input{
        border-radius : 5px;
        background-color : black;
        color : white;
    }
    div.card.header{
        border-radius : 20px;
    }
</style>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0" >
<title>Rumus Tabung</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src = "assets/js/jquery.min.js"></script>
<script src = "assets/js/popper.min.js"></script>
<script src= "assets/js/bootstrap.js"></script>
</head>

<body>
    <div class = "container">
    <form action="hasil_tabung.php" method = "POST">
    <div class = "card col-sm-4 bg-dark text-white">
    <div class = "card-header bg-info text-white">
    <font face = "Berlin Sans FB"><h2 align = "center">Rumus Tabung</h2></font>
    </div>
    <div class = "card-body">
    <br>
    <center><h6><b>Masukan Jari Jari Tabung</b></h6></center>
    <center><input type="number" name = "jarijari" value = ""></center>
    <br>
    <br>
    <center><h6><b>Masukan Tinggi Tabung</b></h6></center>
    <center><input type="number" name = "tinggi" value = ""></center>
    </div>
    <div class = "card-footer">
    <button type = "submit" name = "submit" class = "btn btn-info btn-block" value = "volume">
    <font face = "Berlin Sans FB">Volume Tabung</font>
    </button>
    <button type = "submit" name = "submit" class = "btn btn-info btn-block" value = "luas">
    <font face = "Berlin Sans FB">LuasTabung</font>
    </button>
    <br>
    &copy;Copyright by ADAM Himawan
    </div>
    </div>
    </div>
    </form>
    </div>
</body>
</html>