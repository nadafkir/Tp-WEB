<?php
do {
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $num3 = rand(1, 100);
} while ($num1 % 2 !== 0 || $num2 % 2 !== 0 || $num3 % 2 === 0);

echo "Suite trouvée : $num1, $num2, $num3";
?>