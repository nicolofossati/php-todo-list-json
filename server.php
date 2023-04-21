<?php

if (file_exists('todoList.json')) {
    $json_to_string = file_get_contents('todoList.json'); //crea la stringa del file todoList.json
    $todoList = json_decode($json_to_string, true); //decodifica da formato JSON ad array PHP
} else {
    $todoList = []; //se il file todoList.json non è ancora stato creato crea un array vuoto
}


if (isset($_POST['todoInput'])) {
    $todoList[] = ['task' => $_POST['todoInput'], 'done' => false]; //aggiunge il contenuto dell'input a todolist
    $string_to_json = json_encode($todoList); //codifica da array PHP a formato JSON
    file_put_contents('todoList.json', $string_to_json); //sovreascrive il file todoList.json con il nuovo array aggiornato
}

if (isset($_POST['indexDone'])) {
    $todoList[$_POST['indexDone']]['done'] = !$todoList[$_POST['indexDone']]['done'];
    $string_to_json = json_encode($todoList);
    file_put_contents('todoList.json', $string_to_json);
}

if (isset($_POST['indexDelete'])) {
    unset($todoList[$_POST['indexDelete']]);
    $string_to_json = json_encode($todoList);
    file_put_contents('todoList.json', $string_to_json);
}

header('content-type: application/json');
echo json_encode($todoList);

?>