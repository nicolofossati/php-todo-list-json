<?php

if (file_exists('todoList.json')) {
    $json_to_string = file_get_contents('todoList.json'); //crea la stringa del file todoList.json
    $todoList = json_decode($json_to_string, true); //decodifica da file json ad array PHP
} else {
    $todoList = [];
}


if (isset($_POST['todoInput'])) {
    $todoList[] = ['task' => $_POST['todoInput'], 'done' => false];
    $string_to_json = json_encode($todoList);
    file_put_contents('todoList.json', $string_to_json);
}

header('content-type: application/json');
echo json_encode($todoList);

?>