<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
</head>







<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href={{ url('css/style.css') }} rel="stylesheet" type="text/css" />
<div class="topnav" id="myTopnav">
    <div class="nav-bar">
        <a href="acceuil" class="active">Acceuil</a>
    </div>
    <center>
    <div class="licence">
        <a href="L1">Licence 1</a>
        <a href="L2">Licence 2 </a>
        <a href="L3">Licence 3</a>
        <a href="M1">Master 1</a>
        <a href="M2">Master 2</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="logo">
        <img src={{ url('image/logo.png') }} style="width:125px;height: 44px">
    </div>
    </center> 
</div>









<script>
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


</body>
</html>