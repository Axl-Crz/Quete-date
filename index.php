<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retour vers le futur</title>
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <?php

    $presentTime = new DateTime('now', new DateTimeZone('Europe/paris'));
    $destinationTime = new DateTime('2024-05-28 07:45');

    $difference = $presentTime->diff($destinationTime);


    ?>
    <h1>“La route ? Là où on va, on n’a pas besoin de route !”</h1>
    <br>
    <div class="destination">
        <h1><?php echo $destinationTime->format('M d Y h:iA') . '<br>' . 'Destination Time' . '<br>' . '<br>'; ?>
        </h1>
    </div>

    <div class="present">
        <h1><?php echo $presentTime->format('M d Y h:iA') . '<br>' . 'Present Time' . '<br>' . '<br>'; ?>
        </h1>
    </div>
    <div class="difference">
        <?php echo $difference->format('%yan %mmois %djours %hheures et %iminutes') . '<br>' . 'Time Difference'; ?>
    </div>
</body>

</html>