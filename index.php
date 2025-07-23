<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/datatables.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="JS/DataTables/datatables.min.js"></script>
</head>
<body class="container mt-4">

    <h2 class="mb-4">Lista de Productos</h2>
    <a href="create.php" class="btn btn-primary mb-3">Nuevo Producto</a>

    <table class="table table-bordered" id="miTabla">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = $conn->query("SELECT * FROM productos");
            while ($row = $result->fetch_assoc()):
            ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre'] ?></td>
                    <td>$<?= $row['precio'] ?></td>
                    <td><?= $row['cantidad'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <script>
      $(document).ready(function() {
        $('#miTabla').DataTable({
          language: {
            search: "Buscar:",
            lengthMenu: "Mostrar_MENU_registros",
            paginate: {
              first: "Primero",
              last: "Último",
              next: "Siguiente",
              previous: "Anterior"
            }
          },
          info: false
        });
      });
    </script>

</body>
</html>

        <?php
        $result = $conn->query("SELECT * FROM productos");
        while ($row = $result->fetch_assoc()):
        ?>
        <tbody>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nombre'] ?></td>
                <td>$<?= $row['precio'] ?></td>
                <td><?= $row['cantidad'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar producto?')">Eliminar</a>
                </td>
            </tr>
            <tbody>
        <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>