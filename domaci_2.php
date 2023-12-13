<?php

    $naslov = "Postani Programer";
    $stavke = ["Glavna", "O nama", "Kontakt"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Postani Programer</title>
</head>
<body>
    <h1> <?php echo $naslov ?> </h1>
    <nav>
        <a> <?php echo $stavke[0] ?> </a>
        <a> <?php echo $stavke[1] ?> </a>
        <a> <?php echo $stavke[2] ?> </a>
    </nav>
</body>
</html>