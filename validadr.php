<html>
    <head>
        <meta charset="UTF-8">
        
        <?php
        $name = $_POST["name"];
        $car = $_POST["car"];

        $contenido = "
        Nombre: $name
        Carro: $car";

        $archivo = fopen("recibido/$name.txt","w");
        fwrite($archivo,$contenido);


        ?>

        <link rel="stylesheet" href="css/bootstrap.css"/>

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
    
  <h1 class="display-1" style="text-align: center;">Formulado Enviado con Exito</h1>
    
    <script src="js/bootstrap.js"></script>
    </body>

    


</html>