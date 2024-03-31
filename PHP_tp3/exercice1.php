<?php
echo '<ul>';
for ($i = 1; $i < 1000; $i++) {
    $num = (string) $i;
    $length = strlen($num);
    $sum = 0;
    for ($j = 0; $j < $length; $j++) {
        $sum += pow((int) $num[$j], $length);
    }
    if ($sum === $i) {
        echo "<li>$i est un nombre d'Armstrong.</li>";
    }
}
echo '</ul>';
?>