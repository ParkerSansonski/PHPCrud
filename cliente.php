<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT * FROM clientes";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
    <div class="cointainer mt-5">
        <div class="row">
            <div class="col-md-3">
                <h1>Ingrese datos</h1>
                <form action="insertar.php" method="POST">
                    <input type="text" class="form-control mb-3" name="ID" placeholder="ID">
                    <input type="text" class="form-control mb-3" name="Cliente" placeholder="Cliente">
                    <input type="text" class="form-control mb-3" name="RFC" placeholder="RFC">
                    <input type="text" class="form-control mb-3" name="CP" placeholder="C.P">
                    <input type="text" class="form-control mb-3" name="ITEM" placeholder="ITEM">
                    <input type="text" class="form-control mb-3" name="Impuestos" placeholder="Impuestos ITEMs">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
            <div class="col-md-8">
                <table class="table">
                    <thead class="table-sucess table-striped">
                        <tr>
                            <th>id</th>
                            <th>Cliente</th>
                            <th>RFC</th>
                            <th>C.P</th>
                            <th>ITEM</th>
                            <th>Impuestos ITEMs</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                            <tr>
                                <th><?php echo $row['ID'] ?></th>
                                <th><?php echo $row['Cliente'] ?></th>
                                <th><?php echo $row['RFC'] ?></th>
                                <th><?php echo $row['C.P'] ?></th>
                                <th><?php echo $row['ITEM'] ?></th>
                                <th><?php echo $row['Impuestos ITEMs'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['ID']?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['ID']?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>


        </div>



    </div>

</body>

</html>