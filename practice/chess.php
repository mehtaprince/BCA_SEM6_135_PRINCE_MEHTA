<?php

$size = 8;

echo "<table border='1' cellspacing='0' cellpadding='20'>";

for ($row = 0; $row < $size; $row++) {
    echo "<tr>";
    
    for ($col = 0; $col < $size; $col++) {
       
        if (($row + $col) % 2 == 0) {
            echo "<td bgcolor='white'></td>";
        } else {
            echo "<td bgcolor='black'></td>";
        }
    }
    
    echo "</tr>";
}

echo "</table>";
?>