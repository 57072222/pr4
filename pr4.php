<?php
$start = 4;
$end = 9;

echo "<table border='1'>";
echo "<tr><th>число</th><th>квадрат</th></tr>";

for ($i = $start; $i <= $end; $i++) {
    echo "<tr><td>" . $i . "</td><td>" . ($i * $i) . "</td></tr>";
}

echo "</table>";
?>
<p></p>

<?php
echo "<table border='1'>";
echo "<tr><th>&nbsp;</th>";

for ($i = 4; $i <= 9; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($i = 4; $i <= 9; $i++) {
    echo "<tr><th>$i</th>";
    for ($j = 4; $j <= 9; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>