<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href={{ url('css/style.css') }} rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
</head>
<body>
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
<a href="{{ url('/logout') }}"> logout </a>
<table id="table_id" class="display">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Numero etudiant</th>
        </tr>
    </thead>
    <tbody>
        @foreach($eleves as $elevess)
        <tr>
            <th>{{ $elevess->id }}</th>
            <th>{{ $elevess->nom }}</th>
            <th>{{ $elevess->prenom }}</th>
            <th>{{ $elevess->numero_etudiant }}</th>
        </tr>
        
        @endforeach
    </tbody>



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