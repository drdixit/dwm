<?php
$connect = mysqli_connect(
    'db',
    'lamp_docker',
    'password',
    'lamp_docker'
);

$query = 'SELECT * FROM test';
$result = mysqli_query($connect, $query);

while ($record = mysqli_fetch_assoc($result)) {
    echo '<h1>' . $record['test1'] . '</h1>';
    echo '<h1>' . $record['test2'] . '</h1>';
    echo '<h1>' . $record['test3'] . '</h1>';
    echo '<h1>' . $record['test4'] . '</h1>';
}
