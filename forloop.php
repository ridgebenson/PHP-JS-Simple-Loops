<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop in PHP</title>
</head>
<body>
    <?php
        $sum = 0;
        $n = 100;
        for ($i = 1; $i < $n; $i++) {
            $sum += $i;
        }
        echo "The sum is: " . $sum;
    ?>
</body>
</html>
