<!DOCTYPE html>
<!-- 8. Сформируйте массив ключ - значение. Каждое значение - это ещё один массив. Например: ключ - название города, значение - список улиц. 
Или любой другой массив, со схожим форматом. Выведите данный массив на экран (консоль или браузер), пример:
Minsk:
— Komsomolskaya
— Odintsova
Vitebsk:
— …. -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        li {
            list-style-type: "— ";
        }
    </style>
</head>

<body>
    <?php
    $cities = [
        'Minsk' => ['Komsomolskaya', 'Odintsova', 'Avakyana', 'Avangardnaya', 'Altayskaya'],
        'Vitebsk' => ['Zamkovaya', 'Tolstova', 'Lenina', 'Chernyahovskogo', 'Frunze'],
        'Brest' => ['Belova', 'Moskovskaya', 'Bobrova', 'Budenogo']
    ];
    foreach ($cities as $city => $streets) {
        echo "<h3>$city:</h3>";
        echo "<ul>";
        foreach ($streets as $key => $street) {
            echo "<li>$street</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>