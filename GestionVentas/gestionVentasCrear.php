<?php
require '../conexion.php'; // Conexión a la base de datos

// Consultas para obtener los ID de Detalles Pedido y Vendedores
$query_detalles_pedido = "SELECT id_detalles_pedido FROM detalles_pedido";
$result_detalles_pedido = mysqli_query($conectar, $query_detalles_pedido);

$query_vendedores = "SELECT id_vendedor FROM administrador";
$result_vendedores = mysqli_query($conectar, $query_vendedores);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir y validar los datos del formulario
    $id_detalles_pedido = $_POST['id_detalles_pedido'];
    $id_vendedor = $_POST['id_vendedor'];
    $fecha_venta = $_POST['fecha_venta'];
    $fecha_registro = $_POST['fecha_registro'];

    // Crear el SQL para insertar el nuevo registro
    $sql = "INSERT INTO gestion_ventas (id_detalles_pedido, id_vendedor, fecha_venta, fecha_registro)
            VALUES ('$id_detalles_pedido', '$id_vendedor', '$fecha_venta', '$fecha_registro')";

    if (mysqli_query($conectar, $sql)) {
        echo "<script>alert('Nuevo registro creado exitosamente'); window.location.href='gestionVentasLista.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conectar);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Venta - Bling Compra</title>
    <link rel="icon" href="../imgs/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #007bff;
        }
        .navbar-brand {
            color: #ffffff;
        }
        .navbar-nav .nav-link {
            color: #ffffff;
        }
        .sidebar {
            height: 100vh;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: #ffffff;
            padding: 10px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #007bff;
        }
        .content {
            padding: 20px;
        }
        .card {
            margin-bottom: 20px;
        }
        .volver-btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bling Compra</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="../menu.html">Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="../Usuario/validarusuario.php">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../dashboard_v.html">Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard_I.html">Inventario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../Pedido/validarpedido.php">Pedidos</a>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 content">
            <div class="container">
                <h1 class="h2">Crear Nueva Venta</h1>
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="id_detalles_pedido" class="form-label">ID Detalles Pedido:</label>
                        <select name="id_detalles_pedido" id="id_detalles_pedido" class="form-select" required>
                            <?php while($row = mysqli_fetch_assoc($result_detalles_pedido)): ?>
                                <option value="<?php echo $row['id_detalles_pedido']; ?>">
                                    <?php echo $row['id_detalles_pedido']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_vendedor" class="form-label">ID Vendedor:</label>
                        <select name="id_vendedor" id="id_vendedor" class="form-select" required>
                            <?php while($row = mysqli_fetch_assoc($result_vendedores)): ?>
                                <option value="<?php echo $row['id_vendedor']; ?>">
                                    <?php echo $row['id_vendedor']; ?>
                                </option>
                            <?php endwhile; ?>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_venta" class="form-label">Fecha de Venta:</label>
                        <input type="date" name="fecha_venta" id="fecha_venta" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_registro" class="form-label">Fecha de Registro:</label>
                        <input type="date" name="fecha_registro" id="fecha_registro" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Crear Registro</button>
                    <a href="gestionVentasLista.php" class="btn btn-secondary volver-btn">Volver al Listado</a>
                </form>
            </div>
        </main>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
mysqli_close($conectar);
?>
