<?php
session_start();
  if(isset($_SESSION['id_usuario'])) {
      $idUsuario = $_SESSION['id_usuario'];
  }
?>
<!doctype html>
<html lang="en">
  <html lang="en">

  <head>
   <!-- Required meta tags -->

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="../imgs/logo.png">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="../css/estiloCategorias.css">

   
   <title>Seccion Dama</title>

 </head>
 
<body>
    
    <div id="container">
      <div id="header">
          <div id="logo-container">
              <img src="../imgs/logo.jpeg" alt="logo" id="logo">
          </div>

          <div id="welcome-text text-center">
              <h1 class="text-center ">sección de dama</h1>
              <a href="../menuC.html">volver</a>
          </div>
      </div>

      
      <div id="zapatos">

          <!-- Primera fila de productos -->
          <div class="fila">

              <!-- Producto 1 -->
              <div class="producto">
                  <img src="../imgs/imagen3.jpg" alt="Zapato 1">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=5" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla casual adidas</p>
                      <p><strong>Talla:</strong>35</p>
                        <p><strong>Precio:</strong> $150.00</p>
                    
  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
              </div>
              <!-- Producto 2 -->
              <div class="producto">
                  <img src="../imgs/imagen10.jpg" alt="Zapato 2">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=6" method="post">
                    <div class="info">
                      <p><strong>Nombre del Producto:</strong> Zapatilla en plataforma Fila</p>
                      <p><strong>Talla:</strong> 36</p>
                      <p><strong>Precio:</strong> $196.000</p>
                  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
  </div>
              <!-- Producto 3 -->
              <div class="producto">
                  <img src="../imgs/imagen11.jpg" alt="Zapato 3">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=7" method="post">
                  <div class="info">

                    <p><strong>Nombre del Producto:</strong> Zapatilla casual puma</p>
                    <p><strong>Talla:</strong> 37</p>
                    <p><strong>Precio:</strong> $110.000</p>
                
                    <label for="cantidad1">Cantidad:</label>
                      <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                      <input type="submit" value="Añadir al carrito"></input>
    </div>
  </form>
</div>
                  
              <!-- Producto 4 -->
              <div class="producto">
                  <img src="../imgs/imagen2.jpg" alt="Zapato 4">
                  <br>
                  <br>
                  <form action="../prueba.php?idUsuario=<?php echo $idUsuario; ?>&idProducto=8" method="post">
                    <div class="info">
  
                      <p><strong>Nombre del Producto:</strong> Zapatilla casual adidas</p>
                      <p><strong>Talla:</strong> 39</p>
                      <p><strong>Precio:</strong> $200.000</p>
                  
                      <label for="cantidad1">Cantidad:</label>
                        <input type="number" id="cantidad1" name="cantidad" min="1"required><br><br>
                        <input type="submit" value="Añadir al carrito"></input>
      </div>
    </form>
  </div>
                    
                    
              </div>
          </div>
    
  </body>
</html>