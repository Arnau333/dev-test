<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beonprice Arnau Dev Test</title>
  
   <!-- Styles -->
 <link href = {{ asset("css/app.css") }} rel="stylesheet" />
 <link href = {{ asset("js/app.js") }} rel="stylesheet" />

</head>
<body>


<!-- En concreto, se realizará una aplicación que recibe
como parámetros la fecha de entrada, la fecha de salida y el número de huéspedes. -->



<div class="container-fluid container-sm">

<h1 class="text-primary">Hotel H10 Puerta de Alcalá</h1>

<div class="row">



<div class="col-6">
  <label for="floatingInput">Fecha de entrada</label>
  <input type="month" class="form-control" id="entrada" name="entrada" >
</div>

<div class="col-6">
<label for="floatingInput">Fecha de salida</label>
  <input type="month" class="form-control" id="salida" name="salida" >
</div>

<div class="col-12">
<label for="floatingInput">Número de huéspedes</label>
  <input type="number" class="form-control" id="huespedes" name="huespedes" >
</div>

</div>

</div>
    
</body>
</html>