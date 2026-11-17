
<?php
$a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$b = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));

$m = count($a);
$n = count($a[2]);
$p = count($b);
$q = count($b[2]);

echo "\$m = ".$m." \$n = ".$n." \$p = ".$p." \$q = ".$q;

echo "<h3>The first matrix:</h3>";

for ($row = 0; $row < $m; $row++) {
    for ($col = 0; $col < $n; $col++)
        echo $a[$row][$col]." &nbsp;&nbsp; ";
    echo "<br/>";
}

echo "<h3>The second matrix:</h3>";

for ($row = 0; $row < $p; $row++) {
    for ($col = 0; $col < $q; $col++)
        echo $b[$row][$col]." &nbsp;&nbsp; ";
    echo "<br/>";
}

echo "<h3>The transpose of the first matrix is:</h3>";

for ($row = 0; $row < $n; $row++) {
    for ($col = 0; $col < $m; $col++)
        echo $a[$col][$row]." &nbsp;&nbsp; ";
    echo "<br/>";
}

if (($m === $p) and ($n === $q)) {
    echo "<h3>The addition of matrices is:</h3>";

    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $n; $col++)
            echo ($a[$row][$col] + $b[$row][$col])." &nbsp;&nbsp; ";
        echo "<br/>";
    }
}

if ($n === $p) {
    echo "<h3>The multiplication of matrices:</h3>";

    $result = array();

    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $q; $j++) {
            $result[$i][$j] = 0;

            for ($k = 0; $k < $n; $k++) {
                $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
            }
        }
    }

    for ($row = 0; $row < $m; $row++) {
        for ($col = 0; $col < $q; $col++)
            echo $result[$row][$col]." &nbsp;&nbsp; ";
        echo "<br/>";
    }
}
?>
