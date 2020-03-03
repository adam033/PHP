<html lang = "en" dir = "ltr">
<head>
<style media = "screen">
body{
    background : url('bg8.jpg');
}
div.card{
    margin-left : 425px;
    margin-top : 150px;
    border-radius :20px;
}
input{
    border-radius :5px;
}
button{
    border-radius :5px;
}
</style>
<meta charset = "utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src = "assets/js/jquery.min.js"></script>
<script src = "assets/js/popper.min.js"></script>
<script src = "assets/js/bootstrap.js"></script>
<title>Latihan 6</title>
</head>
<body>
<div class = "container">
<form action="hasil6.php" method = "POST">
<div class = "card col-sm-3 bg-white text-black">
<div class = "card-header bg-white text-black">
<font face = "Aharoni"><center><h3>Login Form</h3></center></font>
</div>
<div class = "card-body">
<center><b><p>Username</p></b></center>
<center><input type="text" name="username" id = "username" value = "" placeholder = "username"></center>
<center><b><p>Password</p></b></center>
<center><input type="password" name="password" id = "Password" value = "" placeholder = "password"></center>
</div>
<div class = "card-footer">
<button type = "submit" class = "btn btn-dark btn-block text-white" value = "">
<center><b><p>Login</p></b></center>
</button>
<br>
<center>&copy;Copyright by DAM</center>
</div>
</div>
</form>
</div>   
</body>
</html>