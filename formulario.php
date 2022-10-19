<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg"  style="background-color: #353a37;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <a href="index.html"> <img src="images/logoChido.png" alt="Logo Museo" width="100" height="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="carrosClasicos.html" style="color:white;" >Carros Clasicos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="carrosDeportivos.html" style="color:white;">Carros deportivos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="carrosElectricos.html" style="color:white;">Carros electricos</a>
          </li>
      </div>
      <a href="formulario.php"> 
        <button type="button" class="btn btn-outline-danger">Colabora con nosotros</button>
      </a>
    </div>
  </nav>
  <h1 class="display-1" style="text-align: center;">Ayudadanos</h1>
  <br> <p style="text-align: center;"> Ingresa un auto que te gustaria ver en este museo, no importa cual sea, nos importa tu opinión.</p>
  <main class="my-5">
    <form action="validadr.php" method="post">  
      <div class="mb-3">
        <label for="name" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="name" >
      </div>
      <div class="mb-3">
        <label for="car" class="form-label">Carro que nos recomienda</label>
        <textarea class="form-control" name="car" rows="3"></textarea>
      </div>
      <button onclick="alerta()"> Enviar </button>
      
    </form>
  </main>
  

    <script src="js/bootstrap.js"></script>
    <script src="js/jsFormulario.js"></script>
    
</body>
</html>