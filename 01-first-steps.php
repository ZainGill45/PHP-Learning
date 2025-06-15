<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #333333;
            text-align: center;
            color: #f4f4f4;
        }
    </style>
</head>

<body>
    <h1>Hey, this is my first PHP file</h1>
    <h2>
        <?php
            $randomD20Number = rand(min: 1, max: 20);

            echo "Your D20 rolled: $randomD20Number";
        ?>
    </h2>
</body>

</html>