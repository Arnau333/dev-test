<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beonprice Arnau Dev Test</title>
  
   <!-- Styles -->
 <link href = {{ asset("css/app.css") }} rel="stylesheet" />
 <script src = {{ asset("js/app.js") }}> </script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <script src = {{ asset("js/main.js") }}> </script>


</head>
<body>


<!-- En concreto, se realizará una aplicación que recibe
como parámetros la fecha de entrada, la fecha de salida y el número de huéspedes. -->



<div class="container-fluid container-sm" style="margin-top:300px;">

<h1 class="text-primary">Hotel H10 Puerta de Alcalá</h1>

<div class="row">

<div class="alert alert-warning alert-dismissible fade show" role="alert" id="alerterror" style="display:none;">
  <strong>¡Error!</strong> Tienes que rellenar todos los campos.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<div class="col-6">
<form action="getsomething" method="POST" id="mainform"> 
    
    @csrf
    
  <label for="floatingInput">Fecha de entrada</label>
  <input type="date" class="form-control" id="entrada" name="entrada" >
</div>

<div class="col-6">
<label for="floatingInput">Fecha de salida</label>
  <input type="date" class="form-control" id="salida" name="salida" >
</div>

<div class="col-12">
<label for="floatingInput">Número de huéspedes</label>
  <input type="number" class="form-control" id="huespedes" name="huespedes" >
</div>


<button type="submit" class="btn btn-primary form-control" style="width:170px; margin:0 auto; margin-top:10px;">Primary</button>

</form>

</div>


<div id="resultado"></div>

</div>


    
</body>
</html>