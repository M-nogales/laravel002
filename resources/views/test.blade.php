<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

use App\Models\Alumnos;

    $alumnos = Alumnos::find(1);
    foreach ($alumnos->materias as $materias) {
    echo $materias->pivot->created_at;
    }
    ?>
</body>
</html>