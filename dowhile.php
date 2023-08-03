<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Loop in PHP</title>
</head>
<body>
    <?php
        $sum = 0;
        $n = 100;
        $i = 1;
        do {
        $sum += $i;
        $i++;
        } while ($i < $n);
        echo "The sum is: " . $sum;
    ?>
</body>
</html>