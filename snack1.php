<?php
$matches = [
     'Olimpia Milano - Cantù | 55-60',
     'Virtus Bologna - Fortitudo Bologna | 72-80',
     'Pallacanestro Varese - Pallacanestro Reggiana | 70-50',
    ];
//echo $matches['match1'];
//echo $matches['match2'];
//echo $matches['match3'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
       <?php for($i = 0; $i < count($matches); $i++) : ?>
        <li>
           <p> <?= $matches[$i] ?> </p>
        </li>
       <?php endfor; ?>
    </ul>
</body>
</html>


