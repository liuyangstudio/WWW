<?php
echo "<table border='1' cellspacing='0'> ";

for ($i = 1; $i <= 9; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= $i; $j++) {
        echo "<td> $j&times;$i=" . $i * $j . " </td>";
    }
    echo "<tr/>";
}


echo "</table>";