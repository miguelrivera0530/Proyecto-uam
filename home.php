<?php
$string = '{"nombre": "Rivera"}';
$resultado = json_decode($string);
var_dump($resultado);
$int = 1;
$suma = 1+2;
echo = suma;
/* condicion IF*/
$a = 1;
$b = 2;
if ($a > $b) {
  $resultado = "es menor";
}
else{
  $resultado = "es mayor";
}
elseif ($a = $b) {
  $resultado = "es igual";
}
/* condicion WHILE*/
$a=1;
while ($a <= 10 ){
  $a++;
  if ($a = 4) {
    $texto = "gano";

  }
}
/* LISTA */
$a = 1;
while ($a <= 15){
  $a++;
}
if ($a = 1){
  $resultado = "perdio";
}
if ($a = 2){
  $resultado = "perdio";
}
if ($a = 3){
  $resultado = "raspado";
}
if ($a = 4){
  $resultado = "paso";
}
if ($a = 5){
  $resultado = "paso con la nota mas alta";
}
if ($a >5){
  $resultado = "Las notas solo se registran del 1 al 5";
}
if ($a <1){
  $resultado = "Las notas no pueden ser 0 o negativas mijo";
}





?>

<!doctype html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>hola mundo!</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <header class="header">
      <div class="container-fluid">
        <div class="row">
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                    <li class="nav-item">      
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    </ul>
                   </div>
          </div>
          </nav>
          </div>
        
        <div class="row">
                  <div class="col">
                  <ul class="list-group">
                  <li class="list-group-item">An item</li>
                  <li class="list-group-item">A second item</li>
                  <li class="list-group-item">A third item</li>
                  <li class="list-group-item">A fourth item</li>
                  <li class="list-group-item">And a fifth one</li>
                  </ul>
          </div>
          <div class="col">
            <div class="card" style="width: 18rem;">
              <img src="../proyecto/images/lake-4117714_640.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col">
            <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
              </ul>
          </div>
                    
        </div>
  <script src="js/script.js"></script>
  </body>
</html>