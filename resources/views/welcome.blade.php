<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Название</td>
            <td>Урон</td>
            <td>Броня</td>
            <td>Здоровье</td>
            <td>Количество юнитов в отряде </td>
            <td>Атака</td>
            <td>Защита</td>
        </tr>
        <tr>
            <td>Грабитель</td>
            <td>10</td>
            <td>30</td>
            <td>60</td>
            <td>60</td>
            <td>30</td>
            <td>30</td>
        </tr>
    </table>
    <table>
        <tr>
            <td>Название</td>
            <td>Урон</td>
            <td>Броня</td>
            <td>Здоровье</td>
            <td>Количество юнитов в отряде </td>
            <td>Атака</td>
            <td>Защита</td>
        </tr>
        <tr>
            <td>Крестьянин</td>
            <td>10</td>
            <td>10</td>
            <td>40</td>
            <td>90</td>
            <td>18</td>
            <td>20</td>
        </tr>
    </table>
    <?php
        $w1 = new EvTimer(2, 0, function () {
            echo "2 секунды прошло\n";
        });
    ?>
</body>
</html>