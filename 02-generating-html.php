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

        .dice-low {
            color: red;
        }
        .dice-average {
            color: #f4f4f4;
        }
        .dice-high {
            color: green;
        }
    </style>
</head>

<body>
    <h1>Hey, this is my first PHP file</h1>
    <?php
        $randomD20Number = rand(min: 1, max: 20);
        $D20ColorClasses = ['dice-low', 'dice-average', 'dice-high'];
        $D20ColorClass = $D20ColorClasses[1];
        
        if ($randomD20Number <= 5)
        {
            $D20ColorClass = $D20ColorClasses[0];
        }
        if ($randomD20Number >= 15)
        {
            $D20ColorClass = $D20ColorClasses[2];
        }

        echo "<h2>Your D20 rolled: <span class=\"{$D20ColorClass}\">{$randomD20Number}</span> </h2>";
    ?>
</body>

</html>