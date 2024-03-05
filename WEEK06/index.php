<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP EX01-Class and Instance</title>
</head>
<body>
    <?php
    require 'Calculator.class.php';

    // สร้าง Instance ของคลาส Calculator
    $cal = new Calculator();

    //ใช้งานเมธอด showResult()
    $cal->showResult(10,20,'+');
    ?>
</body>
</html>