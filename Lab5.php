
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

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        h1 {
            color: white;
            font-size: 38px;
            margin-bottom: 15px;
            text-align: center;
        }

        h2 {
            color: #f1f1f1;
            font-size: 25px;
            margin-bottom: 30px;
            text-align: center;
        }

        h3 {
            background: white;
            color: #333;
            padding: 35px 50px;
            border-radius: 15px;
            font-size: 23px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
            transition: transform 0.3s ease;
        }

        h3:hover {
            transform: translateY(-5px);
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 27px;
            }

            h2 {
                font-size: 20px;
            }

            h3 {
                font-size: 18px;
                padding: 25px;
                margin: 15px;
            }
        }
    </style>
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
