<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registro de Notas</title>
</head>
<body>
    <?php require "./funciones.php";  ?>
    <h1 class="text-success text-center">Informacion del estudiante</h1>

    <div class="container">
        <form action="" method="POST">
            <label for="">Nombre del Estudiante</label>
            <input type="text" class="form-control" name="estudiante" required>

            <label for="">Nota de Asistencia</label>
            <input type="text" class="form-control" name="asistencia" required>

            <label for="">Nota de Examen</label>
            <input type="text" class="form-control" name="examen" required>

            <label for="">Nota de Tareas</label>
            <input type="text" class="form-control" name="tareas" required>

            <label for="">Nota de Investigacion</label>
            <input type="text" class="form-control" name="investigacion" required>

            <input type="submit" class="btn btn-dark mt-5" value="Evaluar Notas">
        </form>

        <table class="table table-hover">
            <thead>
                <th>Estudiante</th>
                <th>Asistencia</th>
                <th>Examen</th>
                <th>Tarea</th>
                <th>Investigacion</th>
                <th>Nota global</th>
            </thead>
            <tbody>
                <?php calcularNotaGlobal(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>