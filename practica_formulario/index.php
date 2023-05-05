<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php 
        /**
         * require
         * include
         */
        require "./funciones.php";
    ?>
    <div class="container">
        <h1 class="text-center text-primary">Lugares Turisticos</h1>

        <form action="" method="POST">
            <label for="">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre">

            <label for="">Direccion</label>
            <input type="text" class="form-control" name="direccion">

            <label for="">Seleccione lugar turistico</label>
            <select name="lugares" class="form-control">
                <option value="Costa del Sol">Costa del Sol</option>
                <option value="Las Palmeras">Las Palmeras</option>
                <option value="El Pital">El Pital</option>
                <option value="Termos del rio">Termos del rio</option>
            </select>

            <input type="submit" class="btn btn-success" value="Ver Descuento">
        </form>

        <?php descuento_lugar_turistico(); ?>
    </div>
</body>
</html>