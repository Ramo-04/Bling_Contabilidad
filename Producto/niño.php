<?php
session_start();
  if(isset($_SESSION['id_usuario'])) {
      $idUsuario = $_SESSION['id_usuario'];
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
    <link rel="stylesheet" href="../css/estiloCategorias.css">

    <link rel="icon" href="../imgs/logo.png">
   
    
    <title>Seccion Niño</title>

  </head>
  
<body> 
    
    <div id="container">
      <div id="header">
          <div id="logo-container">
              <img src="../imgs/logo.jpeg" alt="logo" id="logo">
          </div>
          <div id="welcome-text text-center">
              <h1 class="text-center ">sección de niños</h1>
              <a href="../menuC.html">volver</a>
          </div>
      </div>
    
      <div id="zapatos">
          <!-- Primera fila de productos -->
          <div class="fila">
              <!-- Producto 1 -->
              <div class="producto">
                  <img src="../imgs/niño1.jpg" alt="Zapato 1">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=9" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla casual titanitos</p>
                      <p><strong>Talla:</strong>22</p>
                        <p><strong>Precio:</strong> $100.00</p>
                    
  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
   
              </div>
                    
              <!-- Producto 2 -->
              <div class="producto">
                  <img src="../imgs/niño2.jpg" alt="Zapato 2">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=10" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla deportiva theelys</p>
                      <p><strong>Talla:</strong>26</p>
                        <p><strong>Precio:</strong> $120.00</p>
                    
  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
   
              </div>
                        
              <!-- Producto 3 -->
              <div class="producto">
                  <img src="../imgs/niño3.jpg" alt="Zapato 3">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=11" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla deportiva nombre</p>
                      <p><strong>Talla:</strong>24</p>
                        <p><strong>Precio:</strong> $100.00</p>
                    
  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
  </div>
                    
              <!-- Producto 4 -->
              <div class="producto">
                  <img src="../imgs/niño4.jpg" alt="Zapato 4">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=12" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla deportiva panda steps</p>
                      <p><strong>Talla:</strong>28</p>
                        <p><strong>Precio:</strong> $140.00</p>
                    
  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>     

  </body>
</html>