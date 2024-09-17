<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pr1</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <h2>1 задание</h2>
    <div class="block">
        <?php
        $students = array('Иванов', 'Петров', 'Сидоров', 'Кузнецов', 'Соколов');

        echo "<pre>";
        print_r($students);
        echo "</pre>";

        $count = count($students);
        echo "<p>Количество студентов: $count </p>";

        if (in_array('Сидоров', $students)) {
            echo "<p>Фамилия Сидоров присутствует в списке.</p>";
        } else {
            echo "<p>Фамилии Сидоров нет в списке.</p>";
        }

        $expelled = array_pop($students);
        echo "<p>Удалена фамилия: $expelled </p>";

        echo "<pre>";
        print_r($students);
        echo "</pre>";

        ?>

    </div>

    <h2>2 задание</h2>
    <div class="block">
        <?php

        $data = [
            "Спортивный" => "Сидоров",
            "Художественный" => "Емелина",
            "Музыкальный" => "Иванова",
            "Литературный" => "Петров",
            "Биологический" => "Антонова"
        ];

        echo '<p>Массив до сортировки: </p>';
        foreach ($data as $key => $value) {
            echo "$key - $value <br>";
        }

        asort($data);

        echo '<p>Массив после сортировки: </p>';

        foreach ($data as $key => $value) {
            echo "$key - $value <br>";
        }
        echo '<br>';

        ?>
    </div>

    <h2>3 задание</h2>
    <div class="block">
        <?php

        $fName = 'Лев';
        $lName = 'Маслов';
        $group = '425';
        $hobby = ['Баскетбол', 'Волейбол', 'Компьютерные игры'];
        $social = ['Instagram' => 'AkaruiRaion', 'Telegram' => 'AkaruiRaion'];

        $student = [
            'Имя' => $fName,
            'Фамилия' => $lName,
            'Группа' => $group,
            'Хобби' => $hobby,
            'Социальные сети' => $social
        ];

        echo '<pre>';
        print_r($student);
        echo '</pre>';

        ?>
    </div>

</body>

</html>