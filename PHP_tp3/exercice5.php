<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    $delta = $b * $b - 4 * $a * $c;

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo "Les solutions sont : x1 = $x1, x2 = $x2";
    } elseif ($delta === 0) {
        $x = -$b / (2 * $a);
        echo "La solution double est : x = $x";
    } else {
        echo "L'équation n'a pas de solution réelle.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice6 tp3 php</title>
</head>

<body>
    <form method="post">
        <label for="a">Coefficient a :</label>
        <input type="number" name="a" required>
        <label for="b">Coefficient b :</label>
        <input type="number" name="b" required>
        <label for="c">Coefficient c :</label>
        <input type="number" name="c" required>
        <button type="submit">Calculer</button>
    </form>
</body>

</html>