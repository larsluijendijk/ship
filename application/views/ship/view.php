<div class="container">

<?php
echo "<table border='1'><br />";

for ($row = 0; $row < 4; $row ++) {
   echo "<tr>";

   for ($col = 1; $col <= 7; $col ++) {
        echo "<td>", ($col + ($row * 7)), "</td>";
        // 7 has to be the same as 7
   }

   echo "</tr>";
}

echo "</table>";
var_dump($containers); 
?>
</div>