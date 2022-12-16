<?php
$result = $_SERVER['REQUEST_URI'];
$requestPath1 = explode('/', $result);

echo '<a href="./Task_p.php">Главная</a></br>';

$users = [
    [
        'id' => 1,
        'login' => 'vasya@mail.com',
        'name' => 'Vasya',
        'surname' => 'Djugashvili',
        'patronymic' => 'Artemovich',
        'birth' => '03.02.1956',
        'registration' => '11.12.2022',
        'last_seen' => '12.12.2022',
        'profile_picture' => '../public/ya_vasya.jpg',
    ],
    [
        'id' => 2,
        'login' => 'kolya@mail.com',
        'name' => 'Kolya',
        'surname' => 'Dolov',
        'patronymic' => 'Astapovich',
        'birth' => '13.12.1986',
        'registration' => '13.12.2022',
        'last_seen' => '13.12.2022',
        'profile_picture' => '../public/kolya.jpg',
    ],
    [
        'id' => 3,
        'login' => 'Lucya@mail.com',
        'name' => 'Lucya',
        'surname' => 'Somova',
        'patronymic' => "Vikent'evna",
        'birth' => '7.02.1943',
        'registration' => '10.12.2022',
        'last_seen' => '10.12.2022',
        'profile_picture' => '../public/Lucya.jpg',
    ]
];

$flag = false;
if (isset($requestPath1[2])) {
    echo '<table border ="1">';
    foreach ($users[0] as $key => $element) {
        echo '<th>';
        echo $key;
        echo '</th>';
    }

    for ($i = 0; $i <= count($users) - 1; $i++) {
        if ((string) $users[$i]['id'] === $requestPath1[2]) {
            echo '<tr>';
            echo '<td>' . $users[$i]['id'] . '</td>';
            echo '<td>' . '<a href="Task_p.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</a' . '</td>';
            echo '<td>' . $users[$i]['name'] . '</td>';
            echo '<td>' . $users[$i]['surname'] . '</td>';
            echo '<td>' . $users[$i]['patronymic'] . '</td>';
            echo '<td>' . $users[$i]['birth'] . '</td>';
            echo '<td>' . $users[$i]['registration'] . '</td>';
            echo '<td>' . $users[$i]['last_seen'] . '</td>';
            echo '<td>' . '<img src="' . $users[$i]['profile_picture'] . '">' . '</td>';
            echo '</tr>';
            $flag = true;
            break;
        }
    }
    if ($flag === false) {
        echo 'пользователь не найден';
    }
    echo '</table>';
    exit;
}
if ($requestPath1[1] === 'Task_p.php') {
    echo '<table border ="1">';
    for ($i = 0; $i <= count($users) - 1; $i++) {
        echo '<tr>';
        echo '<td>' . $users[$i]['id'] . '</td>';
        echo '<td>' . '<a href="Task_p.php/' . $users[$i]['id'] . '">' . $users[$i]['login'] . '</td>';
        echo '<td>' . $users[$i]['name'] . '</td>';
        echo '<td>' . $users[$i]['surname'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
    exit;
}
