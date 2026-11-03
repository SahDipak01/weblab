
<?php
$file = "counter.txt";


if (!file_exists($file)) {
    file_put_contents($file, 0);
}

$count = (int)file_get_contents($file);


$count++;


file_put_contents($file, $count);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Visitor Counter</title>
</head>
<body>

    <h1>Welcome to My Website</h1>
    <h2>Website Visitor Counter</h2>

    <h3>
        Total Number of Visitors:
        <?php echo $count; ?>
    </h3>

</body>
</html>

